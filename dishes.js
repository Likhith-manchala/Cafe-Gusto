// Load cart from localStorage or initialize if not present
let cart = JSON.parse(localStorage.getItem('cart')) || {};

// Update dish quantity in the cart
function updateQuantity(dishName, price, change) {
    if (!cart[dishName]) {
        cart[dishName] = { quantity: 0, price: price };
    }

    cart[dishName].quantity += change;

    // Prevent negative quantities
    if (cart[dishName].quantity < 0) {
        cart[dishName].quantity = 0;
    }

    // Update the displayed quantity
    document.getElementById(`${dishName}-quantity`).textContent =
        `Quantity: ${cart[dishName].quantity}`;

    // Save updated cart to localStorage
    localStorage.setItem('cart', JSON.stringify(cart));
}

// Optional: expose cart globally for debugging
window.cart = cart;
// Submit cart to PHP backend
function placeOrder(cartItems) {
    fetch("http://localhost/cafe/order.php", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify({ items: cartItems })
    })
    .then(res => res.json())
    .then(data => {
        if (data.success) {
            alert("Order placed successfully!");
            clearCart(); // Optional function to reset cart
        } else {
            alert("Order failed.");
        }
    })
    .catch(err => {
        console.error("Error placing order:", err);
        alert("Something went wrong.");
    });
}

// Sample hook to your "Place Order" button
function submitOrder() {
    const cartItems = getCartItems(); // You should implement this function
    if (cartItems.length === 0) return alert("Your cart is empty!");
    placeOrder(cartItems);
}

function getCartItems() {
    let items = [];
    for (let dish in cart) {
        if (cart[dish].quantity > 0) {
            items.push({
                name: dish,
                quantity: cart[dish].quantity,
                price: cart[dish].price
            });
        }
    }
    return items;
}

