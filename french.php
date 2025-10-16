<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>French Cuisine - Cafe Gusto</title>
  <link rel="stylesheet" href="dishes.css" />
</head>
<body>
  <h1>French</h1>
  <div class="dish-container">

    <!-- Dish 1: Ratatouille -->
    <div class="dish-card">
      <img src="https://cdn.apartmenttherapy.info/image/upload/f_jpg,q_auto:eco,c_fill,g_auto,w_1500,ar_1:1/k%2FPhoto%2FRecipes%2F2024-07-ratatouille%2FRatatouille-.jpg" alt="Ratatouille" />
      <h2>Ratatouille</h2>
      <p>Price: ₹350</p>
      <p> a stew of summer vegetables like eggplant, zucchini, bell peppers, tomatoes, and onions, seasoned with herbs and garlic</p>
      <button class="cart-btn" onclick="updateQuantity('Ratatouille', 350, -1)">-</button>
      <span id="Ratatouille-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Ratatouille', 350, 1)">+</button>
    </div>

    <!-- Dish 2: Salad Nicoise -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/180dbe3bbb5847d581fefb65aa0ab02d.jpg?mw=1300.jpg" alt="Salad Nicoise" />
      <h2>Salad Nicoise</h2>
      <p>Price: ₹200</p>
      <p>Consists of fresh tomatoes, anchovies, black olives, capers, beans, and a drizzle of lemon juice.</p>
      <button class="cart-btn" onclick="updateQuantity('Salad Nicoise', 200, -1)">-</button>
      <span id="Salad Nicoise-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Salad Nicoise', 200, 1)">+</button>
    </div>
    
    <!-- Dish 3: Brandade  -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/10342f8feca14effa1a4b177683941c2.jpg?mw=1300.jpg" alt="Brandade" />
      <h2>Brandade</h2>
      <p>Price: ₹250</p>
      <p>French dish consisting of mashed salt cod that is mixed with olive oil, potatoes, and often garlic and milk until the consistency becomes smooth and creamy</p>
      <button class="cart-btn" onclick="updateQuantity('Brandade', 250, -1)">-</button>
      <span id="Brandade-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Brandade', 250, 1)">+</button>
    </div>
    
    <!-- Dish 4: Raclette -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/5743b7c1be23451091bde1c846c67f00.jpg?mw=1300.jpg" alt="Raclette" />
      <h2>Raclette</h2>
      <p>Price: ₹300</p>
      <p>a buttery, crescent-shaped French pastry made from a laminated yeast dough, known for its flaky, light, and slightly sweet texture. </p>
      <button class="cart-btn" onclick="updateQuantity('Raclette', 300, -1)">-</button>
      <span id="Raclette-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Raclette', 300, 1)">+</button>
    </div>
    
    <!-- Dish 5: Croissant -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/951d4c43ad6749b5b025d29795fa7ae2.jpg?mw=1300.jpg" alt="Croissant" />
      <h2>Croissant</h2>
      <p>Price: ₹200</p>
      <p>flaky, golden-colored, crescent-shaped pastries are best made with pure butter and a slightly sweet yeast dough.</p>
      <button class="cart-btn" onclick="updateQuantity('Croissant', 200, -1)">-</button>
      <span id="Croissant-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Croissant', 200, 1)">+</button>
    </div>
    
    <!-- Dish 6: Cassoulet -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/8a2c35beb36f434d8e6af9cb4fd4ce49.jpg?mw=1300.jpg" alt = "Cassoulet" />
      <h2>Cassoulet</h2>
      <p>Price: ₹240</p>
      <p> slow-cooked French casserole originating in southwestern France, typically featuring white beans, various meats (like pork, duck, and sausage), and herbs, often baked in an earthenware dish. </p>
      <button class="cart-btn" onclick="updateQuantity('Cassoulet', 240, -1)">-</button>
      <span id="Cassoulet-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Cassoulet', 240, 1)">+</button>
    </div>
    
    <!-- Dish 7: Souffle -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/064bd8d6006c46529ec729cf45cd335e.jpg?mw=1300.jpg" alt="Souffle" />
      <h2>Souffle</h2>
      <p>Price: ₹270</p>
      <p>a light, airy baked dish, typically made with a flavorful base (like cheese or chocolate) and beaten egg whites, which rise and puff up when cooked, creating a delicate, fluffy texture. </p>
      <button class="cart-btn" onclick="updateQuantity('Souffle', 270, -1)">-</button>
      <span id="Souffle-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Souffle', 270, 1)">+</button>
    </div>
    
    <!-- Dish 8: Eclair  -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/5af8a479dedb4d53a7718ca752a536eb.jpg?mw=1300.jpg" alt="Eclair" />
      <h2>Eclair</h2>
      <p>Price: ₹270</p>             
      <p>a French pastry made with choux pastry, typically filled with cream or custard and topped with icing, often chocolate. </p>
      <button class="cart-btn" onclick="updateQuantity('Eclair', 270, -1)">-</button>
      <span id="Eclair-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Eclair', 270, 1)">+</button>
    </div>
    
    <!-- Dish 9: Macaron -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/11521e385e0d4b38b8344eeb1a68e228.jpg?mw=1300.jpg" alt="Macaron" />
      <h2>Macaron</h2>
      <p>Price: ₹270</p>
      <p>elicate, meringue-based French sandwich cookies with a smooth, round top, ruffled edges (called the "crown," "foot," or "pied"), and a flat base, filled with a variety of creamy fillings like buttercream, ganache, or jam. </p>
      <button class="cart-btn" onclick="updateQuantity('Macaron', 270, -1)">-</button>
      <span id="Macaron-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Macaron', 270, 1)">+</button>
    </div>

    <!-- Dish 10: Crepes -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/34674c04e97c4c5fa115c48ee6cbe993.jpg?mw=1300.jpg" alt="Crepes" />
      <h2>Crepes</h2>
      <p>Price: ₹300</p>
      <p>thin, French-style pancakes made from a simple batter of flour, eggs, milk, and butter</p>
      <button class="cart-btn" onclick="updateQuantity('Crepes', 300, -1)">-</button>
      <span id="Crepes-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Crepes', 300, 1)">+</button>
    </div>
  </div>
  
  <!-- Navigation Buttons -->
  <div class="nav-buttons">
    <a href="interface.php" class="back-btn">Back to Cuisines</a>
    <a href="cart.php" class="back-btn">View Cart</a>
  </div>
  <script src="dishes.js"></script>

</body>
</html>