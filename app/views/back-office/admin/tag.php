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
    <!-- Add tag Button -->
    <button class="add-tag-button bg-blue-500 text-white px-4 py-2 rounded-lg mb-4 hover:bg-blue-600 transition-colors duration-200" onclick="openAddtagModal()">
        <i class="fas fa-plus mr-2"></i> Add tag
    </button>

    <!-- Add tag Modal -->
    <div id="addtagModal" class="fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="bg-white rounded-lg p-6 w-full max-w-md">
            <h2 class="text-lg font-semibold mb-4">Add New tag</h2>
            <input type="text" id="newtagName" class="border border-gray-300 rounded-md px-3 py-2 w-full mb-4" placeholder="Enter tag name">
            <div class="flex justify-end">
                <button class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition-colors duration-200" onclick="addtag()">
                    Add
                </button>
                <button class="bg-gray-300 text-gray-700 px-4 py-2 rounded-lg ml-2 hover:bg-gray-400 transition-colors duration-200" onclick="closeAddtagModal()">
                    Cancel
                </button>
            </div>
        </div>
    </div>

    <!-- Categories Grid -->
    <div class="categories-grid grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
        <div class="tag-grid bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <span class="px-3 py-1 rounded-full bg-indigo-50 text-indigo-600 text-sm font-medium">
                    tag Name
                </span>
                <div class="flex items-center gap-2">
                    <button class="text-gray-400 hover:text-gray-500 transition-colors duration-200" onclick="openEditModal(1, 'tag Name')">
                        <i class="fas fa-pencil"></i>
                    </button>
                    <button class="text-gray-400 hover:text-red-500 transition-colors duration-200" onclick="deletetag(1)">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <h3 class="font-semibold text-gray-900">tag Name</h3>
            <div class="mt-4">
                <div class="flex items-center gap-4 text-sm text-gray-500">
                    <span class="flex items-center">
                        <i class="fas fa-book mr-2"></i>
                        X Cours
                    </span>
                    <span class="flex items-center">
                        <i class="fas fa-users mr-2"></i>
                        X Étudiants
                    </span>
                </div>
            </div>
        </div>
        <div class="tag-grid bg-white rounded-xl border border-gray-200 p-6 hover:shadow-lg transition-all duration-300">
            <div class="flex items-center justify-between mb-4">
                <span class="px-3 py-1 rounded-full bg-indigo-50 text-indigo-600 text-sm font-medium">
                    tag Name
                </span>
                <div class="flex items-center gap-2">
                    <button class="text-gray-400 hover:text-gray-500 transition-colors duration-200" onclick="openEditModal(1, 'tag Name')">
                        <i class="fas fa-pencil"></i>
                    </button>
                    <button class="text-gray-400 hover:text-red-500 transition-colors duration-200" onclick="deletetag(1)">
                        <i class="fas fa-trash"></i>
                    </button>
                </div>
            </div>
            <h3 class="font-semibold text-gray-900">tag Name</h3>
            <div class="mt-4">
                <div class="flex items-center gap-4 text-sm text-gray-500">
                    <span class="flex items-center">
                        <i class="fas fa-book mr-2"></i>
                        X Cours
                    </span>
                    <span class="flex items-center">
                        <i class="fas fa-users mr-2"></i>
                        X Étudiants
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>

  <!-- body end -->











  <!-- start footer -->
  
  <!-- end footer -->
  <!-- custom js file link  -->
  <script src="js/script.js"></script>
  <script>
    function openAddtagModal() {
        document.getElementById('addtagModal').classList.remove('hidden');
    }

    function closeAddtagModal() {
        document.getElementById('addtagModal').classList.add('hidden');
    }

    function addtag() {
        const tagName = document.getElementById('newtagName').value;
        if (tagName) {
            // Here you would add the logic to handle the addition of the new tag
            console.log('New tag:', tagName);
            closeAddtagModal();
        }
    }
</script>


</body>

</html>