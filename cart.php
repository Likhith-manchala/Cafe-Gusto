<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Your Cart - Cafe XYZ</title>
  <link rel="stylesheet" href="dishes.css" />
  <style>
    body {
      background-color: #1e1e1e;
      font-family: Arial, sans-serif;
      color: white;
    }

    .cart-container {
      max-width: 800px;
      margin: 30px auto;
      background: #ffffff0f;
      padding: 20px;
      border-radius: 16px;
    }

    .cart-item {
      border-bottom: 1px solid #444;
      padding: 10px 0;
    }

    .cart-total {
      font-size: 22px;
      margin-top: 20px;
      font-weight: bold;
    }

    .input-group {
      margin-top: 20px;
    }

    .input-group label {
      display: block;
      margin-bottom: 6px;
      font-weight: bold;
    }

    .input-group input {
      width: 100%;
      padding: 10px;
      border-radius: 8px;
      border: none;
      font-size: 16px;
      margin-bottom: 16px;
    }

    .btn-group {
      margin-top: 20px;
      display: flex;
      flex-wrap: wrap;
      gap: 10px;
      justify-content: space-between;
    }

    .btn-group a,
    .btn-group button {
      padding: 10px 20px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      background-color: #222;
      color: white;
      text-decoration: none;
      font-size: 16px;
      flex: 1;
      text-align: center;
    }

    .btn-group button:hover,
    .btn-group a:hover {
      background-color: #444;
    }
  </style>
</head>
<body>
  <div class="cart-container">
    <h1>Your Cart</h1>
    <div id="cart-items"></div>
    <div class="cart-total" id="cart-total"></div>

    <div class="input-group">
      <label for="customer-name">Customer Name:</label>
      <input type="text" id="customer-name" placeholder="Enter your name" />

      <label for="table-number">Table Number:</label>
      <input type="number" id="table-number" placeholder="Enter your table number" />
    </div>

    <div class="btn-group">
      <a href="interface.php">Back to Cuisines</a>
      <button onclick="clearCart()">Clear Cart</button>
      <button onclick="placeOrder()">Place Order</button>
      </div>
  </div>

  <script>
    const cart = JSON.parse(localStorage.getItem("cart")) || {};
    const cartItemsDiv = document.getElementById("cart-items");
    const cartTotalDiv = document.getElementById("cart-total");

    let total = 0;

    for (const [dish, data] of Object.entries(cart)) {
      if (data.quantity > 0) {
        const itemTotal = data.quantity * data.price;
        total += itemTotal;

        const itemDiv = document.createElement("div");
        itemDiv.className = "cart-item";
        itemDiv.innerHTML = `
          <h3>${dish}</h3>
          <p>Price: ₹${data.price}</p>
          <p>Quantity: ${data.quantity}</p>
          <p>Total: ₹${itemTotal}</p>
        `;
        cartItemsDiv.appendChild(itemDiv);
      }
    }

    cartTotalDiv.textContent = total > 0 ? `Grand Total: ₹${total}` : "Your cart is empty.";

    function clearCart() {
      localStorage.removeItem("cart");
      location.reload();
    }

    async function placeOrder() {
      const name = document.getElementById("customer-name").value.trim();
      const table = document.getElementById("table-number").value.trim();

      if (!name || !table) {
        alert("Please enter both your name and table number before placing the order.");
        return;
      }

      if (total <= 0) {
        alert("Your cart is empty. Please add some items before placing an order.");
        return;
      }

      // Prepare order data
      const orderItems = [];
      for (const [dish, data] of Object.entries(cart)) {
        if (data.quantity > 0) {
          orderItems.push({
            dish_name: dish,
            quantity: data.quantity,
            price: data.price
          });
        }
      }

      const orderData = {
        customer_name: name,
        table_number: parseInt(table),
        items: orderItems
      };

      try {
        const response = await fetch("process_order.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json"
          },
          body: JSON.stringify(orderData)
        });

        const result = await response.json();

        if (result.success) {
          alert(`Thank you, ${name}! Your order for Table ${table} has been placed successfully.`);
          localStorage.removeItem("cart");
          window.location.href = "interface.php";
        } else {
          alert("Failed to place order: " + result.message);
        }
      } catch (error) {
        alert("Error placing order: " + error.message);
      }
    }
  </script>
</body>
</html>
