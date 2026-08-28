<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Cafe Gusto | A table for every craving</title>
    <link rel="stylesheet" href="interface.css" />
</head>
<body>

    <main class="landing-container">
        <img src="https://dynamic.design.com/preview/logodraft/caff9788-aa6a-4669-b0bc-1670797bc763/image/large.png" 
             alt="Cafe Gusto logo" class="logo" />
        <div class="intro-copy">
            <p class="eyebrow">CAFE GUSTO <span>•</span> OPEN DAILY</p>
            <h1 class="cafe-name">A table for every craving.</h1>
            <p class="intro-text">From fragrant Indian curries to bright Mexican plates, Cafe Gusto brings the world's comfort food together under one roof.</p>
            <div class="intro-details"><span>Six cuisines</span><span>Made to order</span><span>Warmly served</span></div>
            <button class="start-btn" type="button" onclick="startOrder()">Explore the menu <span aria-hidden="true">→</span></button>
        </div>
    </main>
    
    <!-- Cuisine Selection Page -->
    <section id="cuisine-selection" class="hidden">
        <p class="eyebrow">YOUR TABLE AWAITS</p>
        <h1 id="cuisine-title">Choose your cuisine</h1>
    </section>
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
        document.getElementById('cuisine-selection').classList.remove('hidden'); // Show title
        document.getElementById('cuisine-options').classList.remove('hidden'); // Show menu
    }

    function navigateTo(page) {
        window.location.href = page;
    }
    </script>
</body>
</html>