<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Chinese Cuisine - Cafe Gusto</title>
  <link rel="stylesheet" href="dishes.css" />
</head>
<body>
  <h1>Chinese</h1>
  <div class="dish-container">

    <!-- Dish 1: Veg Noodles -->
    <div class="dish-card">
      <img src="https://cdn.tasteatlas.com//Images/Dishes/148ba9db636c40f699567b013e9828c5.jpg?w=905&h=510.jpg" alt="Veg Noodles" />
      <h2>Veg Noodles</h2>
      <p>Price: ₹170</p>
      <p>a spicy sauce served with the noodles. Made with chili oil, preserved vegetables, Sichuan peppercorn, and sometimes sesame or peanut paste, the sauce bursts with heat and complex flavors.</p>
      <button class="cart-btn" onclick="updateQuantity('Veg Noodles', 170, -1)">-</button>
      <span id="Veg Noodles-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Veg Noodles', 170, 1)">+</button>
    </div>

    <!-- Dish 2: Chicken Noodles -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/42960c196a6240a78fee05c24850ba4b.jpg?mw=1300.jpg" alt="Chicken Noodles" />
      <h2>Chicken Noodles</h2>
      <p>Price: ₹220</p>
      <p>Shredded chicken noodles combination of egg noodles, mushrooms, chicken, chicken stock, soy sauce, oyster sauce, Shaoxing wine, sugar, cornflour, and green leafy vegetables such as spinach.</p>
      <button class="cart-btn" onclick="updateQuantity('Chicken Noodles', 220, -1)">-</button>
      <span id="Chicken Noodles-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Chicken Noodles', 220, 1)">+</button>
    </div>
    
    <!-- Dish 3: Manchurian -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/cba6279ae21445539df7e5f35b063bcb.jpg?mw=1300.jpg" alt="Manchurian" />
      <h2>Manchurian</h2>
      <p>Price: ₹200</p>
      <p>The cauliflower florets are coated in batter and deep-fried until crisp. The batter often consists of water, flour, corn flour, red chili powder, and seasonings, while the sauce is made with a combination of garlic, ginger, onions, scallions, soy sauce, vinegar, oil, sugar, and chili peppers.</p>
      <button class="cart-btn" onclick="updateQuantity('Manchurian', 200, -1)">-</button>
      <span id="Manchurian-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Manchurian', 200, 1)">+</button>
    </div>
    
    <!-- Dish 4: Chicken Manchurian -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/4cc2758bb1354d4e8b1e018105767fed.jpg?mw=1300.jpg" alt="Chicken Manchurian" />
      <h2>Chicken Manchurian</h2>
      <p>Price: ₹280</p>
      <p> Made by roughly chopping and deep-frying ingredients such as chicken, cauliflower (gobi), prawns, fish, mutton, and paneer, and then sautéeing them in a sauce flavored with soy sauce.</p>
      <button class="cart-btn" onclick="updateQuantity('Chicken Manchurian', 280, -1)">-</button>
      <span id="Chicken Manchurian-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Chicken Manchurian', 280, 1)">+</button>
    </div>
    
    <!-- Dish 5: Spring Rolls -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/7e44f5dd6dc547009fa957b89cb9bf19.jpg?mw=1300.jpg" alt="Spring Rolls" />
      <h2>Spring Rolls</h2>
      <p>Price: ₹300</p>
      <p>thin sheets of dough that are filled with various ingredients, then deep-fried in hot oil. Some of the more common ingredients for the filling include shredded pork, shrimp, mushrooms, and cabbage.</p>
      <button class="cart-btn" onclick="updateQuantity('Spring Rolls', 300, -1)">-</button>
      <span id="Spring Rolls-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Spring Rolls', 300, 1)">+</button>
    </div>
    
    <!-- Dish 6: Hot Pot -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/6680af3463bb4eeebfe37fa96a0feef4.jpg?mw=1300.jpg" alt = "Hot Pot" />
      <h2>Hot Pot</h2>
      <p>Price: ₹500</p>
      <p>Typical ingredients used in hot pots include mushrooms, thinly sliced meat, tofu, seafood, leafy vegetables, egg dumplings, udon, potatoes, and many more. Cooked ingredients are traditionally consumed with a dipping sauce on the side.</p>
      <button class="cart-btn" onclick="updateQuantity('Hot Pot', 500, -1)">-</button>
      <span id="Hot Pot-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Hot Pot', 500, 1)">+</button>
    </div>
    
    <!-- Dish 7: Dumplings -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/30dd0ba19548459885ba41337e739e5c.jpg?mw=1300.jpg" alt="Dumplings" />
      <h2>Dumplings</h2>
      <p>Price: ₹170</p>
      <p>soup-filled dumplings filled with crab or shrimp meat.</p>
      <button class="cart-btn" onclick="updateQuantity('Dumplings', 170, -1)">-</button>
      <span id="Dumplings-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Dumplings', 170, 1)">+</button>
    </div>
    
    <!-- Dish 8: Kung Pao Chicken -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/91e1f0236e414f9dbaefe548f5384a20.jpg?mw=1300.jpg" alt="Kung Pao Chicken" />
      <h2>Kung Pao Chicken</h2>
      <p>Price: ₹280</p>             
      <p>kung pao chicken is a spicy stir-fry dish made with diced chicken, vegetables, peanuts, and Sichuan peppercorns.</p>
      <button class="cart-btn" onclick="updateQuantity('Kung Pao Chicken', 280, -1)">-</button>
      <span id="Kung Pao Chicken-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Kung Pao Chicken', 280, 1)">+</button>
    </div>
    
    <!-- Dish 9: Yangzhou fried rice  -->
    <div class="dish-card">
      <img src="https://cdn.tasteatlas.com//Images/Dishes/45e5473ffdea4c658aa74b47f3065ea7.jpg?w=905&h=510 .jpg" alt="Yangzhou fried rice " />
      <h2>Yangzhou fried rice </h2>
      <p>Price: ₹250</p>
      <p>Yangzhou fried rice  consisting of rice, eggs, and vegetables such as carrots, mushrooms, peas, while the common additions also include shrimps, meat, scallions, and Chinese ham. Traditional versions sometimes may incorporate sea cucumbers, crab meat, and bamboo shoots.</p>
      <button class="cart-btn" onclick="updateQuantity('Yangzhou fried rice ', 250, -1)">-</button>
      <span id="Yangzhou fried rice -quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Yangzhou fried rice ', 250, 1)">+</button>
    </div>

    <!-- Dish 10: Dim Sums -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/a000ac2b437b4c5aae6ca6b6b8ac384f.jpg?mw=1300.jpg" alt="Dim Sums" />
      <h2>Dim Sums</h2>
      <p>Price: ₹200</p>
      <p>steamed dumplings with pork and prawns, spring rolls, stuffed crab claws, rice porridge congee, pork buns, wo tip dumplings with ground meat or rice noodle rolls</p>
      <button class="cart-btn" onclick="updateQuantity('Dim Sums', 200, -1)">-</button>
      <span id="Dim Sums-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Dim Sums', 200, 1)">+</button>
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