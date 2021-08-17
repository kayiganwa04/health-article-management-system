<?php
include('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="post.css">
    <title>Document</title>
</head>
<body>
    <!-- header section starts  -->

<header>

<a href="#" class="logo"><span>The</span> Doctor</a>

<div id="menu" class="fas fa-bars"></div>

<nav class="navbar">
    <ul>
        <li><a  href="index.php">Home</a></li>
        <li><a href="index.php#about">About us</a></li>
        <li><a class="active" href="post.php">Posts</a></li>
        <li><a href="index.php#prevent">Prevention</a></li>
        <li><a href="index.php#doctor">Doctors</a></li>
        <li><a href="logintodashboard.php">Login</a></li>
    </ul>
</nav>

</header>

<!-- header section ends -->
<section>
    <div class="container"> 
        <h1 style="text-align:center;">Blog Post</h1>   

        <div class="grid"> 
            <?php 
               $query = 'SELECT * FROM post';
               
               $result = mysqli_query($conn, $query);
               if(mysqli_num_rows($result)>0)
               {
                   while($row=mysqli_fetch_assoc($result))
                   {
                      echo '<div class="card">
                                 <div class="card_img">
                                     <img src="" alt="">
                                 </div>
                                 <div class="card_body">
                                 <img src='.$row['post_image'].'?>
                                     <h2 class="card_title">'.$row['post_title'].'</h2>
                                     
                                    <p>'.$row['post_description'].'</p>
                                    
                                    <p>'.$row['post_id'].'</p>

                                     <p class="card_author">by <a href="#" class="author_link">'.$row['post_author'].'</a></p>
                                     
                                     <a  class="read_more" href="details.php?id='.$row['post_id'].'">Read article</a>

                                    
                             </div>
                             </div>';
                   }
               }
            ?>
                    
        </div>
    
    </div>
</section>
</body>
</html>