<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>PROJ DEV APPLI WEB</title>
    <meta name="robots" content="noindex, nofollow" />
    <meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no"/>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet"/>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.0.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="assets/css/style.css">
    <link href="assets/css/tailwind.css" rel="stylesheet">
  </head>
  <header>
    <div class="header-2">
        <nav class="bg-white py-2 md:py-4">
          <div class="container px-4 mx-auto md:flex md:items-center">
            <div class="flex justify-between items-center">
              <a href="<?= DOMAIN ?>/" class="font-bold text-xl text-yellow-500"><img src="<?= DOMAIN ?>/assets/media/img/logo.png"></a>
             <button class="border border-solid border-gray-600 px-3 py-1 rounded orange opacity-50 hover:opacity-75 md:hidden" id="navbar-toggle">
                <i class="fas fa-bars"></i>
             </button>
            </div>
            <div class="hidden md:flex flex-col md:flex-row md:ml-auto mt-3 md:mt-0" id="navbar-collapse">
              <a href="<?= DOMAIN ?>/" class="p-2 lg:px-4 md:mx-2 orange rounded hover:bg-gray-200 hover:text-yellow-600 transition-colors duration-300">Carte</a>
              <a href="<?= DOMAIN ?>/a-propos" class="p-2 lg:px-4 md:mx-2 orange rounded hover:bg-gray-200 hover:text-yellow-600 transition-colors duration-300">À-propos</a>
              <a href="<?= DOMAIN ?>/contact" class="p-2 lg:px-4 md:mx-2 orange rounded hover:bg-gray-200 hover:text-yellow-600 transition-colors duration-300">Contact</a>
              <a href="<?= DOMAIN ?>/benevoles" class="p-2 lg:px-4 md:mx-2 orange text-center border border-solid border-yellow-600 rounded hover:bg-yellow-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Bénévoles</a>
              <a href="<?= DOMAIN ?>/partenaires" class="p-2 lg:px-4 md:mx-2 orange text-center border border-solid border-yellow-600 rounded hover:bg-yellow-600 hover:text-white transition-colors duration-300 mt-1 md:mt-0 md:ml-1">Partenaires</a>
            </div>
          </div>
        </nav>
      </div>
    </div>
  </header>
   <main>



