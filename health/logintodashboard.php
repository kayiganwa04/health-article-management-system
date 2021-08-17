<?php
include('dbconnect.php');

// LOGIN USER
if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $errors = array();
    if (count($errors) == 0) {
      $password = md5($password);
      $query = "SELECT * FROM post_user WHERE username='$username' AND user_password='$password';";
      $results = mysqli_query($conn, $query);
      if (mysqli_num_rows($results) == 1) {
        header('Location: Dashboard.php');
      } else {
        echo "Wrong username / Password";
      }
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="logtodashboard.css">
    <title>login</title>
</head>
<body>
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><span>The</span> Doctor</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php#about">Contact us</a></li>
            <li><a href="post.php">Posts</a></li>
            <li><a href="index.php#prevent">Prevention</a></li>
            <li><a href="index.php#doctor">Doctors</a></li>
            <li><a class="active"  href="login.php">Login</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->


    <div class="main-container_log">
        <div class="container-log">
            <div class="upper box-log">
                <h1>Login</h1>
                <h6>To access your dashboard</h6>
            </div>
            <div class="lower box-log">
                <form action="" method="POST">
                    <div class="input">
                        <input type="text" name="username" id="username" placeholder="Username" required>
                        
                    </div>
                    <div class="input">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        
                    </div>
                    <input type="submit" value="Login" name="login" class="login-btn">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>