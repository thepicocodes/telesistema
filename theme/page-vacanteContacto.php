<?php

/**
 *
 * Template Name: Vacante Contacto Page
 *
 * @package telesistema
 */
get_header();
?>

<div class="w-full max-w-[1354px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] justify-items-center gap-y-5 gap-x-5 mt-24 mx-auto px-5">
  <div class="rounded-lg hidden xl:block order-1 w-full xl:max-w-40 h-40 xl:h-[600px] bg-[#D6CCFF]"></div>
  <div class="rounded-lg hidden xl:block order-3 w-full xl:max-w-40 h-40 xl:h-[600px] mb-5 bg-[#D6CCFF]"></div>
  <!--  -->
  <div class="order-2 w-full max-w-5xl">
    <!-- ad -->
    <div class="w-full max-w-[994px] h-[274px] mx-auto px-3 py-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <div class="rounded-2xl w-full my-8 py-8 px-10 shadow-md">
      <div class="">
        <h4 class="text-xl-b lg:text-h4 text-blue-900">Hola, ¿deseas contactarnos?</h4>
        <p class="">Los campos marcados con (<span class="text-red-500">*</span>) son obligatorios</p>
      </div>
      <form action="#" method="POST" class="mt-5">
        <div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
          <div>
            <label for="first-name" class="block text-base text-blue-900">Nombre:</label>
            <div class="mt-2.5">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" placeholder="¿Cuál es tu nombre?" class="block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s">
            </div>
          </div>
          <div>
            <label for="last-name" class="block text-base text-blue-900">Apellido:</label>
            <div class="mt-2.5">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" placeholder="¿Cuál es tu apellido?" class="block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s">
            </div>
          </div>
          <div class="sm:col-span-2">
            <label for="email" class="block text-base text-blue-900">Correo:</label>
            <div class="mt-2.5">
              <input type="email" name="email" id="email" autocomplete="email" placeholder="¿Cuál es tu correo electrónico?" class="block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s">
            </div>
          </div>
          <div>
            <label for="first-name" class="block text-base text-blue-900">Perfil de LinkedIn:</label>
            <div class="mt-2.5">
              <input type="text" name="first-name" id="first-name" autocomplete="given-name" placeholder="¿Cuál es tu nombre?" class="block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s">
            </div>
          </div>
          <div>
            <label for="last-name" class="block text-base text-blue-900">Teléfono de Contacto:</label>
            <div class="mt-2.5">
              <input type="text" name="last-name" id="last-name" autocomplete="family-name" placeholder="¿Cuál es tu apellido?" class="block w-full rounded-md border-0 px-3.5 py-4 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 sm:text-s">
            </div>
          </div>
        </div>
        <div class="mt-10">
          <label for="" class="text-body text-blue-900">Sube tu Curriculum:</label>
          <button class="rounded-lg border-2 border-blue-300 w-full mt-2.5 py-4 px-10 flex flex-row items-center justify-center gap-x-2 text-body text-blue-telesistema bg-blue-100">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-blue-telesistema" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M214.6 41.4c-12.5-12.5-32.8-12.5-45.3 0l-160 160c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L160 141.2 160 448c0 17.7 14.3 32 32 32s32-14.3 32-32l0-306.7L329.4 246.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3l-160-160z" />
            </svg>
            Sube tu Curriculum:
          </button>
        </div>
        <div class="mt-10">
          <button type="submit" class="rounded-lg inline-flex items-center gap-x-2 px-8 py-4 text-center text-m-b lg:text-xl-b text-white drop-shadow-lg bg-blue-telesistema">
            Enviar
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </button>
        </div>
      </form>
    </div>

    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
  </div>
</div>


<?php
get_footer();
