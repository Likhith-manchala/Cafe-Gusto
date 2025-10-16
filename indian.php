<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Indian Cuisine - Cafe Gusto</title>
  <link rel="stylesheet" href="dishes.css" />
</head>
<body>
  <h1>Indian</h1>
  <div class="dish-container">

    <!-- Dish 1: Butter Chicken -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/713e5f01cbb2463386be9bc57c037639.jpg?mw=1300.jpg" alt="Butter Chicken" />
      <h2>Butter Chicken</h2>
      <p>Price: ₹350</p>
      <p>a combination of roasted meat, plenty of spices, a rich gravy made with cream, tomatoes, and butter, this dish is best accompanied by naan bread and garnished with even more butter, coriander, or green chilis.</p>
      <button class="cart-btn" onclick="updateQuantity('Butter Chicken', 350, -1)">-</button>
      <span id="Butter Chicken-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Butter Chicken', 350, 1)">+</button>
    </div>

    <!-- Dish 2: Paneer Tikka -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/16dbebbff2e04e0d984f4ed83be93b97.jpg?mw=1300.jpg" alt="Paneer Tikka" />
      <h2>Paneer Tikka</h2>
      <p>Price: ₹280</p>
      <p>Pieces of paneer, tomatoes, onions, and peppers are skewered, grilled, and then seasoned with lemon juice and chaat masala - a spicy powder</p>
      <button class="cart-btn" onclick="updateQuantity('Paneer Tikka', 280, -1)">-</button>
      <span id="Paneer Tikka-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Paneer Tikka', 280, 1)">+</button>
    </div>
    
    <!-- Dish 3: Veg Thaali -->
    <div class="dish-card">
      <img src="https://static.toiimg.com/thumb/resizemode-4,width-1280,height-720,msid-112353618/112353618.jpg" alt="Veg Thaali" />
      <h2>Veg Thaali</h2>
      <p>Price: ₹250</p>
      <p>a traditional Indian meal served on a large plate or banana leaf, featuring a variety of dishes, including rice, roti or naan, dal (lentils), vegetable curries, yogurt, pickles, and sometimes a sweet dish. </p>
      <button class="cart-btn" onclick="updateQuantity('Veg Thaali', 250, -1)">-</button>
      <span id="Veg Thaali-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Veg Thaali', 250, 1)">+</button>
    </div>
    
    <!-- Dish 4: Non Veg Thaali -->
    <div class="dish-card">
      <img src="https://i0.wp.com/vps029.manageserver.in/menu/wp-content/uploads/2024/01/indian-gavkari-chicken-thali-food-600nw-2017167788-1.webp?fit=600%2C450&ssl=1.jpg" alt="Non Veg Thaali" />
      <h2>Non Veg Thaali</h2>
      <p>Price: ₹450</p>
      <p>a traditional Indian meal featuring a platter of various dishes, including meat or poultry curries, rice, bread, and other accompaniments, all served together on a single plate. </p>
      <button class="cart-btn" onclick="updateQuantity('Non Veg Thaali', 450, -1)">-</button>
      <span id="Non Veg Thaali-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Non Veg Thaali', 450, 1)">+</button>
    </div>
    
    <!-- Dish 5: Butter Naan -->
    <div class="dish-card">
      <img src="https://allwaysdelicious.com/wp-content/uploads/2022/04/garlic-butter-naan-4.jpg" alt="Butter Naan" />
      <h2>Butter Naan</h2>
      <p>Price: ₹150</p>
      <p>Flour, water, yeast, salt, sugar, and yogurt or curd are needed to make the dough.When baked, it is brushed with a mixture of melted ghee and chopped garlic, which will occasionally also include chopped cilantro. </p>
      <button class="cart-btn" onclick="updateQuantity('Butter Naan', 150, -1)">-</button>
      <span id="Butter Naan-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Butter Naan', 150, 1)">+</button>
    </div>
    
    <!-- Dish 6: chicken lollipop -->
    <div class="dish-card">
      <img src="https://cdn.prod.website-files.com/654369dcffba1c0eb478187e/676467ea7415e6e5715affd9_IMG_2965.jpeg" alt = "Chicken lollipop" />
      <h2>Chicken Lollipop</h2>
      <p>Price: ₹400</p>
      <p>appetizer where a frenched chicken drumette is marinated and then batter fried or baked until crisp.</p>
      <button class="cart-btn" onclick="updateQuantity('Chicken Lollipop', 400, -1)">-</button>
      <span id="Chicken Lollipop-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Chicken Lollipop', 400, 1)">+</button>
    </div>
    
    <!-- Dish 7: Chole Bhature -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/a111291d959e40789af1280bba00f5c8.jpg?mw=1300.jpg" alt="Chole Bhature" />
      <h2>Chole Bhature</h2>
      <p>Price: ₹190</p>
      <p>combination of two dishes: chole - a spicy chickpea curry, and bhature - a type of fried bread made with maida flour. accompanied by onions, pickles, mint chutney</p>
      <button class="cart-btn" onclick="updateQuantity('Chole Bhature', 190, -1)">-</button>
      <span id="Chole Bhature-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Chole Bhature', 190, 1)">+</button>
    </div>
    
    <!-- Dish 8: Pav Bhaaji -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/c2e90dab44754c769832c62dfa1d7814.jpg?mw=1300.jpg" alt="Pav Bhaaji" />
      <h2>Pav Bhaaji</h2>
      <p>Price: ₹150</p>             
      <p>basic pav bhaji, with added cheese, paneer, mushrooms, plantains, and even dried fruits thrown in the flavorful curry mix.</p>
      <button class="cart-btn" onclick="updateQuantity('Pav Bhaaji', 150, -1)">-</button>
      <span id="Pav Bhaaji-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Pav Bhaaji', 150, 1)">+</button>
    </div>
    
    <!-- Dish 9: Masala Dosa -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/02d1f86ec5cd4f0db503f0653dc0c7e2.jpg?mw=1300.jpg" alt="Masala Dosa" />
      <h2>Masala Dosa</h2>
      <p>Price: ₹130</p>
      <p>made from a batter of soaked rice and lentils that is baked into a thin pancake and usually stuffed with potatoes, onions, and mustard seeds. The dish is often garnished with grated coconut and chopped coriander.</p>
      <button class="cart-btn" onclick="updateQuantity('Masala Dosa', 130, -1)">-</button>
      <span id="Masala Dosa-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Masala Dosa', 130, 1)">+</button>
    </div>

    <!-- Dish 10: Biryani -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/8fd2297171484b88be3e3e6815979690.jpg?mw=1300.jpg" alt="Biryani" />
      <h2>Biryani</h2>
      <p>Price: ₹400</p>
      <p>The main ingredients of biryani are rice (ideally basmati), spices, a base of meat, eggs, or vegetables, and numerous optional ingredients such as dried fruits, nuts, and yogurt.</p>
      <button class="cart-btn" onclick="updateQuantity('Biryani', 400, -1)">-</button>
      <span id="Biryani-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Biryani', 400, 1)">+</button>
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