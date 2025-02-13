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
  <section >
    <!-- Header -->
    <div class="max-w-7xl mx-auto mb-12 text-center">
        <h1 class="text-4xl font-bold text-white mb-4">Upcoming Events</h1>
        <p class="text-purple-100">Discover amazing events happening around you</p>
    </div>

    <!-- Events Grid -->
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        <!-- Event Card 1 -->
        <article class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="/api/placeholder/600/300" alt="Tech Conference" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Tech Conference 2025</h2>
                        <p class="text-purple-600">Technology • Conference</p>
                    </div>
                    <span class="px-3 py-1 bg-purple-100 text-[#8e44ad] rounded-full font-semibold">$299</span>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>March 15, 2025</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                        <span>San Francisco, CA</span>
                    </div>
                </div>

                <p class="text-gray-600 mb-4 line-clamp-2">Join us for the most innovative tech conference of 2025! Three days of learning and networking.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-2 py-1 bg-purple-100 text-[#8e44ad] rounded-full text-sm">#Tech</span>
                    <span class="px-2 py-1 bg-purple-100 text-[#8e44ad] rounded-full text-sm">#Innovation</span>
                </div>

                <button class="w-full px-4 py-2 bg-[#8e44ad] text-white rounded-lg hover:bg-[#9b59b6] transition duration-300">
                    View Details
                </button>
            </div>
        </article>

        <!-- Event Card 2 -->
        <article class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="/api/placeholder/600/300" alt="Music Festival" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Summer Music Festival</h2>
                        <p class="text-purple-600">Music • Festival</p>
                    </div>
                    <span class="px-3 py-1 bg-purple-100 text-[#8e44ad] rounded-full font-semibold">$149</span>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>July 1-3, 2025</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                        <span>Austin, TX</span>
                    </div>
                </div>

                <p class="text-gray-600 mb-4 line-clamp-2">Experience three days of amazing music with top artists and emerging talents.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-2 py-1 bg-purple-100 text-[#8e44ad] rounded-full text-sm">#Music</span>
                    <span class="px-2 py-1 bg-purple-100 text-[#8e44ad] rounded-full text-sm">#Festival</span>
                </div>

                <button class="w-full px-4 py-2 bg-[#8e44ad] text-white rounded-lg hover:bg-[#9b59b6] transition duration-300">
                    View Details
                </button>
            </div>
        </article>

        <!-- Event Card 3 -->
        <article class="bg-white rounded-2xl shadow-xl overflow-hidden hover:shadow-2xl transition-shadow duration-300">
            <img src="/api/placeholder/600/300" alt="Food & Wine Festival" class="w-full h-48 object-cover">
            <div class="p-6">
                <div class="flex justify-between items-start mb-4">
                    <div>
                        <h2 class="text-xl font-bold text-gray-800">Food & Wine Festival</h2>
                        <p class="text-purple-600">Food • Tasting</p>
                    </div>
                    <span class="px-3 py-1 bg-purple-100 text-[#8e44ad] rounded-full font-semibold">$89</span>
                </div>
                
                <div class="space-y-3 mb-4">
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                        <span>April 22, 2025</span>
                    </div>
                    <div class="flex items-center gap-2 text-gray-600">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                        </svg>
                        <span>Napa Valley, CA</span>
                    </div>
                </div>

                <p class="text-gray-600 mb-4 line-clamp-2">Savor exquisite wines and gourmet dishes from world-renowned chefs.</p>
                
                <div class="flex flex-wrap gap-2 mb-4">
                    <span class="px-2 py-1 bg-purple-100 text-[#8e44ad] rounded-full text-sm">#Food</span>
                    <span class="px-2 py-1 bg-purple-100 text-[#8e44ad] rounded-full text-sm">#Wine</span>
                </div>

                <button class="w-full px-4 py-2 bg-[#8e44ad] text-white rounded-lg hover:bg-[#9b59b6] transition duration-300">
                    View Details
                </button>
            </div>
        </article>

        <!-- Load More Button -->
        <div class="col-span-full text-center mt-8">
            <button class="px-8 py-3 bg-white text-[#8e44ad] rounded-xl font-semibold hover:bg-purple-50 transition duration-300">
                Load More Events
            </button>
        </div>
    </div>
</section>












  <!-- start footer -->
  
  <!-- end footer -->
  <!-- custom js file link  -->
  <script src="js/script.js"></script>


</body>

</html>