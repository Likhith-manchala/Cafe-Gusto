<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Mexican Cuisine - Cafe Gusto</title>
  <link rel="stylesheet" href="dishes.css" />
</head>
<body>
  <h1>Mexican</h1>
  <div class="dish-container">

    <!-- Dish 1: Sopa de Lima -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/dd6cebbd32164a54b26b2b996c8dd329.jpg?mw=1300.jpg" alt="Sopa de Lima" />
      <h2>Sopa de Lima</h2>
      <p>Price: ₹250</p>
      <p>shredded chicken, spices like cinnamon and clove, vegetables, and lots of lime juice.</p>
      <button class="cart-btn" onclick="updateQuantity('Sopa de Lima',250, -1)">-</button>
      <span id="Sopa de Lima-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Sopa de Lima',250, 1)">+</button>
    </div>


    <!-- Dish 2: Tacos Al Pastor  -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/4ae74c11a068480aa276f568d7caf2c6.jpg?mw=1300.jpg" alt="Tacos Al Pastor" />
      <h2>Tacos Al Pastor</h2>
      <p>Price: ₹200</p>
      <p>A rotating spit, placed on a tortilla and topped with onions, chopped coriander, pineapple chunks, chili, and salsa. </p>
      <button class="cart-btn" onclick="updateQuantity('Tacos Al Pastor', 200, -1)">-</button>
      <span id="Tacos Al Pastor-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Tacos Al Pastor', 200, 1)">+</button>
    </div>
    
    <!-- Dish 3: Burrito  -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/5a54e402b5f343639ec4ac77b67d7dc3.jpg?mw=1300.jpg" alt="Burrito" />
      <h2>Burrito</h2>
      <p>Price: ₹170</p>
      <p>Burrito is a dish consisting of a wheat flour tortilla that is wrapped in such a way that it is possible to fully enclose the flavorful filling on the interior. The filling consists of a combination of various ingredients such as meat, beans, rice, lettuce, guacamole, and cheese, among others.</p>
      <button class="cart-btn" onclick="updateQuantity('Burrito', 170, -1)">-</button>
      <span id="Burrito-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Burrito', 170, 1)">+</button>
    </div>
    
    <!-- Dish 4: Chilaquiles -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/1e6054cdebbb4b80995ee66abb2a6a0a.jpg?mw=1300.jpg" alt="Chilaquiles" />
      <h2>Chilaquiles</h2>
      <p>Price: ₹160</p>
      <p>an assembly of fried tortilla pieces drenched in chili sauce with optional meat and vegetables</p>
      <button class="cart-btn" onclick="updateQuantity('Chilaquiles', 160, -1)">-</button>
      <span id="Chilaquiles-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Chilaquiles', 160, 1)">+</button>
    </div>
    
    <!-- Dish 5: Tostadas -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/18b8ac2d18754fbdaa28336bb18b44a1.jpg?mw=1300.jpg" alt="Tostadas" />
      <h2>Tostadas</h2>
      <p>Price: ₹210</p>
      <p>The dish consists of toasted tortillas topped with red salsa. The salsa is typically made with a combination of tomatoes, onions, garlic, hot peppers, oil, salt, and coriander.The ingredients are boiled, blended, then cooked a bit more with the seasoning mix until the salsa thickens. It is then spooned over the tostadas and served warm.</p>
      <button class="cart-btn" onclick="updateQuantity('Tostadas', 210, -1)">-</button>
      <span id="Tostadas-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Tostadas', 210, 1)">+</button>
    </div>
    
    <!-- Dish 6: Gorditas -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/33fb0754970149a0a2f340425b4c971c.jpg?mw=1300.jpg" />
      <h2>Gorditas</h2>
      <p>Price: ₹200</p>
      <p>The gorditas are made with masa harina, and they are filled with a combination of beans, garlic, chili peppers, and cumin.</p>
      <button class="cart-btn" onclick="updateQuantity('Gorditas', 200, -1)">-</button>
      <span id="Gorditas-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Gorditas', 200, 1)">+</button>
    </div>
    
    <!-- Dish 7: Mulitas -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/effbed3d477245de84da6f999340160e.jpg?mw=1300.jpg" alt="Mulitas" />
      <h2>Mulitas</h2>
      <p>Price: ₹230</p>
      <p>a crispy tortilla filled with chunks of grilled meat, cheese, and salsa or guacamole topping,</p>
      <button class="cart-btn" onclick="updateQuantity('Mulitas', 230, -1)">-</button>
      <span id="Mulitas-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Mulitas', 230, 1)">+</button>
    </div>
    
    <!-- Dish 8: Conchas -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/9cef9e8adbda4d5789116d1f6a459f6c.jpg?mw=1300.jpg" alt="Conchas" />
      <h2>Conchas</h2>
      <p>Price: ₹250</p>             
      <p>The bread is made from flour, sugar, yeast, salt, butter, eggs, and often milk or vanilla.</p>
      <button class="cart-btn" onclick="updateQuantity('Conchas', 250, -1)">-</button>
      <span id="Conchas-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Conchas', 250, 1)">+</button>
    </div>
    
    <!-- Dish 9: Rompope  -->
    <div class="dish-card">
      <img src="https://hips.hearstapps.com/hmg-prod/images/rompope-lead-65772fd24b78d.jpg" alt="Rompope" />
      <h2>Rompope</h2>
      <p>Price: ₹190</p>
      <p>The drink is based on a combination of rum or brandy, milk, sugar, and egg yolks, while the additions may include nuts and typically vanilla flavoring, nutmeg, or cinnamon. </p>
      <button class="cart-btn" onclick="updateQuantity('Rompope', 190, -1)">-</button>
      <span id="Rompope-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Rompope', 190, 1)">+</button>
    </div>

    <!-- Dish 10: Guarapo -->
    <div class="dish-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS4cBmV0j5tQuoG7T6Y7T6Lhl63qe9fcpmeJw&s.jpg" alt="Guarapo" />
      <h2>Guarapo</h2>
      <p>Price: ₹200</p>
      <p>Guarapo is a Latin American drink made from raw, pressed sugarcane juice mixed with water, ice, and lots of fresh limes.</p>
      <button class="cart-btn" onclick="updateQuantity('Guarapo', 200, -1)">-</button>
      <span id="Guarapo-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Guarapo', 200, 1)">+</button>
    </div>
  </div>
  
  <!-- Navigation Buttons -->
  <div class="nav-buttons">
    <a href="cuisines.php" class="back-btn">Back to Cuisines</a>
    <a href="cart.php" class="back-btn">View Cart</a>
  </div>
  <script src="dishes.js"></script>
</body>
</html>