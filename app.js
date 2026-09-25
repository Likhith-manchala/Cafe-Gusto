const menu = [
  ['Indian', [['Butter Chicken', 350], ['Paneer Tikka', 280], ['Biryani', 400], ['Masala Dosa', 130]]],
  ['Italian', [['Lasagne', 350], ['Pizza', 280], ['Pasta e Fagioli', 280], ['Panna Cotta', 400]]],
  ['Chinese', [['Dim Sum', 260], ['Kung Pao Chicken', 340], ['Chow Mein', 220], ['Spring Rolls', 180]]],
  ['Korean', [['Bibimbap', 320], ['Kimchi Fried Rice', 280], ['Korean Fried Chicken', 390], ['Tteokbokki', 240]]],
  ['Mexican', [['Tacos', 260], ['Enchiladas', 320], ['Guacamole', 180], ['Churros', 160]]],
  ['French', [['Ratatouille', 290], ['Quiche Lorraine', 340], ['Coq au Vin', 420], ['Crepes', 220]]]
];

function getCart() { return JSON.parse(localStorage.getItem('cart') || '{}'); }
function saveCart(cart) { localStorage.setItem('cart', JSON.stringify(cart)); }
function changeQuantity(name, price, change) {
  const cart = getCart();
  cart[name] = cart[name] || { quantity: 0, price };
  cart[name].quantity = Math.max(0, cart[name].quantity + change);
  if (!cart[name].quantity) delete cart[name];
  saveCart(cart);
  renderMenu();
}
function changeQuantityEncoded(encodedName, price, change) {
  changeQuantity(decodeURIComponent(encodedName), price, change);
}
function renderMenu(selected = 'All') {
  const grid = document.querySelector('.dish-grid');
  if (!grid) return;
  const cart = getCart();
  grid.innerHTML = '';
  menu.filter(([cuisine]) => selected === 'All' || cuisine === selected).forEach(([cuisine, dishes]) => dishes.forEach(([name, price]) => {
    const quantity = cart[name]?.quantity || 0;
    grid.insertAdjacentHTML('beforeend', `<article class="dish-card"><p class="eyebrow">${cuisine}</p><h2>${name}</h2><p class="price">₹${price}</p><p>Prepared fresh with the character and comfort of ${cuisine.toLowerCase()} cooking.</p><button class="small-button" onclick="changeQuantityEncoded('${encodeURIComponent(name)}', ${price}, -1)">−</button><span class="quantity">${quantity} in cart</span><button class="small-button" onclick="changeQuantityEncoded('${encodeURIComponent(name)}', ${price}, 1)">+</button></article>`);
  }));
}
function renderCart() {
  const list = document.querySelector('#cart-items');
  if (!list) return;
  const cart = getCart(); let total = 0;
  list.innerHTML = Object.entries(cart).map(([name, item]) => { const line = item.quantity * item.price; total += line; return `<div class="cart-item"><span>${name} × ${item.quantity}</span><strong>₹${line}</strong></div>`; }).join('') || '<p class="notice">Your cart is empty.</p>';
  document.querySelector('#cart-total').textContent = `Grand total: ₹${total}`;
  window.cartTotal = total;
}
function getOrderEndpoint() {
  return ['localhost', '127.0.0.1'].includes(location.hostname) ? 'process_order.php' : '/api/order';
}
async function placeOrder() {
  const name = document.querySelector('#customer-name').value.trim();
  const method = document.querySelector('#payment-method').value;
  const reference = document.querySelector('#payment-reference').value.trim();
  if (!name || !window.cartTotal) return alert('Please enter your name and add items to your cart.');
  if (method !== 'cash' && !reference) return alert('Please enter your payment reference.');
  const items = Object.entries(getCart()).map(([dish_name, item]) => ({ dish_name, ...item }));
  try {
    const response = await fetch(getOrderEndpoint(), { method: 'POST', headers: { 'Content-Type': 'application/json' }, body: JSON.stringify({ customer_name: name, total_amount: window.cartTotal, payment_method: method, payment_reference: reference, items }) });
    const result = await response.json();
    if (!response.ok || !result.success) return alert(result.message || 'Unable to place order.');
    const paymentMessage = result.payment_status === 'pending' ? 'Payment is due at the table' : 'Payment confirmed';
    alert(`Order confirmed for Table ${result.table_number}. ${paymentMessage}. Transaction: ${result.transaction_reference}`);
    localStorage.removeItem('cart'); location.href = 'index.html';
  } catch (error) {
    alert(`Unable to place order: ${error.message}`);
  }
}
