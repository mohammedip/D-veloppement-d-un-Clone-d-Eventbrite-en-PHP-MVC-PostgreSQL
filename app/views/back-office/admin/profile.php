<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>profile</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
   <script src="https://cdn.tailwindcss.com"></script>
   <!-- custom css file link  -->
   <link rel="stylesheet" href=" ../css/style2.css">

</head>
<body>

  <!-- start header  -->
  <?php require_once "header.php" ?>
  <!-- end header  -->

<!-- side bar start  -->
 <?php require_once "sideBar.php" ?>
<!-- side bar end  -->

<section class="user-profile">

   <h1 class="heading">your profile</h1>

   <div class="info">

      <div class="user">
         <img src="../images/pic-1.jpg" alt="">
         <h3>shaikh anas</h3>
         <p>student</p>
         <a href="updateProfil" class="inline-btn">update profile</a>
      </div>
   
      <div class="grid grid-cols-1 gap-5 sm:grid-cols-2 lg:grid-cols-4">
      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <div class="rounded-md bg-indigo-500 p-4">
                <i class="fas fa-users text-white text-2xl"></i>
              </div>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-base font-medium text-gray-500 truncate">Total User get tecket</dt>
                <dd class="text-2xl font-semibold text-gray-900">250</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-5 py-3">
          <div class="text-lg">
            <a href="#" class="font-medium text-indigo-600 hover:text-indigo-500">Voir tous</a>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <div class="rounded-md bg-green-500 p-4">
                <i class="fas fa-chalkboard-teacher text-white text-2xl"></i>
              </div>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-base font-medium text-gray-500 truncate">Events Actifs</dt>
                <dd class="text-2xl font-semibold text-gray-900">45</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-5 py-3">
          <div class="text-lg">
            <a href="allEnseignement.html" class="font-medium text-green-600 hover:text-green-500">Voir tous</a>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <div class="rounded-md bg-yellow-500 p-4">
                <i class="fas fa-clock text-white text-2xl"></i>
              </div>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-base font-medium text-gray-500 truncate">Events En Attente</dt>
                <dd class="text-2xl font-semibold text-gray-900">12</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-5 py-3">
          <div class="text-lg">
            <a href="allEnseignement.html" class="font-medium text-yellow-600 hover:text-yellow-500">Voir tous</a>
          </div>
        </div>
      </div>

      <div class="bg-white overflow-hidden shadow rounded-lg">
        <div class="p-5">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <div class="rounded-md bg-purple-500 p-4">
                <i class="fas fa-user-tie text-white text-2xl"></i>
              </div>
            </div>
            <div class="ml-5 w-0 flex-1">
              <dl>
                <dt class="text-base font-medium text-gray-500 truncate">Total Events</dt>
                <dd class="text-2xl font-semibold text-gray-900">57</dd>
              </dl>
            </div>
          </div>
        </div>
        <div class="bg-gray-50 px-5 py-3">
          <div class="text-lg">
            <a href="allEnseignement.html" class="font-medium text-purple-600 hover:text-purple-500">Voir tous</a>
          </div>
        </div>
      </div>
    </div>
   </div>

</section>














<!-- start footer -->
<?php
//  require_once "footer.php"
 ?>
<!-- end footer -->

<!-- custom js file link  -->
<script src="../js/script.js"></script>

   
</body>
</html>