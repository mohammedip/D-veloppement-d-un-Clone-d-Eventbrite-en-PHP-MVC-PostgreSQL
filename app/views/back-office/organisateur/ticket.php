<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>home</title>

  <!-- font awesome cdn link  -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
  <script src="https://cdn.tailwindcss.com"></script>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
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




  <!-- body Start -->
  <section class="home-grid">
  <div class="mt-8">
      <div class="bg-white shadow rounded-lg">
        <div class="px-4 py-5 sm:px-6 flex justify-between items-center">
          <div class="flex items-center">
            <i class="fas fa-user-clock text-yellow-500 text-xl mr-3"></i>
            <h3 class="text-lg leading-6 font-medium text-gray-900">Tout User Inscri</h3>
          </div>
        
        </div>
        <div class="border-t border-gray-200">
          <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200">
              <thead class="bg-gray-50">
                <tr>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Enseignant</th>
                  <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Email</th>
            
              
                </tr>
              </thead>
              <tbody class="bg-white divide-y divide-gray-200">
            
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <img class="h-16 w-16 rounded-full object-cover"
                        src="https://ui-avatars.com/api/?name=Pierre%20Lefevre&background=random"
                        alt="Pierre Lefevre">
                      <div class="ml-4">
                        <div class="text-xl font-medium text-gray-900">
                          Pierre Lefevre
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-xl text-gray-900">pierre.lefevre@example.com</div>
                  </td>
              
                
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <img class="h-16 w-16 rounded-full object-cover"
                        src="https://ui-avatars.com/api/?name=Pierre%20Lefevre&background=random"
                        alt="Pierre Lefevre">
                      <div class="ml-4">
                        <div class="text-xl font-medium text-gray-900">
                          Pierre Lefevre
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-xl text-gray-900">pierre.lefevre@example.com</div>
                  </td>
              
                  
                </tr>
                <tr class="hover:bg-gray-50">
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="flex items-center">
                      <img class="h-16 w-16 rounded-full object-cover"
                        src="https://ui-avatars.com/api/?name=Pierre%20Lefevre&background=random"
                        alt="Pierre Lefevre">
                      <div class="ml-4">
                        <div class="text-xl font-medium text-gray-900">
                          Pierre Lefevre
                        </div>
                      </div>
                    </div>
                  </td>
                  <td class="px-6 py-4 whitespace-nowrap">
                    <div class="text-xl text-gray-900">pierre.lefevre@example.com</div>
            
                
                </tr>

              </tbody>
            </table>
          </div>
        </div>
      </div>
      <button type="button"
                        class="inline-flex items-center px-4 py-2 border border-transparent text-xl leading-4 font-medium rounded-md text-white bg-green-600 hover:bg-green-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-green-500 mt-6 ">
                        
                        <i class="fas fa-check mr-2"></i>
                        Telecharger PDF
                      </button>
    </div>
  </section>
  <!-- body end -->











  <!-- start footer -->
  
  <!-- end footer -->
  <!-- custom js file link  -->
  <script src="js/script.js"></script>


</body>

</html>