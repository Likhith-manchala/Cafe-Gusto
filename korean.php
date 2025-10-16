<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Korean Cuisine - Cafe Gusto</title>
  <link rel="stylesheet" href="dishes.css" />
</head>
<body>
  <h1>Korean</h1>
  <div class="dish-container">

    <!-- Dish 1: Kongguksu -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/e650c56bf39d405db3f4804528477a4e.jpg?mw=1300 .jpg" alt="Kongguksu " />
      <h2>Kongguksu </h2>
      <p>Price: ₹230</p>
      <p>Kongguksu is a Korean summer classic that combines noodles and a cold, soy milk broth. Traditionally, the broth is made from scratch by cooking and puréeing soybeans, occasionally with the addition of sesame seeds or different nuts.</p>
      <button class="cart-btn" onclick="updateQuantity('Kongguksu ', 230, -1)">-</button>
      <span id="Kongguksu -quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Kongguksu ', 230, 1)">+</button>
    </div>

    <!-- Dish 2: Kimbap -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/9a9abcc19564495aa0e04645e065e740.jpg?mw=1300.jpg" alt="Kimbap" />
      <h2>Kimbap</h2>
      <p>Price: ₹300</p>
      <p> Consisting of seaweed (gim), seasoned rice (bap), and other, optional ingredients that are usually rolled, sliced, and served. Almost anything can be added to the roll, but the most common ingredients are fishcakes, meat, spinach, eggs, and cucumbers.</p>
      <button class="cart-btn" onclick="updateQuantity('Kimbap', 300, -1)">-</button>
      <span id="Kimbap-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Kimbap', 300, 1)">+</button>
    </div>
    
    <!-- Dish 3: Bibimbap -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/4dd65e828a014639994d77ab09f5dba5.jpg?mw=1300.jpg" alt="Bibimbap" />
      <h2>Bibimbap</h2>
      <p>Price: ₹250</p>
      <p>The rice is combined with a variety of ingredients such as sliced beef, namul (sliced vegetables), soy sauce, gochujang (thick, deep red chili pepper paste), and a raw egg on top, cooking as it is dispersed through the steaming rice.</p>
      <button class="cart-btn" onclick="updateQuantity('Bibimbap', 250, -1)">-</button>
      <span id="Bibimbap-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Bibimbap', 250, 1)">+</button>
    </div>
    
    <!-- Dish 4: Korean Fried Chicken -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/images/dishes/ae4a5cc2223a4bb7bd7c81e743eca09e.jpg?mw=1300.jpg" alt="Korean Fried Chicken" />
      <h2>Korean Fried Chicken</h2>
      <p>Price: ₹500</p>
      <p>thin, crackly crust, juicy meat, and flavorful sauces, achieved through a double-frying technique and a light batter. </p>
      <button class="cart-btn" onclick="updateQuantity('Korean Fried Chicken', 500, -1)">-</button>
      <span id="Korean Fried Chicken-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Korean Fried Chicken', 500, 1)">+</button>
    </div>
    
    <!-- Dish 5:Tteokbokki  -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/4c07625c0fbb4d06b5463aa41e0cf202.jpg?mw=1300 .jpg" alt="Tteokbokki " />
      <h2>Tteokbokki </h2>
      <p>Price: ₹260</p>
      <p>a braised dish of sliced rice cakes, meat, eggs, and seasonings.</p>
      <button class="cart-btn" onclick="updateQuantity('Tteokbokki ', 260, -1)">-</button>
      <span id="Tteokbokki -quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Tteokbokki ', 260, 1)">+</button>
    </div>
    
    <!-- Dish 6: Korean Corn Dogs  -->
    <div class="dish-card">
      <img src="https://zhangcatherine.com/wp-content/uploads/2023/05/12001200-7.jpg" alt = "Korean Corn Dogs" />
      <h2>Korean Corn Dogs</h2>
      <p>Price: ₹170</p>
      <p>hot dog-style sausages skewered on a wooden stick and deep-fried to crispiness within a sweet and savory batter</p>
      <button class="cart-btn" onclick="updateQuantity('Korean Corn Dogs', 170, -1)">-</button>
      <span id="Korean Corn Dogs-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Korean Corn Dogs', 170, 1)">+</button>
    </div>
    
    <!-- Dish 7: Mandu Dumplings (Jjin Mandu)  -->
    <div class="dish-card">
      <img src="https://www.simplyrecipes.com/thmb/XnpuScn4QijmRCMYxQq_C2F_hDQ=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/Simply-Recipes-Mandu-FINAL-10-e93347fe704b42068d3d64411be6c02f.jpg" alt="Mandu Dumplings (Jjin Mandu) " />
      <h2>Mandu Dumplings (Jjin Mandu) </h2>
      <p>Price: ₹200</p>
      <p>filled with various combinations of meat and vegetables. The varieties may include tofu or shrimps, as well as meat-free versions. The most common choices are pork, beef, cabbage, kimchi, bean sprouts, onions, scallions, and mushrooms, but the ingredients can vary depending on the season.</p>
      <button class="cart-btn" onclick="updateQuantity('Mandu Dumplings (Jjin Mandu) ', 200, -1)">-</button>
      <span id="Mandu Dumplings (Jjin Mandu) -quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Mandu Dumplings (Jjin Mandu) ', 200, 1)">+</button>
    </div>
    
    <!-- Dish 8: Japchae -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/de88e75d820a4e0792bfd4e28956b78c.jpg?mw=1300 .jpg" alt="Japchae " />
      <h2>Japchae </h2>
      <p>Price: ₹170</p>             
      <p> a savory and slightly sweet stir-fry of glass noodles (dangmyeon) and vegetables, often including meat or mushrooms, seasoned with soy sauce and sesame oil. </p>
      <button class="cart-btn" onclick="updateQuantity('Japchae ', 170, -1)">-</button>
      <span id="Japchae -quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Japchae ', 170, 1)">+</button>
    </div>
    
    <!-- Dish 9: Bungeoppang -->
    <div class="dish-card">
      <img src=" https://www.tasteatlas.com/images/dishes/aee4e27104b64fe082e4569d0033dfcd.jpg?mw=1300.jpg" alt=" Bungeoppang" />
      <h2> Bungeoppang</h2>
      <p>Price: ₹350</p>
      <p>An unusual fish-shaped South Korean pastry filled with red beans. The outer shell is made with a simple batter consisting of eggs, flour, raising agents, sugar, and water. It is poured in fish-shaped molds</p>
      <button class="cart-btn" onclick="updateQuantity(' Bungeoppang', 350, -1)">-</button>
      <span id=" Bungeoppang-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity(' Bungeoppang', 350, 1)">+</button>
    </div>

    <!-- Dish 10: Patbingsu -->
    <div class="dish-card">
      <img src="https://www.tasteatlas.com/Images/Dishes/41a4d9f75d104a1e96bbac828b91b9da.jpg?mw=1300.jpg" alt="Patbingsu" />
      <h2>Patbingsu</h2>
      <p>Price: ₹350</p>
      <p>Patbingsu is a popular South Korean dessert, its name meaning red bean ice flakes. It consists of shaved ice, condensed milk, and sweet azuki bean paste. It is often topped with pieces of Korean rice fresh fruit, or cereals.</p>
      <button class="cart-btn" onclick="updateQuantity('Patbingsu', 350, -1)">-</button>
      <span id="Patbingsu-quantity">Quantity: 0</span>
      <button class="cart-btn" onclick="updateQuantity('Patbingsu', 350, 1)">+</button>
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