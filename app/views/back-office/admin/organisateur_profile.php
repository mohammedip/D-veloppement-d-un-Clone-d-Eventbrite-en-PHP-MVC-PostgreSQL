<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>tutor profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

  <!-- start header  -->
  <?php require_once "header.php" ?>
  <!-- end header  -->

<!-- side bar start  -->
 <?php require_once "sideBar.php" ?>
<!-- side bar end  -->
<section class="teacher-profile">

   <h1 class="heading">profile details</h1>

   <div class="details">
      <div class="tutor">
         <img src="images/pic-2.jpg" alt="">
         <h3>john deo</h3>
         <span>developer</span>
      </div>
      <div class="flex">
         <p>total Events : <span>4</span></p>
         <p>total User Get Tecket : <span>18</span></p>
         <p>total Ticket : <span>1208</span></p>

      </div>
   </div>

</section>

<section class="courses">

   <h1 class="heading">our Events</h1>

   <div class="box-container">

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-1.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete HTML tutorial</h3>
         <a href="playlist.html" class="inline-btn">view Event</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-2.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete CSS tutorial</h3>
         <a href="playlist.html" class="inline-btn">view Event</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-3.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete javascript tutorial</h3>
         <a href="playlist.html" class="inline-btn">view Event</a>
      </div>

      <div class="box">
         <div class="thumb">
            <img src="images/thumb-4.png" alt="">
            <span>10 videos</span>
         </div>
         <h3 class="title">complete Boostrap tutorial</h3>
         <a href="playlist.html" class="inline-btn">view Event</a>
      </div>

   </div>

</section>











<!-- start footer -->
<?php require_once "footer.php" ?>
<!-- end footer -->
<!-- custom js file link  -->
<script src="js/script.js"></script>

   
</body>
</html>