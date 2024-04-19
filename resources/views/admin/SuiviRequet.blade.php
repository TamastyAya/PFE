<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Suivi des requêtes</title>
  <link href="https://unpkg.com/tailwindcss@^2.2/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="flex">
  <!-- Sidebar -->
  <div class="h-screen w-64 bg-green-500 text-white shadow-xl flex flex-col justify-between items-center p-4">
    <h1 class="text-2xl font-bold mb-8">GECIMMO</h1>
    <nav class="mb-auto">
      <ul>
        <li class="mt-0 mb-2">
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
          <a href="#" class="flex items-center p-2 hover:bg-green-600 rounded-md">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path d="M9 17a2 2 0 1 0-4 0v-2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2zM19 15a2 2 0 1 0-4 0v-2a2 2 0 0 1 2-2h2a2 2 0 0 1 2 2v2z"></path><path fill-rule="evenodd" d="M13 11H9v2h4v-2zM13 7H9v2h4v-2z" clip-rule="evenodd"></path></svg>
            <span>Configuration des serveurs</span>
          </a>
        </li>
      </ul>
    </nav>
    <button class="text-white bg-green-500 hover:bg-green-600 font-bold py-2 px-4 rounded">Logout</button>
  </div>
  
  <!-- Main Content -->
  <main class="bg-gray-100 p-4 flex-1">
    <div class="flex justify-end mb-4">
      <!-- Search Form -->
      <form action="/search" class="flex items-center">
        <input type="text" placeholder="Rechercher" class="bg-gray-200 border-black-800 text-black rounded-full px-4 py-2">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white px-4 py-2 rounded-full ml-2">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
          </svg>
        </button>
      </form>
    </div>
    <section class="bg-white rounded-lg shadow-md p-4 flex">
      <!-- Table -->
      <table class="w-full table-auto mr-4">
        <thead>
          <tr>
            <th class="px-4 py-2 text-left">Requête</th>
            <th class="px-4 py-2 text-left">Développeur</th>
            <th class="px-4 py-2 text-left">Date</th>
            <th class="px-4 py-2 text-left"></th>
          </tr>
        </thead>
        <tbody>
          @foreach($requests as $requete)
          <tr>
              <td class="px-4 py-2 border-b border-gray-200">{{ $requete->contenu }}</td>
              <td class="px-4 py-2 border-b border-gray-200">{{ $requete->user->nomUser }}</td>              
              <td class="px-4 py-2 border-b border-gray-200">{{ $requete->version->dateVersion }}</td>
              
          </tr>
          @endforeach
      </tbody>
      
      </table>
      <!-- End of Table -->
    </section>
  </main>
</body>
</html>

              