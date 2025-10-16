<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe GUSTO</title>
    <link rel="stylesheet" href="interface.css" />
</head>
<body>

    <!-- Landing Page -->
    <div class="landing-container">
        <img src="https://dynamic.design.com/preview/logodraft/caff9788-aa6a-4669-b0bc-1670797bc763/image/large.png" 
             alt="Cafe Logo" class="logo" onclick="startOrder()" />
        <h1 class="cafe-name"></h1>
    </div>
    
    <!-- Cuisine Selection Page -->
    <h1 id="cuisine-title" class="hidden">Choose Your Cuisine</h1>
    <div class="cuisine-container hidden" id="cuisine-options">
        <button class="cuisine-btn" onclick="navigateTo('indian.php')">Indian</button>
        <button class="cuisine-btn" onclick="navigateTo('italian.php')">Italian</button>
        <button class="cuisine-btn" onclick="navigateTo('chinese.php')">Chinese</button>
        <button class="cuisine-btn" onclick="navigateTo('korean.php')">Korean</button>
        <button class="cuisine-btn" onclick="navigateTo('mexican.php')">Mexican</button>
        <button class="cuisine-btn" onclick="navigateTo('french.php')">French</button>
    </div>
    
    <script>
    function startOrder() {
        document.querySelector('.landing-container').classList.add('hidden'); // Hide landing page
        document.getElementById('cuisine-title').classList.remove('hidden'); // Show title
        document.getElementById('cuisine-options').classList.remove('hidden'); // Show menu
    }

    function navigateTo(page) {
        window.location.href = page;
    }
    </script>
</body>
</html>