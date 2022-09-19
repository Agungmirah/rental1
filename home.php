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
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   
<!-- header section starts  -->

<section class="header">

   <a href="home.php" class="logo">Bali Rental.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
      <a href="about.php">about</a>
      <a href="product.php">product</a>
      <a href="rent.php">rent</a>
      <a href="login.php">login</a>

      </nav>
   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home">

   <div class="swiper home-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide" style="background:url(images/h1.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, rent, travel</span>
               <h3>traveling arround Bali</h3>
               <a href="product.php" class="btn">rent now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/h2.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, rent, travel</span>
               <h3>discover the new places</h3>
               <a href="product.php" class="btn">rent now</a>
            </div>
         </div>

         <div class="swiper-slide slide" style="background:url(images/h5.jpg) no-repeat">
            <div class="content">
               <span>explore, discover, rent, travel</span>
               <h3>make your tour worthwhile</h3>
               <a href="product.php" class="btn">rent more</a>
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
         <img src="images/roles-permission.png" alt="">
         <h3>good quality</h3>
      </div>

      <div class="box">
         <img src="images/fas.png" alt="">
         <h3>fast process</h3>
      </div>

      <div class="box">
         <img src="images/noribet.png" alt="">
         <h3>no hassle</h3>
      </div>

      <div class="box">
         <img src="images/ter.png" alt="">
         <h3>affordable prices</h3>
      </div>

      <div class="box">
         <img src="images/ramah.png" alt="">
         <h3>friendly service</h3>
      </div>
   </div>

</section>

<!-- services section ends -->

<!-- home about section starts  -->

<section class="home-about">

   <div class="image">
      <img src="images/h5.jpg" alt="">
   </div>

   <div class="content">
      <h3>about us</h3>
      <p>We, Bali Rental provide a wide selection of the best motorbikes, guaranteed quality, at affordable prices. plus many discounts, promos and attractive prizes await you. What are you waiting for?. let's choose your favorite motorbike and rent it now!</p>
      <a href="about.php" class="btn">read more</a>
   </div>

</section>

<!-- home about section ends -->

<!-- home packages section starts  -->

<section class="home-packages">

   <h1 class="heading-title"> our product </h1>

   <div class="box-container">

      <div class="box">
         <div class="image" onclick="window.location.href='detail/detail.php';">
            <img src="images/ninja.png" alt="">
         </div>
         <div class="content">
            <h3>Kawasaki ninja</h3>
            <p>price before diskon 700k/day <br>
            price after discount 630k/day
            </p>
            <a href="rent.php" class="btn">rent now</a>
         </div>
      </div>

      <div class="box">
         <div class="image" onclick="window.location.href='detail/klx.php';">
            <img src="images/klx150.png" alt="">
         </div>
         <div class="content">
            <h3>klx 150</h3>
            <p>price before diskon 300k/day <br>
            price after discount 255k/day</p>
            <a href="rent.php" class="btn">rent now</a>
         </div>
      </div>
      
      <div class="box">
         <div class="image" onclick="window.location.href='detail/mio.php';">
            <img src="images/mio.png" alt="">
         </div>
         <div class="content">
            <h3>Mio modif</h3>
            <p>price before diskon 200k/day <br>
            price after discount 180k/day</p>
            <a href="rent.php" class="btn">rent now</a>
         </div>
      </div>

   </div>

   <div class="load-more"> <a href="product.php" class="btn">load more</a> </div>

</section>

<!-- home packages section ends -->

<!-- home offer section starts  -->

<section class="home-offer">
   <div class="content">
      <h3>lots of promos
      </h3>
      <p>We, Bali Rental provide a wide selection of the best motorbikes, guaranteed quality, at affordable prices. plus many discounts, promos and attractive prizes await you. <br> What are you waiting for?</p>
      <a href="rent.php" class="btn">rent now</a>
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
         <a href="product.php"> <i class="fas fa-angle-right"></i> product</a>
         <a href="rent.php"> <i class="fas fa-angle-right"></i> rent</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#"> <i class="fas fa-angle-right"></i> ask questions</a>
         <a href="#"> <i class="fas fa-angle-right"></i> privacy policy</a>
         <a href="#"> <i class="fas fa-angle-right"></i> terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="tel:08873121059"> <i class="fas fa-phone"></i> 0887-3121-059 </a>
         <a href="mailto:balirental@gmail.com"> <i class="fas fa-envelope"></i> balirental@gmail.com </a>
         <a href="https://goo.gl/maps/BN9BLpGjSYXiHpvh7"> <i class="fas fa-map"></i> sukawati, gianyar, bali-80582 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="#"> <i class="fab fa-facebook-f"></i> facebook </a>
         <a href="#"> <i class="fab fa-twitter"></i> twitter </a>
         <a href="#"> <i class="fab fa-instagram"></i> instagram </a>
         <a href="#"> <i class="fab fa-linkedin"></i> linkedin </a>
      </div>

   </div>

   <div class="credit"> created by <span>magang arcom@2022</span> </div>

</section>

<!-- footer section ends -->









<!-- swiper js link  -->
<script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>