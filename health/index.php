<?php
include('dbconnect.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>The Doctor</title>

    <!-- custom css file link  -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="indexstyle.css">


    

</head>
<body>
    
<!-- header section starts  -->

<header>

    <a href="#" class="logo"><span>The</span> Doctor</a>

    <div id="menu" class="fas fa-bars"></div>

    <nav class="navbar">
        <ul>
            <li><a class="active" href="#home">home</a></li>
            <li><a href="#about">About us</a></li>
            <li><a href="post.php">Posts</a></li>
            <li><a href="#prevent">prevention</a></li>
            <li><a href="#doctor">Doctors</a></li>
            <li><a href="logintodashboard.php">Login</a></li>
        </ul>
    </nav>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="container_home" id="home">

   <div class="row">
       <div class="col">
        <h1 class="home_h1">Ntabe Ari Njye</h1>
        <p class="p_home">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facere eum adipisci expedita soluta, voluptatum aut odio sapiente, beatae ex quasi unde? Quibusdam eligendi quae laborum quos earum provident unde illum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Amet laborum dolorem repellat exercitationem quos suscipit voluptatibus eligendi. Aliquam unde quos nihil, quae minus iste praesentium aspernatur est quam amet alias? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nihil, quaerat dolore repudiandae eos voluptatum perspiciatis itaque autem, est earum facilis saepe aperiam excepturi ab totam possimus! Cum amet voluptatem minus! Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quae, amet! Cupiditate totam consequatur consequuntur reiciendis hic magni, assumenda velit nobis aliquam reprehenderit nemo harum illum obcaecati odit aut! A, maxime?</p>
        <button type="button" class="btn">Prevent</button>
         </div>
        <div class="col">
            <div class="card_home card1">
                <h3>Covid-19</h3>
                <p class="p_home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos harum architecto velit aspernatur nam nisi quia, nesciunt dolorem quaerat deleniti deserunt id qui placeat quibusdam cumque accusantium accusamus eaque ducimus lo.</p>
            </div>
            <div class="card_home card2">
                <h3>Influenza</h3>
                <p class="p_home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos harum architecto velit aspernatur nam nisi quia, nesciunt dolorem quaerat deleniti deserunt id qui placeat quibusdam cumque accusantium accusamus eaque ducimus.</p>
            </div>
            <div class="card_home card2">
                <h3>Influenza</h3>
                <p class="p_home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos harum architecto velit aspernatur nam nisi quia, nesciunt dolorem quaerat deleniti deserunt id qui placeat quibusdam cumque accusantium accusamus eaque ducimus.</p>
            </div>
            <div class="card_home card2">
                <h3>Influenza</h3>
                <p class="p_home">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos harum architecto velit aspernatur nam nisi quia, nesciunt dolorem quaerat deleniti deserunt id qui placeat quibusdam cumque accusantium accusamus eaque ducimus.</p>
            </div>
        </div>
      
   </div>
   
</section>

<!-- home section ends -->

<section class="prevent" id="prevent">

    <h1 class="heading"> Preventions of Covid-19 </h1>

    <div class="box-container">

        <div class="box">
            <img src="images/pre-1.png" alt="">
            <h3>wash your place</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="images/pre-1.png" alt="">
            <h3>wash your place</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="images/pre-1.png" alt="">
            <h3>wash your place</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="images/pre-2.png" alt="">
            <h3>maintain distance</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="images/pre-3.png" alt="">
            <h3>don't touch face</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="images/pre-4.png" alt="">
            <h3>wash your hand</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="images/pre-5.png" alt="">
            <h3>use napkin</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

        <div class="box">
            <img src="images/pre-6.png" alt="">
            <h3>wear a mask</h3>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptatibus, repudiandae aspernatur eum minus accusamus eligendi delectus ad? Similique, facilis esse?</p>
        </div>

    </div>

</section>
<!-- ============= post section starts============= -->
<section class="post-section" id= "post">
    <h1 class="heading">Latest post</h1>
    <div class="container-post"> 

        <div class="grid"> 
    
            <div class="card">
                <div class="card_img">
                    <img src="" alt="">
                </div>
                <div class="card_body">
                    <h2 class="card_title">Covid Strike</h2>
                    
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Blanditiis eum odio incidunt aut! Fugiat, ipsam porro quae deleniti reprehenderit nesciunt quos numquam modi asperiores ad sapiente amet neque? Veniam, magni!</p>

                    <p class="card_author">by <a href="#" class="author_link">Rwabujegeri</a></p>
                    
                    <a  class="read_more">Read article</a>

                
            </div>
            </div>
        
                    
        </div>
    
    </div>
</section>
<!-- ============= post section ends============= -->


<!-- About section starts  -->

<section class="section" id="about">
    <h1 class="heading">About Us</h1>
        <div class="about-container">
                <div class="content-section">
                    <div class="about-content">
                        <h3>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Repellat, consequuntur?</h3>
                        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quis neque esse qui odit consectetur nulla nihil quam excepturi suscipit distinctio, sed totam quas sequi architecto, natus iure quos. Tempore, itaque? Lorem ipsum dolor sit amet consectetur adipisicing elit. Nobis illum quas cupiditate inventore rem dolore vero exercitationem architecto aspernatur molestias, corrupti illo ad ratione mollitia delectus, quibusdam iste corporis deleniti. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente unde repellendus amet tempora quisquam dolor cupiditate laudantium aperiam. Similique libero deserunt vel! Minima, amet nobis. Quae alias rerum voluptas? Officiis.</p>
                        <div class="btn"><a href="">Contact Us</a></div>
                    </div>
                </div>
                <div class="image-section">
                    <img src="./images/pexels-photo-5863393.jpeg" alt="">
                </div>
        </div>
  
    

</section>

<!-- symtoms section ends -->


<!-- Doctors section starts  -->
<section class="doctor section-doctor" id="doctor">
    <div class="container_card">
        <h1 class="heading">Meet our doctors</h1>
        <div class="card-wrapper">
            <div class="card">
                <img src="./images/pre-6.png" alt="profile image" class="profile-img">
                <h1>Avacode Joe</h1>
                <p class="job-title">Head of Department</p>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit ab voluptatem quidem unde minus nisi, mollitia sapiente voluptates sequi reprehenderit eligendi assumenda ad modi rem totam soluta inventore ipsum.

                </p>
                    <a href="#" class="btn-card">contact</a>
               
            </div>

            <div class="card">
                <img src="./images/pre-6.png" alt="profile image" class="profile-img">
                <h1>Avacode Joe</h1>
                <p class="job-title">Mobile app developer</p>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit ab voluptatem quidem unde minus nisi, mollitia sapiente voluptates sequi reprehenderit eligendi assumenda ad modi rem totam soluta inventore ipsum.

                </p>
                    <a href="#" class="btn-card">contact</a>
                
            </div>

            <div class="card">
                <img src="./images/pre-6.png" alt="profile image" class="profile-img">
                <h1>Avacode Joe</h1>
                <p class="job-title">React js developer</p>
                <p class="about">Lorem ipsum dolor sit amet consectetur adipisicing elit. Delectus suscipit ab voluptatem quidem unde minus nisi, mollitia sapiente voluptates sequi reprehenderit eligendi assumenda ad modi rem totam soluta inventore ipsum.

                </p>
                    <a href="#" class="btn-card">contact</a>
                
            </div>
        </div>
    </div>
</section>
<!-- spread section ends -->

<!-- ======================== Contact section start================= -->






<!-- =========================Contact section End===================== -->

<!-- footer section starts  -->

<section class="footer">

 

    <h1 class="credit"> @all rights reserved 2021 </h1>

</section>
<!-- footer section ends -->
<!-- custom js file link  -->
<script src="js/script.js"></script>


</body>
</html>