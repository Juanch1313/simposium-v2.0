<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CAMEJAL | Simposio</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/flowbite@1.5.2/dist/flowbite.min.css" />

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}
        </style>

        <style>
            html {
              scroll-behavior: smooth;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
        <script src="https://cdn.tailwindcss.com"></script>
        <script>
        tailwind.config = {
        theme: {
                extend: {
                    colors: {
                        
                    }
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
      <span class="self-center text-xl font-semibold whitespace-nowrap">CAMEJAL | Simposio</span>
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
        <a href="#Inicio" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-gray-700 bg-blue-700 md:hover:text-blue-700 rounded md:bg-transparent md:p-0" aria-current="page">Inicio</a>
      </li>
      <li>
        <a href="#mapa" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Sede</a>
      </li>
      <li>
        <a href="#Miercoles-16" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Miercoles</a>
      </li>
      <li>
        <a href="#Jueves-17" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Jueves</a>
      </li>
      <li>
        <a href="#Viernes-18" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Viernes y Sabado</a>
      </li>
      <li>
        <a href="#formulario" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Registro</a>
      </li>
      <li>
        <a href="/login" class="block text-xl font-extrabold py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Login</a>
      </li>
    </ul>
  </div>
  </div>
</nav>
        

      <div id="Inicio" class="mt-24">
        <h1 class="text-center text-gray-600 text-3xl md:text-5xl drop-shadow-lg shadow-black">Simposio Nacional de Arbitraje Médico</h1>
        <h2 class="text-center text-3xl text--gray-600 opacity-80 mt-3  drop-shadow-lg shadow-black">XXXVIII Reunión Ordinaria del Consejo Mexicano de Arbitraje Médico CMAM</h2>
        <br/>
        <h3 class="text-center text-xl md:text-3xl text-blue-700 font-bold font-sans drop-shadow-lg shadow-black">“Calidad en los Servicios de Salud <br/> Una reflexión para el futuro”</h3>
      </div>


       <div id="mapa" class="w-full shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)] pb-10">
          <h1 class="text-4xl mt-10 text-center font-sans"><span class="font-extrabold">Sede</span> <br/> <i>Hotel Baruk de Autor Guadalajara</i></h1>
          <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3139.1207460003834!2d-103.40012721590233!3d20.666945537969713!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae7954a25cf5%3A0x2c4dc283c8e1115d!2sBaruk%20Hotel%20de%20Autor%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1661392112112!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
       </div>

       <div id="Actividades" class="mt-10">
        <h1 class="text-center text-4xl text-gray-700 font-extrabold">Programa de actividades</h1>

        <div id="Miercoles-16" class="mt-5 w-full grid grid-cols-1 md:grid-cols-2">
          <div class="col-start-1 shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)]">
          <h2 class="text-2xl text-center font-bold font-sans">Miércoles 16 de noviembre 2022</h2>
          <p class="w-[95%] m-auto">
            <span class="font-semibold text-lg opacity-90">08:00 - 10:00 hrs.</span>
            <br/><br/>

            <span class="font-bold text-xl underline decoration-sky-600 decoration-wavy">TEMA. Políticas públicas y servicios de salud.</span> <br/>
            <span class="font-semibold text-lg opacity-90">10:00 - 10:30 hrs.</span> <br/>
            ● Objetivos del Estado para la protección, calidad y seguridad de los usuarios de
            Servicios de Salud en Jalisco. <br/>
            <strong> Mtra. Anna Bárbara Casillas <br/>
            <span class="opacity-70 font-bold">Coordinadora General Estratégica de Desarrollo Social Gobierno del
            Estado de Jalisco.</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-bold text-xl underline decoration-sky-600 decoration-wavy">TEMA. La protección de la Salud como obligación del Estado.</span>
            <br/>
            <span class="font-semibold text-lg opacity-90">10:30 - 11:00 hrs.</span> <br/>
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

            <span class="font-bold text-xl underline decoration-sky-600 decoration-wavy">TEMA. La regulación en la práctica de las Ciencias de la Salud.</span>
            <br/>
            <span class="font-semibold text-lg opacity-90">11:00 - 11:30 hrs.</span> <br/>
            ● Normatividad general en consultorios, clínicas y hospitales. <br/>
              <strong> Mtra. Denis Santiago Hernández <br/>
              Titular de la Comisión para la Protección Contra <br/>
              <span class="opacity-70 font-bold">Riesgos Sanitarios del Estado de Jalisco COPRISJAL</span> </strong>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold text-lg opacity-90">11:30 - 12:00 hrs.</span> <span class="opacity-70 font-bold">RECESO</span>
                          
            <br/>
            <br/>
            <br/>

            <span class="font-bold text-xl underline decoration-sky-600 decoration-wavy">TEMA. Formación de Recursos Humanos en el área de las Ciencias de la Salud.</span>
            <br/>
            <span class="font-semibold text-lg opacity-90">12:00 - 12:30 hrs.</span> <br/>
            ● Perspectiva de Género en los servicios de Salud. <br/>
            <strong>Dra. Tamara Martínez Ruíz <br/>
            <span class="opacity-70 font-bold">Titular de la Coordinación para la Igualdad de Género de la Universidad
            Nacional Autónoma de México UNAM</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold text-lg opacity-90">12:30 - 13:00 hrs.</span> <br/>
            ● La calidad en servicios de salud en la formación de Recursos Humanos. <br/>
            <strong> Dra. Gabriela Vázquez Armenta <br/>
            <span class="opacity-70 font-bold">Decana de la Escuela de Medicina y Ciencias de la Salud en Tecnológico
            de Monterrey en Región Occidente
            UNIVERSIDAD TEC SALUD CAMPUS GUADALAJARA</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-bold text-xl underline decoration-sky-600 decoration-wavy">TEMA. Desarrollo de la Comisión de Arbitraje Médico del Estado de Jalisco</span>
            <br/>
            <span>13:00 - 13:30 hrs.</span> <br/>
            ● Historia del Arbitraje Médico en Jalisco. <br/>
            <strong>Dr. Raúl Vargas López</strong>

            <br/>
            <br/>
            <br/>

            <span class="font-bold text-xl underline decoration-sky-600 decoration-wavy">TEMA: Manejo de la calidad en la atención prehospitalaria.</span>
            <br/>
            <span class="font-semibold text-lg opacity-90">13:30 - 14:00 hrs.</span> <br/>
            ● Aspectos legales en la atención prehospitalaria. <br/>
            <strong> Mtro. Héctor Ernesto Estrada Jimenez <br/>
            <span class="opacity-70 font-bold">Director de la Escuela de Paramédicos de la
            CRUZ ROJA MEXICANA Delegación Guadalajara.</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold text-lg opacity-90">14:00 hrs.</span> <span class="opacity-70 font-bold text-xl">COMIDA</span><br/>

            <br/>
            <br/>

            <span class="font-semibold text-lg opacity-90">19:30 - 20:00 hrs.</span> <span class="opacity-70 font-bold text-xl">CEREMONIA INAUGURAL</span><br/>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold text-lg opacity-90">20:00 - 20:30 hrs.</span> <span class="opacity-70 font-bold text-xl">CONFERENCIA MAGISTRAL.</span><br/>
            ● La Cultura de la Calidad y Seguridad del paciente. <br/>
            <strong>Dr. Enrique Ruelas Barajas <br/>
            <span class="opacity-70 font-bold">Primer Latinoamericano miembro de la Sociedad Internacional de Calidad de Atención a la Salud</span></strong>

            <br/>
            <br/>
            <br/>

            <span class="font-semibold text-lg opacity-90">20:30 - 21:00 hrs.</span> 
            <span class="opacity-70 font-bold text-xl">COCTEL DE BIENVENIDA</span><br/>
            <br/>
            <br/>

          </p>
          </div>
        </div>
        <div id="Jueves-17" class="grid grid-cols-1 md:grid-cols-2 mt-5 md:mt-0">
          <div class="col-start-2 shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)]">
          <h2 class="text-2xl text-center font-bold font-sans">Jueves 17 de noviembre 2022</h2>
            <p class="w-[95%] m-auto">
              <br/>
              <span class="font-semibold text-lg opacity-90">9:00 - 9:30 hrs.</span> <br/>
              ● La importancia de las Instituciones de Asistencia Privada. <br/>
              <strong> Dr. José Luis Solís Dávila <br/>
              <span class="opacity-70 font-bold">Presidente ASOCIACIÓN DE HOSPITALES PARTICULARES DE
              JALISCO A.C</span></strong>

              <br/>
              <br/>
              <br/>

              <span class="font-semibold text-lg opacity-90">9:30 - 10:00 hrs.</span> <br/>
              ● El arbitraje médico en el entorno nacional. <br/>
              <strong>Dra. En Derecho Rosa María Díaz López <br/>
              <span class="opacity-70 font-bold">Comisionada de Arbitraje Médico del Estado de Nuevo León
              (COESAMED)</span></strong>

              <br/>
              <br/>
              <br/>

              <span class="font-semibold text-lg opacity-90">10:00 - 10:30 hrs.</span> <br/>
              ● Rompiendo barreras para la igualdad y el goce de los derechos a la salud. <br/>
                <strong> Dra. Sofía Dumois Petersen <br/>
                <span class="opacity-70 font-bold">Dirección de Inclusión a personas con discapacidad</span></strong>
              
              <br/>
              <br/>
              <br/>

              <span class="font-semibold text-lg opacity-90">10:30 - 11:30 hrs.</span> <span class="opacity-70 font-bold">CONFERENCIA MAGISTRAL.</span><br/>
              ● Iniciativas con perspectiva de género para el fortalecimiento de la Calidad en los Servicios de Salud. <br/>
              <strong>Dra. Nadine Flora Gasman Zylbermann <br/>
              <span class="opacity-70 font-bold">Presidenta del Instituto para las mujeres INMUJERES</span></strong>

              <br/>
              <br/>
              <br/>

              <span class="font-semibold text-lg opacity-90">11:30 hrs.</span> <span class="opacity-70 font-bold font-bold text-xl">CLAUSURA DEL SIMPOSIO</span><br/>

              <br/>
              <br/>
              <br/>


              <span class="font-semibold text-lg opacity-90">12:00 - 16:00  hrs.</span> 
              <span class="opacity-70 font-bold text-xl">TALLER del Consejo Mexicano de Arbitraje Médico CMAM</span><br/>

              <br/>
              <br/>
              <br/>

              <span class="font-semibold text-lg opacity-90">16:10 hrs.</span> 
              <span class="opacity-70 font-bold text-xl">COMIDA</span>
              
              <br/>
              <br/>
              <br/>

              <p class="text-center">
              <strong>AUTORIDADES COMISIONADOS Y COMITÉ ORGANIZADOR</strong><br>
              <span class="text-lg opacity-80">“Cortijo los Fernandez”</span>

              </p>
            </p>
          </div>
        </div>

        <div id="Viernes-18" class="grid grid-cols-1 md:grid-cols-2 mt-5 md:mt-0">
          <div class="col-start-1 shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)]">
            <h2 class="text-2xl text-center font-bold font-sans">Viernes 18 de noviembre 2022</h2>
            <p class="w-[95%] m-auto">
              <br/>
              <span class="font-semibold text-lg opacity-90">8:00 - 14:00hrs hrs.</span> 
              <span class="opacity-70 font-bold text-xl">SESIÓN DE CONSEJO CMAM</span>

              <br/>
              <br/>

              <span class="font-semibold text-lg opacity-90">20:00hrs hrs.</span> <span class="font-bold text-lg">Cena en el Palacio Municipal del H. Ayuntamiento de Zapopan “Palacio Municipal del Ayuntamiento de Zapopan”</span>
            </p>

            <br/>
            <br/>

            <h2 class="text-2xl text-center font-bold font-sans">Sábado 19 de noviembre 2022</h2>
            <p class="text-center">
              <strong>Actividades opcionales Visita Tlaquepaque</strong>
            </p>
          </div>
        </div>
       </div>

       <div id="Orden de pago" class="w-full mt-0 md:mt-5 grid justify-items-center shadow-[0px_2px_10px_4px_rgba(0,0,0,0.56)] pb-3 px-10">
        <h3 class="text-2xl md:text-5xl my-5 font-serif font-extrabold text-center opacity-70">Registro</h3>
        <h2 class="text-lg md:text-2xl font-serif font-extrabold text-center opacity-90">A continuación haz click en el siguiente boton y realiza el pago correspondiente dicho en el archivo que se descargara</h2>
        <a class="my-5 w-full md:w-1/4  bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded grid justify-center" href="./imagenes/OrdenDePago.png" download>Descargar orden de pago</a>
        <p class="text-lg md:text-xl font-serif font-extrabold text-center opacity-90">Seguido volveras para rellenar el formulario que se presenta en la parte baja, donde colocaras tus datos y subiras la imagen del boucher de pago</p>

        <br/>
        <br/>
        <div id="formulario">
          <form>
            <div class="relative z-0 mb-6 w-full group">
                <input type="email" name="floating_email" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo</label>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
            <div class="relative z-0 mb-6 w-full group">
                  <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                  <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre/s</label>
              </div>
              <div class="relative z-0 mb-6 w-full group">
                  <input type="text" name="floating_last_name" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required="">
                  <label for="floating_last_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Apellidos</label>
              </div>
            </div>
            <div class="grid md:grid-cols-2 md:gap-6">
              <div class="relative z-0 mb-6 w-full group">
                  <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" name="floating_phone" id="floating_phone" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                  <label for="floating_phone" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Numero celular</label>
              </div>
              <label class="text-gray-500 text-lg dark:text-gray-400">Imagen del boucher <br/>
              <input type="file" class="w-1/2 md:w-full" name="Imagen" accept="image/png, image/jpeg" />
            </label>
            </div>
            <button type="submit" class="mt-3 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Registarse</button>
          </form>

        </div>
       </div>
       <script src="https://unpkg.com/flowbite@1.5.2/dist/flowbite.js"></script>
    </body>
</html>
