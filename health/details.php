<?php

include('dbconnect.php');


     
    $id = $_GET['id'];


     $sql ="SELECT * FROM post WHERE post_id=\"$id\"";

     $result = mysqli_query($conn, $sql);
    
     $post = mysqli_fetch_assoc($result);

     mysqli_free_result($result);
     mysqli_close($conn);



?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> Details</h2>
</body>
</html>