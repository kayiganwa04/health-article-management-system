<?php
include ('dbconnect.php');

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="adminstyle.css">
</head>

<body>


    <h1>Post Management</h1>
    <div class="addbook">
        <button><a href="AddBook.php">Add Post</a></button>
    </div>
    <div class="table-container">

        <h3>Post review table</h3>

        <table class="content-table">

            <thead>
                <tr>
                    <th>post_id</th>
                    <th>post_title</th>
                    <th>post_author</th>
                    <th>post_description</th>
                    <th colspan="3">Edit</th>
                </tr>
            </thead>
            <?php
              $sql="SELECT* FROM post;";
              $result=mysqli_query($conn,$sql);
              if(mysqli_num_rows($result)>0)
              {
                 while($row=mysqli_fetch_assoc($result))
                 {
                     echo '<tr><td>'.$row['post_id'].'</td>';
                     echo '<td>'.$row['post_title'].'</td>';
                     echo '<td>'.$row['post_author'].'</td>';
                     echo '<td>'.$row['post_description'].'</td>';
                     echo '<td><button>Update</button></td>';
                     echo '</tr>';
                 }
              }

            ?>
        

           


           
        </table>

    </div>
</body>

</html>