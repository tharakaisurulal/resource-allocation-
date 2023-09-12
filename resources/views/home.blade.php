<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/home.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <!--<a href="home.php" class="logo">HotelCAPEGalle.</a>-->
      <!--<div class ="logo">
                <img src="{{URL('image/u-ruhuna.png')}}"alt="">
            </div>-->

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
      <a href='sign_in.php'>Admin</a>
      <a href='sign_up.php'>Sign Up</a>
      
      <!-- <?php
if (isset($_SESSION['User_Fname'])){
  echo "
      
      <li class='nav-item'>
      <a id='sign_out' class='nav-link' href='sign_out.php'>Sign out</a>
      </li>
";
}else{
  echo'
      <li class="nav-item">
      <a class="nav-link" href="sign_in.php">Sign In</a>
      </li>
      <li class="nav-item">
      <a class="nav-link" href="sign_up.php">Sign Up</a>
      </li>
   
  ';
}

?> -->
   </nav>


   <div id="menu-btn" class="fas fa-bars"></div>
   
</section>

<!-- header section ends -->



<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> Today Allocation </h1>
   <h2>DEPARTMENT OF COMPUTER SCIENCE UNIVERSITY OF RUHUNA</h2>

   <div class="box-container">

      <div class="box">
         <img src="{{URL('image/u1-ruhuna.png')}}"alt="">
         <h3>Lecture Hall</h3>
      </div>

      <div class="box">
      <img src="{{URL('image/u2-ruhuna.png')}}"alt="">
         <h3>Practical Labs</h3>
      </div>

      <div class="box">
      <img src="{{URL('image/u3-ruhuna.png')}}"alt="">
         <h3>Time Table</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>Maintain</h3>
      </div>

      

   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/about-img.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>Our Experiences Are Carefully Curated To Offer An Authentic, Intimate And Exploratory Journey Into The Heart, Soul, History, And Gastronomy Of This Magical Island.</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

   <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right">Home </i></a>
         <a href="about.php"> <i class="fas fa-angle-right"> About</i></a>
         <a href="package.php"> <i class="fas fa-angle-right"> Package</i></a>
         <a href="book.php"> <i class="fas fa-angle-right">Book</i></a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone">+123-456-7890</i></a>
         <a href="#"> <i class="fas fa-phone"> +94-779917404 </i></a>
         <a href="#"> <i class="fas fa-envelope">capehotel@gmail.com</i></a>
         <a href="#"> <i class="fas fa-map"> 123,Galle,Sri Lanka. </i></a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f">facebook</i></a>
         <a href="#"> <i class="fab fa-whatsapp"> WhatsApp </i></a>
         <a href="#"> <i class="fab fa-twitter">twitter </i></a>
         <a href="#"> <i class="fab fa-instagram">instagram</i></a>
      </div>

   </div>

   <div class="credit"> created by <span> Department Of Computer Science University of Ruhuna</span> | all rights reserved! </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>