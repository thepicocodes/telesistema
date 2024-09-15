<?php

/**
 *
 * Template Name: ProgramaDetalle Page
 *
 * @package telesistema
 */
get_header();
?>

<!--  -->
<?php get_template_part('template-parts/content/radio-overlay', 'radio-overlay'); ?>
<!--  -->

<div class="w-full max-w-[1350px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] gap-y-5 gap-x-5 justify-items-center mt-8 mx-auto px-5">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="mb-5 hidden h-40 w-full bg-[#F1F3F7] p-3 md:block xl:h-[274px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>

    <section class="shadow-md rounded-lg border grid lg:grid-cols-[500px_1fr] gap-6 p-6">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img-08.png" alt="" class="rounded-lg w-full ">
      <div>
        <h5 class="text-xl-b lg:text-h5 text-lightBlue-900">Telenoticias estelar</h5>
        <p class="mt-2 text-m">
          Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por La Nota
          Diferente 95.7FM y para Estados Unidos por TV QUISQUEY
        </p>
        <div class="mt-4">
          <span class="text-m-b text-lightBlue-900">Presentado por:</span>
          <div class="mt-2 flex flex-row gap-2">
            <span class="rounded-lg py-1 px-2 text-s-b text-white bg-orange-telesistema">Roberto Cavada</span>
          </div>
        </div>
      </div>
    </section>

    <!-- add banner -->
    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mx-auto mt-10">
      <div class="">
        <div class="flex justify-between items-center">
          <h2 class="text-lg lg:text-h5 text-blue-telesistema">Usted tiene la palabra</h2>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper swiper6">
            <div class="swiper-wrapper">
              <a href="" class="swiper-slide !h-[300px] overflow-hidden rounded-lg bg-white shadow-lg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Slide 1" class="relative !h-full w-full">
                <div class="absolute bottom-4 w-full bg-transparent p-4 text-white">
                  <h3 class="text-m-b w-[20ch]">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h3>
                  <p class="mt-2 text-xs">Lunes &#x2022; 08/04/2024</p>
                </div>
              </a>

              <a href="" class="swiper-slide !h-[300px] overflow-hidden rounded-lg bg-white shadow-lg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Slide 1" class="relative !h-full w-full">
                <div class="absolute bottom-4 w-full bg-transparent p-4 text-white">
                  <h3 class="text-m-b w-[20ch]">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h3>
                  <p class="mt-2 text-xs">Lunes &#x2022; 08/04/2024</p>
                </div>
              </a>
              <a href="" class="swiper-slide !h-[300px] overflow-hidden rounded-lg bg-white shadow-lg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Slide 1" class="relative !h-full w-full">
                <div class="absolute bottom-4 w-full bg-transparent p-4 text-white">
                  <h3 class="text-m-b w-[20ch]">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h3>
                  <p class="mt-2 text-xs">Lunes &#x2022; 08/04/2024</p>
                </div>
              </a>
              <a href="" class="swiper-slide !h-[300px] overflow-hidden rounded-lg bg-white shadow-lg">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="Slide 1" class="relative !h-full w-full">
                <div class="absolute bottom-4 w-full bg-transparent p-4 text-white">
                  <h3 class="text-m-b w-[20ch]">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h3>
                  <p class="mt-2 text-xs">Lunes &#x2022; 08/04/2024</p>
                </div>
              </a>
            </div>


          </div>

          <div class="absolute home-swiper-prev-6 rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next-6 rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>


    <!-- add banner -->
    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <div class="flex flex-row items-center justify-between">
        <h5 class="text-h5 md:text-h5 text-blue-telesistema">Lista de episodios</h5>
        <div class="px-2.5 lg:px-0">
          <div class="relative">
            <input type="search" placeholder="¿Qué andas buscando?" class="border border-gray-1000 rounded-lg w-full md:w-[320px] px-3.5 py-3.5 placeholder:text-gray-200 text-s outline-none">
            <svg xmlns="http://www.w3.org/2000/svg" id="search-icon" class="absolute top-2/4 right-3.5 -translate-y-2/4 h-4 fill-blue-900" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
            </svg>
          </div>
        </div>
      </div>
      <div class="mt-4 grid grid-cols-1 md:grid-cols-[1fr_320px] gap-6">
        <div class="flex flex-col gap-y-6">
          <div class="rounded-lg border border-blue-100">
            <div class="grid md:grid-cols-[300px_1fr] gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-12.png" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px] h-full">
              <div class="p-4 md:pl-0 flex flex-col justify-between text-lightBlue-900">
                <div>
                  <h4 class="text-m-b text-blue-900">Episodio #53</h4>
                  <p class="mt-2 text-body">
                    Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                    La Nota Diferente 95.7FM y para Estados Unidos por TV
                    QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                    Angelo Mercedez . #RepublicaDominicana #Noticias
                  </p>
                </div>
                <div class="flex flex-row items-center gap-x-3.5">
                  <span class="rounded-full w-10 h-10 flex items-center justify-center bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                  <div class="text-xs">
                    14:51 - 08/04/2024
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="rounded-lg border border-blue-100">
            <div class="grid md:grid-cols-[300px_1fr] gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-12.png" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px] h-full">
              <div class="p-4 md:pl-0 flex flex-col justify-between text-lightBlue-900">
                <div>
                  <h4 class="text-m-b text-blue-900">Episodio #53</h4>
                  <p class="mt-2 text-body">
                    Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                    La Nota Diferente 95.7FM y para Estados Unidos por TV
                    QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                    Angelo Mercedez . #RepublicaDominicana #Noticias
                  </p>
                </div>
                <div class="flex flex-row items-center gap-x-3.5">
                  <span class="rounded-full w-10 h-10 flex items-center justify-center bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                  <div class="text-xs">
                    14:51 - 08/04/2024
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="rounded-lg border border-blue-100">
            <div class="grid md:grid-cols-[300px_1fr] gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-12.png" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px] h-full">
              <div class="p-4 md:pl-0 flex flex-col justify-between text-lightBlue-900">
                <div>
                  <h4 class="text-m-b text-blue-900">Episodio #53</h4>
                  <p class="mt-2 text-body">
                    Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                    La Nota Diferente 95.7FM y para Estados Unidos por TV
                    QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                    Angelo Mercedez . #RepublicaDominicana #Noticias
                  </p>
                </div>
                <div class="flex flex-row items-center gap-x-3.5">
                  <span class="rounded-full w-10 h-10 flex items-center justify-center bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                  <div class="text-xs">
                    14:51 - 08/04/2024
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="rounded-lg border border-blue-100">
            <div class="grid md:grid-cols-[300px_1fr] gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-12.png" alt="" class="rounded-tl-md rounded-bl-md block w-full lg:w-[300px] h-full">
              <div class="p-4 md:pl-0 flex flex-col justify-between text-lightBlue-900">
                <div>
                  <h4 class="text-m-b text-blue-900">Episodio #53</h4>
                  <p class="mt-2 text-body">
                    Magazine de Radio y Tv - Lunes a viernes de 1PM-3PM por
                    La Nota Diferente 95.7FM y para Estados Unidos por TV
                    QUISQUEYA Anfitriones : Roberto Cavada , Miralba Ruíz y
                    Angelo Mercedez . #RepublicaDominicana #Noticias
                  </p>
                </div>
                <div class="flex flex-row items-center gap-x-3.5">
                  <span class="rounded-full w-10 h-10 flex items-center justify-center bg-blue-50">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                  <div class="text-xs">
                    14:51 - 08/04/2024
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="flex justify-center">
            <button class="rounded-lg mt-10 p-4 flex flex-row items-center justify-center gap-x-2 text-body-b lg:text-xl-b text-white bg-blue-telesistema">
              Cargar más
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 lg:h-5 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M169.4 470.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 370.8 224 64c0-17.7-14.3-32-32-32s-32 14.3-32 32l0 306.7L54.6 265.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
              </svg>
            </button>
          </div>
        </div>

        <div>
          <div class="rounded-lg w-full h-[300px] py-3 px-2.5 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>
          <div class="rounded-lg w-full h-[150px] lg:h-[600px] mt-5 bg-[#D6CCFF]"></div>

          <div class="mt-10">
            <h3 class="text-xl-b text-blue-telesistema">Clima</h3>
            <div class="rounded-lg mt-2 p-4 bg-blue-100">
              <h4 class="mb-2 text-body-b text-blue-900 text-center">The United Kingdom...</h4>
              <div class="border-t border-brown-200 flex flex-row gap-x-2 items-center pt-2">
                <div class="border-r border-brown-200 pr-6">
                  <p class="text-xl-b">28° C</p>
                  <p>Nubes dispersas</p>
                </div>
                <div class="mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
                </div>
              </div>
            </div>

            <div class="rounded-lg flex flex-row justify-between items-center mt-2 py-2 px-4 bg-blue-100">
              <div class="text-s text-blue-900">Miércoles</div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-8">
              <div class="text-s-b">
                <span class="mr-4 text-s-b text-brown-400">27° C</span>
                <span class="text-s-b text-blue-600">18° C</span>
              </div>
            </div>

            <div class="rounded-lg flex flex-row justify-between items-center mt-2 py-2 px-4 bg-blue-100">
              <div class="text-s text-blue-900">Miércoles</div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-8">
              <div class="text-s-b">
                <span class="mr-4 text-s-b text-brown-400">27° C</span>
                <span class="text-s-b text-blue-600">18° C</span>
              </div>
            </div>

            <div class="rounded-lg flex flex-row justify-between items-center mt-2 py-2 px-4 bg-blue-100">
              <div class="text-s text-blue-900">Miércoles</div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-8">
              <div class="text-s-b">
                <span class="mr-4 text-s-b text-brown-400">27° C</span>
                <span class="text-s-b text-blue-600">18° C</span>
              </div>
            </div>

            <div class="rounded-lg mt-2 p-4 bg-blue-100">
              <div class="flex flex-row items-center gap-x-2">
                <h4 class="text-body-b text-blue-900">Punta Cana</h4>
                <div class="mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
                </div>
                <div class="">
                  <p class="text-xl-b">28° C</p>
                  <p>Muy nuboso</p>
                </div>
              </div>
            </div>

            <div class="rounded-lg mt-2 p-4 bg-blue-100">
              <div class="flex flex-row items-center gap-x-2">
                <h4 class="text-body-b text-blue-900">Santiago</h4>
                <div class="mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
                </div>
                <div class="">
                  <p class="text-xl-b">28° C</p>
                  <p>Muy nuboso</p>
                </div>
              </div>
            </div>

            <div class="rounded-lg mt-2 p-4 bg-blue-100">
              <div class="flex flex-row items-center gap-x-2">
                <h4 class="text-body-b text-blue-900">Samana</h4>
                <div class="mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
                </div>
                <div class="">
                  <p class="text-xl-b">28° C</p>
                  <p>Muy nuboso</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>


    <!-- ad -->
    <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <h5 class="text-xl lg:text-h5 text-blue-telesistema">Otros Programas</h5>
      <div class="mt-10 grid md:grid-cols-3 gap-y-10 gap-x-5 justify-center md:justify-start">
        <a href="#" class="group relative block w-full h-full bg-white">
          <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
              </div>
            </div>
          </article>
        </a>
        <a href="#" class="group relative block w-full h-full bg-white">
          <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
              </div>
            </div>
          </article>
        </a>
        <a href="#" class="group relative block w-full h-full bg-white">
          <article class="relative w-full h-[480px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <h5 class="text-m-b">Freites & su gente</h5>
              <p class="mt-1 text-body">Entrevistamos a Stéphane Chaumet, autor de 'Sur les chemins perdus'.</p>
              <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1">
                Ver contenido
                <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                </svg>
              </div>
            </div>
          </article>
        </a>
      </div>
    </section>

    <!-- ad -->
    <div class="w-full max-w-[994px] h-[274px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="mt-10">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-telesistema">Noticias</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-blue-50">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>

          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>
        </div>
        <div class="relative h-[300px]">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>

          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>
        </div>
      </div>

      <div class="mt-6 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="rounded-lg w-full h-[300px] p-3 bg-[#F1F3F7]">
          <div class="w-full h-full bg-[#D6CCFF]"></div>
        </div>

        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-[#FF0000]">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>
      </div>
    </section>

  </div>
</div>

<?php
get_footer();
