<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Italian Cuisine - Cafe Gusto</title>
  <link rel="stylesheet" href="dishes.css" />
</head>
<body>
  <h1>Italian</h1>
  <div class="dish-container">

    <!-- Dish 1: Lasagne -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/7d18d5b6fa764943bb5a26dd2bdff644.jpg?mw=1300.jpg" alt="Lasagne" />
      <h2>Lasagne</h2>
      <p>Price: ₹350</p>
      <p>thin pasta sheets that are interleaved with a mixture of savory ingredients and baked in the oven. made with ingredients such as radicchio, mushrooms, spinach, artichokes, ricotta, asparagus, prosciutto, zucchini, eggplants, and even seafood such as shrimps and scallops.</p>
      <button class="cart-btn" onclick="updateQuantity('Lasagne', 350, -1)">-</button>
      <span id="Lasagne-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Lasagne', 350, 1)">+</button>
    </div>

    <!-- Dish 2: Rissoto -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/70f5cf7e2f2540dcb0452825b0971837.jpg?mw=1300.jpg" alt="Rissoto" />
      <h2>Rissoto</h2>
      <p>Price: ₹280</p>
      <p>Usually prepared using the same key components: rice, stock, butter, wine, parmesan, saffron, and onions with ingredients such as truffles, squid ink, asparagus, sausage, scallops, and veal, among many others.</p>
      <button class="cart-btn" onclick="updateQuantity('Rissoto', 280, -1)">-</button>
      <span id="Rissoto-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Rissoto', 280, 1)">+</button>
    </div>
    
    <!-- Dish 3: Bombardino Cocktail -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/ingredients/a7c198387dae4cccbeedd3cdba89db87.jpg?mw=1300.jpg" alt="Bombardino Cocktail" />
      <h2>Bombardino Cocktail</h2>
      <p>Price: ₹280</p>
      <p>talian winter cocktail made with a combination of brandy, VOV egg liqueur, whipped cream, and cinnamon.</p>
      <button class="cart-btn" onclick="updateQuantity('Bombardino Cocktail', 280, -1)">-</button>
      <span id="Bombardino Cocktail-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Bombardino Cocktail', 280, 1)">+</button>
    </div>
    
    <!-- Dish 4: Pasta e Fagioli -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/c4e8c4a98a4e4cb0b55c00ad763ba9ab.jpg?mw=1300.jpg" alt="Pasta e Fagioli" />
      <h2>Pasta e Fagioli</h2>
      <p>Price: ₹280</p>
      <p>the dish is made with beans and small varieties of pasta, cooked in a base of olive oil, onions, celery, carrots, garlic, and stewed tomatoes, or a broth which can be vegetarian or meat-based.</p>
      <button class="cart-btn" onclick="updateQuantity('Pasta e Fagioli', 280, -1)">-</button>
      <span id="Pasta e Fagioli-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Pasta e Fagioli', 280, 1)">+</button>
    </div>
    
    <!-- Dish 5: Pizza -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/8e0ec129d54d48188a5f700ce4db8919.jpg?mw=1300.jpg" alt="Pizza" />
      <h2>Pizza</h2>
      <p>Price: ₹280</p>
      <p>Italian pizza that is traditionally topped with tomato sauce, mozzarella cheese, mushrooms, oil, and parsley.</p>
      <button class="cart-btn" onclick="updateQuantity('Pizza', 280, -1)">-</button>
      <span id="Pizza-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Pizza', 280, 1)">+</button>
    </div>
    
    <!-- Dish 6: Spaghetti carbonara -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/79b072c652ba423eb4de617b9b51a399.jpg?mw=1300.jpg" alt = "Spaghetti carbonara" />
      <h2>Spaghetti carbonara</h2>
      <p>Price: ₹280</p>
      <p>prepared by simply tossing spaghetti with guanciale (cured pork jowl), egg yolks, and Pecorino Romano cheese. Despite its simplicity, this dish remains one of Rome's favorites, equally popular throughout the country.</p>
      <button class="cart-btn" onclick="updateQuantity('Spaghetti carbonara', 280, -1)">-</button>
      <span id="Spaghetti carbonara-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Spaghetti carbonara', 280, 1)">+</button>
    </div>
    
    <!-- Dish 7: Tortellini -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/b405b0aa331d47d0a983b42b2e53d17a.jpg?mw=1300.jpg" alt="Tortellini" />
      <h2>Tortellini</h2>
      <p>Price: ₹280</p>
      <p>made with a variety of ingredients securely wrapped inside a layer of egg pasta, creating a pocket which is then folded in a ring shape. </p>
      <button class="cart-btn" onclick="updateQuantity('Tortellini', 280, -1)">-</button>
      <span id="Tortellini-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Tortellini', 280, 1)">+</button>
    </div>
    
    <!-- Dish 8: Marron Glacé -->
    <div class="dish-card">
      <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTMI98MpEw5jF4m7_eh_T2D3mvjNn1vN1KcPA&s.jpg" alt="Marron Glacé" />
      <h2>Marron Glacé</h2>
      <p>Price: ₹280</p>             
      <p>The chestnuts have a unique, soft texture, and a slightly sweet flavor.</p>
      <button class="cart-btn" onclick="updateQuantity('Marron Glacé', 280, -1)">-</button>
      <span id="Marron Glacé-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Marron Glacé', 280, 1)">+</button>
    </div>
    
    <!-- Dish 9: Arancini -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/0295710a07ba4201809c64c808e50044.jpg?mw=1300.jpg" alt="Arancini" />
      <h2>Arancini</h2>
      <p>Price: ₹280</p>
      <p>he fillings often include meat sauce with peas, dried prosciutto, cheeses such as mozzarella and pecorino, tomatoes, or dried capers.The balls are rolled in breadcrumbs and fried in hot oil</p>
      <button class="cart-btn" onclick="updateQuantity('Arancini', 280, -1)">-</button>
      <span id="Arancini-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Arancini', 280, 1)">+</button>
    </div>

    <!-- Dish 10: Panna Cotta  -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/d8ae78171ba445c98ec71ff782a9b1d7.jpg?mw=1300 .jpg" alt="Panna Cotta " />
      <h2>Panna Cotta </h2>
      <p>Price: ₹400</p>
      <p>A traditional Piedmontese dessert, and the original recipe calls for only whole cream, sugar, vanilla, and gelatin.</p>
      <button class="cart-btn" onclick="updateQuantity('Panna Cotta ', 400, -1)">-</button>
      <span id="Panna Cotta -quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Panna Cotta ', 400, 1)">+</button>
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