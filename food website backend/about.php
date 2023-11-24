<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">

   <link rel="stylesheet" href="css/style.css">

</head>
<body>
  
<?php include 'components/user_header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p><a href="home.php">home</a> <span> / about</span></p>
</div>



<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Enjoy a cozy yet elegant atmosphere that sets the stage for memorable dining experiences.Choose us for sustainable practices, inclusive dining options, and active involvement in our local community.</p>
         <a href="menu.html" class="btn">our menu</a>
      </div>

   </div>

</section>



<section class="steps">

   <h1 class="title">simple steps</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/step-1.png" alt="">
         <h3>Choose Order</h3>
         <p>We have a  varied menu, choose what suits your taste.</p>
      </div>

      <div class="box">
         <img src="images/step-2.png" alt="">
         <h3>Fast Delivery</h3>
         <p>We offer the fastest delivery service so you can enjoy your meal.</p>
      </div>

      <div class="box">
         <img src="images/step-3.png" alt="">
         <h3>Enjoy Food</h3>
         <p>Enjoy your delicious and healthy meal. We hope you will like it.</p>
      </div>

   </div>

</section>


<section class="reviews">

   <h1 class="title">Customer's Reivews</h1>

   <div class="swiper reviews-slider">

      <div class="swiper-wrapper">

         <div class="swiper-slide slide">
            <img src="images/pic-1.png" alt="">
            <p>A culinary gem! From the first bite to the last, every dish was a masterpiece. The flavors were perfectly balanced, and the presentation was stunning. The attention to detail from the kitchen to the service was impeccable. Can't wait to return!</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>john deo</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-2.png" alt="">
            <p>This restaurant is a hidden treasure. The cozy ambiance and warm decor make it a perfect spot for a romantic dinner. The staff was attentive, and the menu offered a delightful variety. A memorable experience, and we'll definitely be back for more.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Menna Mohammed</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-3.png" alt="">
            <p>I was blown away by the exceptional service. The staff went above and beyond to make our dining experience special. From recommendations to accommodating dietary preferences, they nailed it. A big shoutout to the team for making us feel so welcome.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Marwan Ali</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-4.png" alt="">
            <p>A culinary adventure! The chef's creativity shone through in every dish. The fusion of flavors was unlike anything I've experienced before. It's clear that they take pride in pushing the boundaries of traditional cuisine. A must-visit for food enthusiasts.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Nour Salah</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-5.png" alt="">
            <p>Perfect for families! The kids loved the menu options, and the staff was incredibly accommodating. The portions were generous, and the atmosphere was lively without being overwhelming. A great place for quality family time with delicious food.</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Ali Ahmed</h3>
         </div>

         <div class="swiper-slide slide">
            <img src="images/pic-6.png" alt="">
            <p>Kudos for the commitment to sustainability! Knowing that the ingredients are locally sourced and the restaurant has eco-friendly practices made the dining experience even more enjoyable. Delicious food with a conscience—what more could you ask for?</p>
            <div class="stars">
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star"></i>
               <i class="fas fa-star-half-alt"></i>
            </div>
            <h3>Farida Khaled</h3>
         </div>

      </div>

      <div class="swiper-pagination"></div>

   </div>

</section>


<?php include 'components/footer.php'; ?>
=

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>


<script src="js/script.js"></script>

<script>

var swiper = new Swiper(".reviews-slider", {
   loop:true,
   grabCursor: true,
   spaceBetween: 20,
   pagination: {
      el: ".swiper-pagination",
      clickable:true,
   },
   breakpoints: {
      0: {
      slidesPerView: 1,
      },
      700: {
      slidesPerView: 2,
      },
      1024: {
      slidesPerView: 3,
      },
   },
});

</script>

</body>
</html>