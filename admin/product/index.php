<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
<body class="bg-gray-100">

<div class="container mx-auto mt-8">
  <div class="max-w-md mx-auto bg-white p-8 rounded shadow-md">
    <h2 class="text-2xl text-center font-semibold mb-6">Ajouter un Produit</h2>

    <!-- Formulaire -->
    <form action="insert.php" method="POST" enctype="multipart/form-data">
      <!-- Nom du Produit -->
      <div class="mb-4">
        <label for="nom" class="block text-gray-700 font-bold mb-2">Nom du Produit</label>
        <input type="text" id="nom" name="nom" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
      </div>

      <!-- Description du Produit -->
      <div class="mb-4">
        <label for="description" class="block text-gray-700 font-bold mb-2">Description du Produit</label>
        <textarea id="description" name="description" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required></textarea>
      </div>

      <!-- Prix du Produit -->
      <div class="mb-4">
        <label for="prix" class="block text-gray-700 font-bold mb-2">Prix du Produit</label>
        <input type="text" id="prix" name="prix" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
      </div>

      <!-- Stock du Produit -->
      <div class="mb-6">
        <label for="stock" class="block text-gray-700 font-bold mb-2">Stock du Produit</label>
        <input type="number" id="stock" name="stock" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
      </div>
      
                      <!-- Catégorie du Produit -->
                      <div class="mb-6 ">
          <label for="categorie" class="block text-gray-700 font-bold mb-2">Catégorie du Produit</label>
          <select id="categorie" name="categorie" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            <option value="cadeau">cadeau</option>
            <option value="homme">homme</option>
            <option value="femme">femme</option>
            <option value="enfant">enfant</option>
          </select>
                 <!-- type du Produit -->
              <div class="mb-6 mt-6">
          <label for="type" class="block text-gray-700 font-bold mb-2">Type du Produit</label>
          <select id="type" name="type" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" required>
            <option value="Chaussures">Chaussures</option>
            <option value="vetements">vetements</option>
            <option value="accessoires">accessoires</option>
          </select>


      <div class="mb-4 mt-5">
          <label for="image" class="block text-gray-700 font-bold mb-2">Image du Produit</label>
          <input type="file" id="image" name="image" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:border-blue-500" accept="image/*" required>
        </div>

        </div>

      <!-- Bouton d'Envoyer -->
      <div class="flex justify-center">
        <button type="submit" name="submit" class="px-6 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline-blue active:bg-blue-700">Ajouter</button>
      </div>

    </form>
  </div>
</div>
    
</body>
</html>