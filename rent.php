<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>rent</title>

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
   </nav>

   <div id="menu-btn" class="fas fa-bars"></div>

</section>

<!-- header section ends -->

<div class="heading" style="background:url(images/h3.jpg) no-repeat">
   <h1>Rent now</h1>
</div>

<!-- booking section starts  -->

<section class="booking">

   <h1 class="heading-title">Best Motorbike Rental</h1>

   <form action="rent_form.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>Phone :</span>
            <input type="text" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many rent :</span>
            <input type="number" placeholder="how much will rent" name="rent">
         </div>
         <div class="inputBox">
            <span>Motorcycle :</span>
            <select name="motorcycle">
                <option value="scoopy">Scoopy</option>
                <option value="vario 125">Vario 125</option>
                <option value="klx 150">KLX 150</option>
                <option value="nmax">NMAX</option>
                <option value="vario">Vario</option>
                <option value="kawasaki ninja">Kawasaki ninja </option>
                <option value="mio modif">Vario modif</option>
                <option value="vespa antik">Vespa antik</option>
                <option value="aerox">Aerox</option>
                <option value="suprax125">Suprax125</option>
                <option value="mio">Mio</option>
                <option value="vario 150">Vario 150</option>

            </select>
         </div>
         <div class="inputBox">
            <span>start :</span>
            <input type="date" name="start">
         </div>
         <div class="inputBox">
            <span>Time start :</span>
            <input type="time" name="time_start">
         </div>
         <div class="inputBox">
            <span>end :</span>
            <input type="date" name="end">
         </div>
         <div class="inputBox">
            <span>time start :</span>
            <input type="time" name="time_end">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<!-- booking section ends -->

















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