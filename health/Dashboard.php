<?php
include('dbconnect.php');

if(isset($_POST['delete'])){
    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);
    $sql = "DELETE FROM post WHERE post_id = $id_to_delete";

    if(mysqli_query($conn, $sql)){
        header('Location: dashboard.php');
     
    }else{
        echo 'query error' . mysqli_error($conn);
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <link rel="stylesheet" href="dashboardstyle.css">
</head>

<body>


    <div class="table-container">

        <h3>Post Management Dashboard <button><a href="upload.php" style="text-decoration:none; color:#fff;">Add a post</a></button></h3>

        <table class="content-table">

            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>image</th>
                    <th>Author</th>
                    <th>Description</th>
                    <th>created_at</th>
                    <th>Action</th>
                </tr>
            </thead>
    

    
            <?php
            

            $retrieve = "SELECT *FROM post";
            $result = mysqli_query($conn, $retrieve);

            while($row = mysqli_fetch_array($result)){
                ?>     
            <tr>
                <td><?php echo $row["post_id"];?></td>
                <td><?php echo $row["post_title"];?></td>
                <td><?php echo $row["post_image"];?></td>
                <td><?php echo $row["post_author"];?></td>
                <td><?php echo $row["post_description"];?></td>
                <td><?php echo $row["created_at"];?></td>
                <td>
                    <form action="" method="POST">
                    <input type="hidden" name="id_to_delete" value="<?php echo $row["post_id"]?>">
                    <input type="submit" value="Delete" name="delete" class="button-edit">
                    </form>
                </td>
              
                <!-- <td><button>Edit</button></td>
                <td><button>Delete</button></td> -->
            
            </tr>  
            <?php
              }      
              echo "</table>";
            
            
?>
    </div>


</body>

</html>