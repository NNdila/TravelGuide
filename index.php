<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <nav class="navbar">
        <h1 style="font-size: 30px;" class="logo">TRAVEL GUIDE</h1>
        <ul class="nav-links">
            <li class="active"><a href="index.php">Home</a></li>
            <li><a href="about.php">About</a></li>
            <li><a href="countries.php">Countries</a></li>
            <li><a href="islands.php">Islands</a></li>
            <li><a href="cities.php">Cities</a></li>
            <li><a href="shop.php">Shop</a></li>
            <li><a href="contact.php">Contact</a></li>
            <li class="ctn"><a href="signup.php">SignUp</a></li>
            <li class="ctn"><a href="signin.php">SignIn</a></li>
            
        </ul>
        <img src="images/icons8-menu-50.png" alt="" class="menu-btn">
    </nav>

    <header>
        <div class="header-content">
            <h2>Explore The World!</h2>
            <div class="line"></div>
            <h1>Globe Trotting<br> with the Girl Squad</h1>
            <a href="#" class="ctn">Let's Go!</a>
        </div>
    </header>

    <section class="events">
    
        <div class="title">
            <h1>It's Time To Travel!</h1>
            <div class="line"></div>
        </div>

        <p>Welcome to Globe Trotting with the Girl Squad, your ultimate travel guide to exploring the world's most breathtaking destinations.<br> Whether you're dreaming of the vibrant cities pulsating with energy, serene islands with crystal-clear waters, or enchanting countries rich in history and culture, we've got you covered.<br> Discover curated lists of the best places to visit, packed with insider tips, must-see landmarks, and hidden gems!<br> Let us inspire your next adventure and help you create unforgettable memories, one destination at a time.<br> Dive in and start your journey with your fellow globe trotters today!





        </p>
        <br>
        <br>
        <br>

        <div class="title">
            <h2>Sneak Peek</h2>
            <div class="line"></div>
        </div>

        <div class="row">
            <div class="col">
                <img src="images/countries.jpg" alt="Countries">
                <h4>Countries</h4>
                <p>Traveling to different countries opens doors to diverse cultures, breathtaking landscapes, and unforgettable experiences, enriching your perspective and creating memories that last a lifetime.</p>
                <br>
                <a href="countries.html" class="ctn">Learn More</a>
            </div>
            <br>
            <div class="col">
                <img src="images/cities.jpg" alt="Cities">
                <h4>Cities</h4>
                <p>Explore the world's diverse cities to immerse yourself in new cultures, savor unique culinary delights, and uncover captivating histories that promise to broaden your horizons and create unforgettable memories.





                </p>
                <br>
                <a href="cities.html" class="ctn">Learn More</a>
            </div>
            <br>
            <div class="col">
                <img src="images/islands.jpg" alt="Islands">
                <h4>Islands</h4>
                <p>Explore the world's diverse islands for an unforgettable journey filled with stunning landscapes, vibrant cultures, and warm hospitality that promises to enrich your travel experiences like never before.</p>
                <br>
                <a href="islands.html" class="ctn">Learn More</a>
            </div>
        </div>
    </section>

    
    <script>
        const menuBtn = document.querySelector('.menu-btn')
        const navlinks = document.querySelector('.nav-links')

        menuBtn.addEventListener('click',()=>{
            navlinks.classList.toggle('mobile-menu')

        })
    </script>
    <div class="container">
        <h1>Location Map</h1>
        <div class="line"></div>
        <iframe src="https://www.google.com.qa/maps/d/embed?mid=1_fqH5JL-GA2GkOzS9RWmGxOtMdfh10c&ehbc=2E312F" width="640" height="480"></iframe>
       
    </div>
    <footer>
        <p> 2024 Travel Guide. All rights reserved.</p>
    </footer>
</body>
</html>