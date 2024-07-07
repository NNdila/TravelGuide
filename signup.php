<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="reg.css">
</head>
<body>

    <div class="travel">
        <section id="travel" class="header-image">
        </section>
        </div>
    <div class="center">
        <h1>Sign Up</h1>
        <div class="line"></div>   
        <form method="post">
            <div class="txt_field">
                <input type="text"  name="people" required />

                <span></span>
                <label>Full Name</label>
              </div>
          <div class="txt_field">
            <input type="text" name="username" required />
            <span></span>
            <label>Username</label>
          </div>
          <div class="txt_field">
            <input type="password" name="password" required />
            <span></span>
            <label>Password</label>
          </div>
          <input type="submit" value="Sign Up" />
          <br>
        </form>
      </div>
      <br>
      <footer>
        <p> 2024 Travel Guide. All rights reserved.</p>
    </footer>

    <?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && $_POST['action'] == "create") {
    $people = $_POST['people'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $stmt = $conn->prepare("INSERT INTO signup (people, username, keypassword)
    VALUES (?, ?, ?)");
    $stmt->bind_param("isss", $people, $username, $password);
    $stmt->execute();
    echo "Registration successful!";
    $stmt->close();

    $conn->close();
}
?>

</body>
</html>