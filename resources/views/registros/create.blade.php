<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>CAMEJAL | Simposio</title>

  <!-- Fonts -->
  <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500;600;700&display=swap" rel="stylesheet">

  <link rel="icon" href="./imagenes/camejal.png">

  <style>
    html {
      font-family: 'Josefin Sans', sans-serif;
      scroll-behavior: smooth;
    }
  </style>
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            'titulos': '#55646B',
            'subtitulos': '#365B6D',
          }
        },
        fontFamily: {
          'josefin': ['Josefin Sans, sans-serif'],
        }
      }
    }
  </script>
</head>

<body class="antialiased bg-gradient-to-l from-neutral-300 via-white to-gray-200">
  <nav class="bg-gray-200 px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b border-gray-200">
    <div class="container flex flex-wrap justify-between items-center mx-auto">
      <a href="/" class="flex items-center bg-gray-300 rounded py-2 px-2">
        <img src="/imagenes/camejal.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
        <span class="self-center text-xl text-titulos  font-josefin font-semibold whitespace-nowrap">CAMEJAL | Simposio</span>
      </a>
      <div class="flex md:order-1">
        <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
          <span class="sr-only">Abrir menu</span>
          <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
          </svg>
        </button>
      </div>
      <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
        <ul class="flex flex-col p-4 mt-4 bg-gray-200 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-gray-300">
          <li>
            <a href="/" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-gray-700 bg-blue-700 md:hover:text-blue-700 font-josefin rounded md:bg-transparent md:p-0" aria-current="page">Volver</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div id="formulario" class="mt-40 w-[90%] m-auto">
    <form action="{{route('registros.store')}}" method="POST" enctype="multipart/form-data">

      @csrf

      <div class="relative z-0 mb-6 w-full group">
        <input type="email" name="correo" id="correo" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-blue-500 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
        <label for="correo" class="font-josefin peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo</label>
      </div>
      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="nombre" id="nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-blue-500 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
          <label for="nombre" class="font-josefin peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre/s</label>
        </div>
        <div class="relative z-0 mb-6 w-full group">
          <input type="text" name="apellidos" id="apellidos" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-blue-500 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
          <label for="apellidos" class="font-josefin peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellidos</label>
        </div>
      </div>
      <div class="grid md:grid-cols-2 md:gap-6">
        <div class="relative z-0 mb-6 w-full group">
          <input type="tel" name="telefono" id="telefono" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-blue-500 dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
          <label for="telefono" class="font-josefin peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Numero celular</label>
        </div>
        <label class="text-gray-500 text-lg dark:text-gray-400">Imagen del boucher <br />
          <input type="file" class="w-1/2 md:w-full" name="boucher" accept="image/png, image/jpeg" required />
        </label>
      </div>
      <button type="submit" class="font-josefin mt-3 text-white bg-titulos hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full text-center sm:w-auto px-10 py-2.5 text-center">Registarse</button>
    </form>

    <div class="Nota mt-10">
      <h1 class="text-2xl md:text-3xl font-josefin text-center text-subtitulos">
        Nota: Al terminar el registro se te mandara a la pagina de inicio
      </h1>
    </div>

  </div>

  <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
</body>

</html>