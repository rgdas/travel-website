<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Home</title>

   <!-- swiper css link  -->
   <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Travel Website</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="package.php">package</a>
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

          <div class="swiper-slide slide" style="background:url(images/home-slide-1.jpeg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>travel arround the world</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>discover the new places</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/home-slide-3.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="package.php" class="btn">discover more</a>
            </div>
         </div>
         
      </div>

      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>

   </div>

</section>

<!-- home section ends -->

<!-- services section starts  -->

<section class="services">

   <h1 class="heading-title"> our services </h1>

   <div class="box-container">

      <div class="box">
     <img src="images/icon-1.png">
         <h3>adventure</h3>
      </div>

      <div class="box">
         <img src="images/icon-2.png" alt="">
         <h3>tour guide</h3>
      </div>

      <div class="box">
         <img src="images/icon-3.png" alt="">
         <h3>trekking</h3>
      </div>

      <div class="box">
         <img src="images/icon-4.png" alt="">
         <h3>camp fire</h3>
      </div>

      <div class="box">
         <img src="images/icon-5.png" alt="">
         <h3>off road</h3>
      </div>

      <div class="box">
         <img src="images/icon-6.png" alt="">
         <h3>camping</h3>
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
      <h3>About Me</h3>
      <p>A highly motivated and result-oriented student with a Web development background, who is always willing to learn new skills</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our packages </h1>

   <div class="box-container">

      <div class="box">
         <div class="image">
            <img src="images/india.png" alt="">
         </div>
         <div class="content">
            <h3>India Tour</h3>
            <p>India has the second-largest population in the world. India is also knowns as Bharat, Hindustan and sometimes Aryavart. It is surrounded by oceans from three sides which are Bay Of Bengal in the east, the Arabian Sea in the west and Indian oceans in the south.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

      <div class="box">
         <div class="image">
            <img src="images/Italy.jpeg" alt="">
         </div>
         <div class="content">
            <h3>Italy Tour </h3>
            <p>Italy is a boot-shaped peninsula that juts out of southern Europe into the Adriatic Sea, Tyrrhenian Sea, Mediterranean Sea, and other waters. Its location has played an important role in its history. The sea surrounds Italy, and mountains crisscross the interior, dividing it into regions.</p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image">
            <img src="images/London.webp" alt="">
         </div>
         <div class="content">
            <h3>London Tour</h3>
            <p>London is the capital city of the United Kingdom. It is the U.K.'s largest metropolis, transportation, and cultural centre.London is bustling, vibrant, multicultural and cosmopolitan. London is both old and new, a place where traditional pubs rub shoulders bars are there. </p>
            <a href="book.php" class="btn">book now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="package.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>upto 50% off</h3>
      <p>There is no other gift more unique and inspiring than the chance to discover a fascinating part of the world</p>
      <a href="book.php" class="btn">book now</a>
   </div>
</section>

<!-- home offer section ends -->

<!-- footer section starts  -->

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> <i class="fas fa-angle-right"></i> home</a>
         <a href="about.php"> <i class="fas fa-angle-right"></i> about</a>
         <a href="package.php"> <i class="fas fa-angle-right"></i> package</a>
         <a href="book.php"> <i class="fas fa-angle-right"></i> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="about.php"> <i class="fas fa-angle-right"></i> About Us</a>
         <a href="privacy_policy.php"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="terms_use.php"> <i class="fas fa-angle-right"></i> Terms and Conditions</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> <i class="fas fa-phone"></i> +91-9178286788 </a>
         <a href="#"> <i class="fas fa-phone"></i> +91-7978330185 </a>
         <a href="#"> <i class="fas fa-envelope"></i> radhagobindadasguddu@gmail.com </a>
         <a href="#"> <i class="fas fa-map"></i> Odisha , India - 756002 </a>
      </div>

      <div class="box">
         <h3>Follow Me</h3>
         <a href="https://www.facebook.com/prince.guddu.927/"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="https://twitter.com/RadhaGuddu"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="https://www.instagram.com/itz_guddu_16/"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="https://www.linkedin.com/in/radha-gobinda-das-6a01551b8/"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>Mr.Radha Gobinda Das</span> | all rights reserved! | Copyright @2022 </div>

</section>

<!-- footer section ends -->
<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>