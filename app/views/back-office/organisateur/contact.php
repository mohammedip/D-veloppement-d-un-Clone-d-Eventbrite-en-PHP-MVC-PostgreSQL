<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>contact us</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href=" css/style2.css">

</head>
<body>

  <!-- start header  -->
  <?php require_once "header.php" ?>
  <!-- end header  -->

<!-- side bar start  -->
 <?php require_once "sideBar.php" ?>
<!-- side bar end  -->

<section class="contact">

   <div class="row">

      <div class="image">
         <img src="images/contact-img.svg" alt="">
      </div>

      <form action="" method="post">
         <h3>get in touch</h3>
         <input type="text" placeholder="enter your name" name="name" required maxlength="50" class="box">
         <input type="email" placeholder="enter your email" name="email" required maxlength="50" class="box">
         <input type="number" placeholder="enter your number" name="number" required maxlength="50" class="box">
         <textarea name="msg" class="box" placeholder="enter your message" required maxlength="1000" cols="30" rows="10"></textarea>
         <input type="submit" value="send message" class="inline-btn" name="submit">
      </form>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-phone"></i>
         <h3>phone number</h3>
         <a href="tel:1234567890">123-456-7890</a>
         <a href="tel:1112223333">111-222-3333</a>
      </div>
      
      <div class="box">
         <i class="fas fa-envelope"></i>
         <h3>email address</h3>
         <a href="mailto:shaikhanas@gmail.com">shaikhanas@gmail.come</a>
         <a href="mailto:anasbhai@gmail.com">anasbhai@gmail.come</a>
      </div>

      <div class="box">
         <i class="fas fa-map-marker-alt"></i>
         <h3>office address</h3>
         <a href="#">flat no. 1, a-1 building, jogeshwari, mumbai, india - 400104</a>
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