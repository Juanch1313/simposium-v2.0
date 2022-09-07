<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CAMEJAL | Simposio</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />
        <link rel="icon" href="./imagenes/camejal.png">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;500;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/981c8ced16.js" crossorigin="anonymous"></script>

        <style>
          html{
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
                  fontFamily:{
                    'josefin': ['Josefin Sans, sans-serif'],
                  }
              }
          }
        </script>
    </head>
    <body class="antialiased bg-gradient-to-l from-neutral-300 via-white to-gray-200">
    <nav class="bg-gray-200 px-2 sm:px-4 py-2.5 fixed w-full z-20 top-0 left-0 border-b border-gray-200">
  <div class="container flex flex-wrap justify-between items-center mx-auto">
  <a href="#Inicio" class="flex items-center bg-gray-300 rounded py-2 px-2">
      <img src="./imagenes/camejal.png" class="mr-3 h-6 sm:h-9" alt="Flowbite Logo">
      <span class="self-center text-titulos text-sm md:text-xl font-semibold whitespace-nowrap">CAMEJAL | Simposio</span>
  </a>
  <div class="flex md:order-1">
      <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
        <span class="sr-only">Abrir menu</span>
        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path></svg>
    </button>
  </div>
  <div class="hidden justify-between items-center w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
    <ul class="flex flex-col p-4 mt-4 bg-gray-200 rounded-lg border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-gray-300">
      <li>
        <a href="#Inicio" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-subtitulos bg-blue-700 md:hover:text-blue-700 rounded md:bg-transparent md:p-0 font-josefin" aria-current="page">Inicio</a>
      </li>
      <li>
        <a href="#mapa" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-subtitulos rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 font-josefin">Sede</a>
      </li>
      <li>
        <a href="#Miercoles-16" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-subtitulos rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 font-josefin">Miercoles</a>
      </li>
      <li>
        <a href="#Jueves-17" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-subtitulos rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 font-josefin">Jueves</a>
      </li>
      <li>
        <a href="#formulario" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-subtitulos rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 font-josefin">Registro</a>
      </li>
      <li>
        <a href="/login" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-subtitulos rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 font-josefin">Login</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
        

      <div id="Inicio" class="mt-24">
        <h1 class="text-center text-titulos text-3xl md:text-5xl drop-shadow-lg shadow-black font-josefin font-bold">Simposio Nacional de Arbitraje Médico</h1>
        <h2 class="text-center text-3xl text-subtitulos mt-3  drop-shadow-lg shadow-black font-josefin font-semibold">XXXVIII Reunión Ordinaria del Consejo Mexicano de Arbitraje Médico CMAM</h2>
        <div id="imagenes" class="w-full flex flex-col md:flex-row space-y-4 md:space-x-8 justify-center items-center">
        <img src="./imagenes/salud.png" class="w-[150px] h-[60px]" alt="Salud">
        <img src="./imagenes/logojalisco.png" class="w-[150px] h-[80px]" alt="Jalisco">
        <img src="./imagenes/cmam.jfif" class="w-[150px] h-[80px]" alt="cmam">
        </div>
        <br/>
        <h3 class="text-center text-xl md:text-3xl text-subtitulos font-bold font-josefin drop-shadow-lg shadow-black">“Calidad en los Servicios de Salud <br/> Una reflexión para el futuro”</h3>
      </div>


       <div id="mapa" class="w-[90%] m-auto bg-gradient-to-l to-[#cdcdcd] via-white from-[#cdcdcd] shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)] pb-10">
          <h1 class="mt-10 text-center font-josefin text-titulos"><span class="font-extrabold text-2xl md:text-4xl">Sede</span> <br/> <i class="text-subtitulos text-xl md:text-3xl">Hotel Baruk de Autor Guadalajara</i></h1>
          <iframe class="w-[90%] md:w-3/4 m-auto" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3139.1207460003834!2d-103.40012721590233!3d20.666945537969713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae7954a25cf5%3A0x2c4dc283c8e1115d!2sBaruk%20Hotel%20de%20Autor%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1661392112112!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>

       <div id="Actividades" class="mt-10">
        <h1 class="text-center text-4xl text-titulos font-josefin font-bold">Programa de actividades</h1>

        <div id="Miercoles-16" class="mt-5 w-full grid grid-cols-1">
          <div class="w-[90%] md:w-[70%] m-auto bg-gradient-to-l to-[#cdcdcd] via-white from-[#cdcdcd] shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)]">
          <h2 class="text-2xl text-center text-subtitulos font-josefin font-bold">Miércoles 16 de noviembre 2022</h2>
          <p class="w-[95%] m-auto">
            <span class="font-semibold font-josefin text-lg text-black">08:00 - 10:00 hrs.</span>
            <br/><br/>

            <span class="font-medium font-josefin text-subtitulos text-xl">TEMA. Políticas públicas y servicios de salud.</span> <br/>
            <span class="font-normal font-josefin text-lg text-black">10:00 - 10:30 hrs.</span> <br/>
            ● Objetivos del Estado para la protección, calidad y seguridad de los usuarios de
            Servicios de Salud en Jalisco. <br/>
            <strong> Mtra. Anna Bárbara Casillas <br/>
            <span class="font-josefin text-titulos font-normal">Coordinadora General Estratégica de Desarrollo Social Gobierno del
            Estado de Jalisco.</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-medium font-josefin text-subtitulos text-xl">TEMA. La protección de la Salud como obligación del Estado.</span>
            <br/>
            <span class="font-normal font-josefin text-lg text-black">10:30 - 11:00 hrs.</span> <br/>
            ● La protección de la salud como derecho humano. El Proyecto de Salud en el
            Gobierno de Jalisco.
            <br/>
            <strong>SECRETARIA DE SALUD JALISCO</strong>
            <br/>
            <strong>Dr. Fernando Petersen Aranguren <br/>
            <span class="opacity-70 font-bold">Secretario de Salud del Estado de Jalisco</span></strong>
              
            <br/>
            <br/>
            <br/>

            <span class="font-medium font-josefin text-subtitulos text-xl">TEMA. La regulación en la práctica de las Ciencias de la Salud.</span>
            <br/>
            <span class="font-normal font-josefin text-lg text-black">11:00 - 11:30 hrs.</span> <br/>
            ● Normatividad general en consultorios, clínicas y hospitales. <br/>
              <strong> Mtra. Denis Santiago Hernández <br/>
              Titular de la Comisión para la Protección Contra <br/>
              <span class="opacity-70 font-bold">Riesgos Sanitarios del Estado de Jalisco COPRISJAL</span> </strong>

            <br/>
            <br/>
            <br/>

            <span class="font-normal font-josefin text-lg text-black">11:30 - 12:00 hrs.</span> <span class="font-medium font-josefin text-subtitulos text-xl">RECESO</span>
                          
            <br/>
            <br/>
            <br/>

            <span class="font-medium font-josefin text-subtitulos text-xl">TEMA. Formación de Recursos Humanos en el área de las Ciencias de la Salud.</span>
            <br/>
            <span class="font-semibold font-josefin text-lg text-black">12:00 - 12:30 hrs.</span> <br/>
            ● Perspectiva de Género en los servicios de Salud. <br/>
            <strong>Dra. Tamara Martínez Ruíz <br/>
            <span class="opacity-70 font-bold">Titular de la Coordinación para la Igualdad de Género de la Universidad
            Nacional Autónoma de México UNAM</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold font-josefin text-lg text-black">12:30 - 13:00 hrs.</span> <br/>
            ● La calidad en servicios de salud en la formación de Recursos Humanos. <br/>
            <strong> Dra. Gabriela Vázquez Armenta <br/>
            <span class="opacity-70 font-bold">Decana de la Escuela de Medicina y Ciencias de la Salud en Tecnológico
            de Monterrey en Región Occidente
            UNIVERSIDAD TEC SALUD CAMPUS GUADALAJARA</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-medium font-josefin text-subtitulos text-xl">TEMA. Desarrollo de la Comisión de Arbitraje Médico del Estado de Jalisco</span>
            <br/>
            <span class="font-semibold font-josefin text-lg text-black">13:00 - 13:30 hrs.</span> <br/>
            ● Historia del Arbitraje Médico en Jalisco. <br/>
            <strong>Dr. Raúl Vargas López</strong>

            <br/>
            <br/>
            <br/>

            <span class="font-medium font-josefin text-subtitulos text-xl">TEMA: Manejo de la calidad en la atención prehospitalaria.</span>
            <br/>
            <span class="font-semibold font-josefin text-lg text-black">13:30 - 14:00 hrs.</span> <br/>
            ● Aspectos legales en la atención prehospitalaria. <br/>
            <strong> Mtro. Héctor Ernesto Estrada Jimenez <br/>
            <span class="opacity-70 font-bold">Director de la Escuela de Paramédicos de la
            CRUZ ROJA MEXICANA Delegación Guadalajara.</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold font-josefin text-lg text-black">14:00 hrs.</span> <span class="font-medium font-josefin text-subtitulos text-xl">COMIDA</span><br/>

            <br/>
            <br/>

            <span class="font-semibold font-josefin text-lg text-black">19:30 - 20:00 hrs.</span> <span class="font-medium font-josefin text-subtitulos text-xl">CEREMONIA INAUGURAL</span><br/>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold font-josefin text-lg text-black">20:00 - 20:30 hrs.</span> <span class="font-medium font-josefin text-subtitulos text-xl">CONFERENCIA MAGISTRAL.</span><br/>
            ● La Cultura de la Calidad y Seguridad del paciente. <br/>
            <strong>Dr. Enrique Ruelas Barajas <br/>
            <span class="opacity-70 font-bold">Primer Latinoamericano miembro de la Sociedad Internacional de Calidad de Atención a la Salud</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold font-josefin text-lg text-black">20:30 - 21:00 hrs.</span> 
            <span class="font-medium font-josefin text-subtitulos text-xl">COCTEL DE BIENVENIDA</span><br/>
            <br/>
            <br/>

          </p>
          </div>
        </div>
        <div id="Jueves-17" class="grid grid-cols-1 mt-10">
          <div class="w-[90%] md:w-[70%] bg-gradient-to-l to-[#cdcdcd] via-white from-[#cdcdcd] m-auto shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)]">
          <h2 class="text-2xl text-center text-subtitulos font-josefin font-bold">Jueves 17 de noviembre 2022</h2>
            <p class="w-[95%] m-auto">
              <br/>
              <span class="font-semibold font-josefin text-lg text-black">9:00 - 9:30 hrs.</span> <br/>
              ● La importancia de las Instituciones de Asistencia Privada. <br/>
              <strong> Dr. José Luis Solís Dávila <br/>
              <span class="opacity-70 font-bold">Presidente ASOCIACIÓN DE HOSPITALES PARTICULARES DE
              JALISCO A.C</span></strong>

              <br/>
              <br/>
              <br/>

              <span class="font-semibold font-josefin text-lg text-black">9:30 - 10:00 hrs.</span> <br/>
              ● El arbitraje médico en el entorno nacional. <br/>
              <strong>Dra. En Derecho Rosa María Díaz López <br/>
              <span class="opacity-70 font-bold">Comisionada de Arbitraje Médico del Estado de Nuevo León
              (COESAMED)</span></strong>

              <br/>
              <br/>
              <br/>

              <span class="font-semibold font-josefin text-lg text-black">10:00 - 10:30 hrs.</span> <br/>
              ● Rompiendo barreras para la igualdad y el goce de los derechos a la salud. <br/>
                <strong> Dra. Sofía Dumois Petersen <br/>
                <span class="opacity-70 font-bold">Dirección de Inclusión a personas con discapacidad</span></strong>
              
              <br/>
              <br/>
              <br/>

              <span class="font-semibold font-josefin text-lg text-black">10:30 - 11:30 hrs.</span> <span class="opacity-70 font-bold">CONFERENCIA MAGISTRAL.</span><br/>
              ● Iniciativas con perspectiva de género para el fortalecimiento de la Calidad en los Servicios de Salud. <br/>
              <strong>Dra. Nadine Flora Gasman Zylbermann <br/>
              <span class="opacity-70 font-bold">Presidenta del Instituto para las mujeres INMUJERES</span></strong>

              <br/>
              <br/>
              <br/>

              <span class="font-semibold font-josefin text-lg text-black">11:30 hrs.</span> <span class="font-medium font-josefin text-subtitulos text-xl">CLAUSURA DEL SIMPOSIO</span><br/>

              <br/>
              <br/>
              <br/>


              <span class="font-semibold font-josefin text-lg text-black">12:00 - 16:00  hrs.</span> 
              <span class="opacity-70 font-bold text-xl">TALLER del Consejo Mexicano de Arbitraje Médico CMAM</span><br/>

              <br/>
              <br/>
              <br/>

              <span class="font-semibold font-josefin text-lg text-black">16:10 hrs.</span> 
              <span class="font-medium font-josefin text-subtitulos text-xl">COMIDA</span>
              
              <br/>
              <br/>
              <br/>

              <p class="text-center text-titulos font-josefin">
              <strong>AUTORIDADES COMISIONADOS Y COMITÉ ORGANIZADOR</strong><br>
              <span class="text-lg text-subtitulos font-josefin">“Cortijo los Fernandez”</span>

              </p>
            </p>
          </div>
        </div>

       <div id="Orden de pago" class="w-full mt-5 grid justify-items-center shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)] pb-3 px-10">
        <h3 class="text-2xl md:text-5xl my-5 font-josefin font-bold text-center text-titulos">Registro</h3>
        <h2 class="text-lg md:text-2xl font-serif font-extrabold text-center opacity-90">A continuación haz click en el siguiente boton y realiza el pago correspondiente dicho en el archivo que se descargara</h2>
        <a class="my-5 w-full md:w-1/4  bg-subtitulos hover:bg-blue-700 text-white font-bold py-2 px-4 rounded grid justify-center" href="./imagenes/OrdenDePago.png" download>Descargar orden de pago</a>
        <p class="text-lg md:text-xl font-serif font-extrabold text-center opacity-90">Seguido volveras para rellenar el formulario que se presenta en el siguiente boton, donde colocaras tus datos y subiras la imagen del boucher de pago</p>

        <br/>
        <br/>
        <div id="formulario">
        <a class="mb-5 w-full bg-subtitulos hover:bg-blue-700 text-white font-bold py-2 px-4 rounded grid justify-center" href="{{route('registros.create')}}">Ir a formulario</a>
        </div>
       </div>

       <footer class="grid space-y-5 grid-cols-1 md:grid-cols-3 justify-items-center">
            <div id="imagen" class="grid justify-center content-center">
              <img src="./imagenes/logojalisco.png" class="w-[150px] h-[80px] basis-1/3" alt="Jalisco">
            </div>
            <div id="informacion" class="text-center">
              <p class="basis-1/3 text-xs content-center">
                <p class="text-titulos font-josefin text-base">Comisión de Arbitraje Médico del Estado de Jalisco - CAMEJAL</p>
                <p class="text-dark font-josefin">
                  Simon Bolivar #420, Atendemos cualquier tipo de inconformidad en la
                  prestación de servicios de salud en las instituciones privadas o asistencia
                  social.
                </p>
              </p>
            </div>
            <div id="contacto" class="grid content-center">
            <h2 class="text-lg font-josefin text-titulos">¡Contactanos y siguenos en nuestras redes!</h2>
            <div class="grid grid-cols-2 justify-items-center">
              <a href="https://es-la.facebook.com/ArbitrajeMedicoJalisco" target="_blank"><i class="fa-brands fa-facebook text-4xl md:text-5xl text-blue-900 hover:cursor-pointer"></i></a>
              <a href="https://www.instagram.com/came_jal/" target="_blank"><i class="fa-brands fa-instagram text-4xl md:text-5xl text-pink-900 hover:cursor-pointer"></i></i></a>
            </div>
            </div>
            <div>

            </div>
        </footer>

       <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    </body>
</html>
