<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="reg.css">
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
    <div class="travel">
        <section id="travel" class="header-image">
        </section>
        </div>
        <br><br>

    <div class="center">
        
        <h1>Sign In</h1>
        <div class="line"></div>
        <form method="post">
          <div class="txt_field">
            <input type="text" name="username" required />
            <span></span>
            <label>Username</label>
          </div>
          <div class="txt_field">
            <input type="password" name="keypassword" required />
            <span></span>
            <label>Password</label>
          </div>
          <div class="pass">Forgot Password?</div>
          <input type="submit" value="Sign In" />
          <div class="signup_link">New Member?<br> <a href="signup.html">Sign Up Here</a></div>
        </form>
      </div>
      <br>
      <footer>
        <p> 2024 Travel Guide. All rights reserved.</p>
    </footer>

    <?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == "create") {
    $username = $_POST['username'];
    $keypassword = $_POST['keypassword'];
    

    $stmt = $conn->prepare("INSERT INTO signin(username, keypassword)
    VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $keypassword);
    $stmt->execute();
    echo "Sign in successful!";
    $stmt->close();

    $conn->close();
}
?>
</body>
</html>