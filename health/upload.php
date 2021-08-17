<?php
include('dbconnect.php');


if(isset($_POST['submit'])){
    $title = $_POST['title'];
    // $image = $_POST['image'];
    $author = $_POST['author'];
    $description = $_POST['description'];
    $filename = $_FILES["uploadfile"]["name"];
    $tempname = $_FILES["uploadfile"]["tmp_name"];  
    $folder = "post_image/".$filename;  
        
        if (move_uploaded_file($tempname, $folder))  {
            $msg = "Image uploaded successfully";
            $image = "post_image/".$filename;
        }else{
            $msg = "Failed to upload image";
            exit;
      }

    $sql = "INSERT INTO post(post_id,post_title,post_image,post_author,post_description) VALUES ('',\"$title\",\"$image\",\"$author\",\"$description\")";

    $result = mysqli_query($conn,$sql);
    if($result){
        header('Location:post.php');
    }else{
        echo 'something went wrong' .mysqli_error($conn);

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Register</title>
</head>
<body>
    <div class="container">
        <form class="login-email" method="POST" enctype="multipart/form-data">
            <p class="login-text" style="font-size: 2rem; font-weight: 800;">Post Article</p>
           
            <div class="input-group">
                <input type="text" placeholder="title" name="title" value="" required>
            </div>
            <div class="input-group">
                <input type="text" placeholder="author" name="author" value="" required>
            </div>
            <div class="input-group">
                <input type="file"  name="uploadfile" required>
            </div>
            <div class="input-group">
    
                <textarea name="description" id="" cols="30" rows="10" placeholder="Description" style="margin-top: 10px; border: 1px solid rgb(228, 228, 228); outline: none; padding: 20px; width: 100%; border-radius: 10px; "></textarea>
            </div>
            <div class="input-group">
            
                <button name="submit" class="btn">Post</button>
            </div>
        </form>
    </div>
</body>
</html>