<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Détails de l'événement</title>

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
  <div class="bg-gradient-to-br from-purple-50 to-purple-100 py-8">
    <!-- En-tête avec actions -->
    <div class="mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl mb-6 border border-purple-100">
            <div class="p-8">
                <div class="flex justify-between items-center">
                    <div>
                        <h1 class="text-4xl font-bold text-[#9754b3] mb-3">Détails de l'événement</h1>
                        <div class="flex items-center mt-2">
                            <span class="px-4 py-1.5 rounded-full text-base font-medium bg-purple-100 text-[#9754b3] border border-purple-200">
                                Publié
                            </span>
                            <span class="ml-4 text-base text-purple-400">ID: EVT-12345</span>
                        </div>
                    </div>
                    <div class="flex space-x-4">
                        <button class="px-6 py-2.5 border-2 border-[#9754b3] rounded-xl text-base font-medium text-[#9754b3] hover:bg-purple-50 transition-all duration-300">
                            Modifier
                        </button>
                        <button class="px-6 py-2.5 border-2 border-red-300 rounded-xl text-base font-medium text-red-600 hover:bg-red-50 transition-all duration-300">
                            Supprimer
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grille d'informations -->
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <!-- Colonne principale -->
            <div class="lg:col-span-2 space-y-8">
                <!-- Informations de base -->
                <div class="bg-white rounded-2xl shadow-xl border border-purple-100">
                    <div class="p-8">
                        <h2 class="text-2xl font-semibold text-[#9754b3] mb-6">Informations générales</h2>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-base font-medium text-purple-600">Titre</label>
                                <p class="mt-2 text-xl text-gray-800">Festival de Musique 2024</p>
                            </div>
                            <div>
                                <label class="block text-base font-medium text-purple-600">Description</label>
                                <p class="mt-2 text-lg text-gray-700 leading-relaxed">Description détaillée de l'événement...</p>
                            </div>
                            <div class="grid grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-base font-medium text-purple-600">Date de début</label>
                                    <p class="mt-2 text-lg text-gray-800">15 Juin 2024</p>
                                </div>
                                <div>
                                    <label class="block text-base font-medium text-purple-600">Date de fin</label>
                                    <p class="mt-2 text-lg text-gray-800">17 Juin 2024</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Localisation -->
                <div class="bg-white rounded-2xl shadow-xl border border-purple-100">
                    <div class="p-8">
                        <h2 class="text-2xl font-semibold text-[#9754b3] mb-6">Localisation</h2>
                        <div class="space-y-6">
                            <div>
                                <label class="block text-base font-medium text-purple-600">Adresse</label>
                                <p class="mt-2 text-lg text-gray-800">123 Rue Example, 75001 Paris</p>
                            </div>
                          
                        </div>
                    </div>
                </div>

                <!-- Tickets et inscriptions -->
                <div class="bg-white rounded-2xl shadow-xl border border-purple-100">
                    <div class="p-8">
                        <h2 class="text-2xl font-semibold text-[#9754b3] mb-6">Billets et inscriptions</h2>
                        <div class="space-y-6">
                        
                            <div class="relative pt-1">
                                <div class="overflow-hidden h-3 text-xs flex rounded-full bg-purple-100">
                                    <div style="width: 75%" class="shadow-none flex flex-col text-center whitespace-nowrap text-white justify-center bg-[#9754b3]"></div>
                                </div>
                            </div>
                            <table class="min-w-full divide-y divide-purple-100">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-4 text-left text-base font-medium text-purple-600 uppercase tracking-wider">Type</th>
                                        <th class="px-6 py-4 text-left text-base font-medium text-purple-600 uppercase tracking-wider">Prix</th>
                                        <th class="px-6 py-4 text-left text-base font-medium text-purple-600 uppercase tracking-wider">Vendus</th>
                                    </tr>
                                </thead>
                                <tbody class="divide-y divide-purple-100">
                                    <tr class="hover:bg-purple-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-800">Standard</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-800">50€</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-800">100</td>
                                    </tr>
                                    <tr class="hover:bg-purple-50">
                                        <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-800">VIP</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-800">120€</td>
                                        <td class="px-6 py-4 whitespace-nowrap text-lg text-gray-800">45</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Colonne latérale -->
            <div class="space-y-8">
                <!-- Statistiques -->
                <div class="bg-white rounded-2xl shadow-xl border border-purple-100">
                    <div class="p-8">
                        <h2 class="text-2xl font-semibold text-[#9754b3] mb-6">Statistiques</h2>
                        <div class="space-y-6">
                            <div class="flex justify-between items-center p-4 rounded-xl bg-purple-50">
                                <span class="text-base text-purple-600">Vues</span>
                                <span class="text-xl font-semibold text-[#9754b3]">1,234</span>
                            </div>
                            <div class="flex justify-between items-center p-4 rounded-xl bg-purple-50">
                                <span class="text-base text-purple-600">Favoris</span>
                                <span class="text-xl font-semibold text-[#9754b3]">56</span>
                            </div>
                            <div class="flex justify-between items-center p-4 rounded-xl bg-purple-50">
                                <span class="text-base text-purple-600">Partages</span>
                                <span class="text-xl font-semibold text-[#9754b3]">23</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Actions rapides -->
                <div class="bg-white rounded-2xl shadow-xl border border-purple-100">
                    <div class="p-8">
                        <h2 class="text-2xl font-semibold text-[#9754b3] mb-6">Actions rapides</h2>
                        <div class="space-y-4">
                            <button class="w-full px-6 py-3 text-base font-medium text-white bg-[#9754b3] rounded-xl hover:bg-purple-700 transition-all duration-300 shadow-lg shadow-purple-200">
                                Exporter la liste des inscrits
                            </button>
                            <button class="w-full px-6 py-3 text-base font-medium text-[#9754b3] bg-purple-50 rounded-xl hover:bg-purple-100 transition-all duration-300">
                                Envoyer un message aux participants
                            </button>
                            <button class="w-full px-6 py-3 text-base font-medium text-[#9754b3] bg-purple-50 rounded-xl hover:bg-purple-100 transition-all duration-300">
                                Gérer les inscriptions
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
  <!-- body end -->











  <!-- start footer -->
  
  <!-- end footer -->
  <!-- custom js file link  -->
  <script src="js/script.js"></script>


</body>

</html>