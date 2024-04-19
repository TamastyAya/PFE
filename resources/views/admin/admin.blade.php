<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>configration des serveurs</title>
  <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body>
  <div class="flex">
    <!-- Sidebar -->
    <div class="h-screen w-64 bg-green-500 text-white fixed shadow-xl flex flex-col justify-between items-center p-4">
        <h1 class="text-2xl font-bold mb-8">GECIMMO</h1>
        <nav class="mb-auto"> <!-- Added class "mb-auto" to push the list items to the top -->
          <ul>
            <li class="mt-0 mb-2"> <!-- Added class "mt-0" to remove top margin -->
              <a href="#" class="flex items-center p-2 hover:bg-green-600 rounded-md">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16v12a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 12v6m4-6v6"></path></svg>
                <span>Suivi des requêtes</span>
              </a>
            </li>
            <li class="mb-2">
              <a href="#" class="flex items-center p-2 hover:bg-green-600 rounded-md">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 19v-6a3 3 0 0 0-3-3H4a3 3 0 0 0-3 3v6h5zM14 19v-6a3 3 0 0 0-3-3h-5a3 3 0 0 0-3 3v6h8zM19 9v-4a3 3 0 0 0-3-3h-2a3 3 0 0 0-3 3v4h5z"></path></svg>
                <span>Gestion des serveurs</span>
              </a>
            </li>
            <li class="mb-2">
              <a href="{{ route('configserver') }}" class="flex items-center p-2 hover:bg-green-600 rounded-md">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 17a2 2 0 1 0-4 0v-2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2zM19 15a2 2 0 1 0-4 0v-2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2z"></path><path fill-rule="evenodd" d="M13 11H9v2h4v-2zM13 7H9v2h4v-2z" clip-rule="evenodd"></path></svg>
                <span>Configuration des serveurs</span>
              </a>
            </li>
          </ul>
        </nav>
        <button href="logout"class="text-white bg-green-500 hover:bg-green-600 font-bold py-2 px-4 rounded">Logout</button>
      </div>
      
    
    <!-- Form   -->  
    <div class="ml-64 p-4">
        <form method="POST" >
            <div class="grid grid-cols-1 gap-4 mb-4">
                <div class="flex flex-col">
                    <label for="IdP" class="text-gray-700">Nom serveur:</label>
                    <input type="text" id="nomServeur" name="nomServeur" class="form-input mt-1 border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 w-full md:w-96" placeholder="Entrer le nom du serveur">
                </div>
                <div class="flex flex-col">
                    <label for="Vp" class="text-gray-700">Adresse IP:</label>
                    <input type="text" id="adresseIP" name="adresseIP" class="form-input mt-1 border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 w-full md:w-96" placeholder="Entrer l'adresse IP">
                </div>
                <div class="flex flex-col">
                    <label for="Vp" class="text-gray-700">Nom de la base de données:</label>
                    <input type="text" id="nomDB" name="nomDB" class="form-input mt-1 border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 w-full md:w-96" placeholder="Entrer le nom de la base de données">
                </div>
                <div class="flex flex-col">
                    <label for="Vp" class="text-gray-700">Nom d'utilisateur:</label>
                    <input type="text" id="userName" name="userName" class="form-input mt-1 border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 w-full md:w-96" placeholder="Entrer le nom d'utilisateur">
                </div>
                <div class="flex flex-col">
                    <label for="Vp" class="text-gray-700">Mot de passe:</label>
                    <input type="password" id="password" name="password" class="form-input mt-1 border rounded-md px-3 py-2 focus:outline-none focus:ring-1 focus:ring-blue-500 w-full md:w-96" placeholder="Entrer le mot de passe"  @error('password') border-red-500 @enderror" id="password" name="password" required autocomplete="current-password">
                   
                </div>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded-md hover:bg-blue-600 focus:outline-none focus:ring-2 focus:ring-blue-500">Enregistrer</button>
        </form>
    </div>
  </div>
</body>
</html>
