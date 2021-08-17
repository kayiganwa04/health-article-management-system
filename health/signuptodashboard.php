<?php

include('dbconnect.php');
if(isset($_POST['submit'])){
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5(mysqli_real_escape_string($conn, $_POST['password']));

    $sql = "INSERT INTO post_user(id,username,user_email,user_password) VALUES ('',\"$username\",\"$email\",\"$password\")";

    $query = mysqli_query($conn, $sql);
    
    if($query){
        header('Location:Dashboard.php');
    }else{
        echo 'something went wrong' . mysqli_error($conn);
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
    <title>Sign Up</title>
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
                <h1>Sign up </h1>
                <h6>To Become a user</h6>
            </div>
            <div class="lower box-log">
                <form action="" method="POST">
                    <div class="input">
                        <input type="text" name="username" id="username" placeholder="Enter Username" required>
                        
                    </div>
                    <div class="input">
                        <input type="text" name="email" id="email" placeholder="Enter email" required>
                        
                    </div>
                    <div class="input">
                        <input type="password" name="password" id="password" placeholder="Password" required>
                        
                    </div>
                    <input type="submit" value="Sign up" name="submit" class="login-btn">
                </form>
            </div>
        </div>
    </div>
    
</body>
</html>