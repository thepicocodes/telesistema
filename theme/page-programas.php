<?php

/**
 *
 * Template Name: Programas Page
 *
 * @package telesistema
 */
get_header();
?>

<!--  -->
<?php get_template_part('template-parts/content/radio-overlay', 'radio-overlay'); ?>
<!--  -->
<div class="py-2 bg-lightBlue-100">
  <ul id="sub-menu" class="w-full flex items-center justify-center gap-x-2 text-xs-b text-blue-900 overflow-auto no-scrollbar">
    <li><a href="<?php echo esc_url(home_url('/Todos/')); ?>" class="block px-2 py-1 hover:text-blue-1000 focus:text-blue-1000 focus:border-b focus:border-blue-1000 border-b border-b-transparent hover:border-b hover:border-blue-1000">Todos</a></li>
    <li><a href="<?php echo esc_url(home_url('/Información y opinión/')); ?>" class="block px-2 py-1 hover:text-blue-1000 focus:text-blue-1000 focus:border-b focus:border-blue-1000 border-b border-b-transparent hover:border-b hover:border-blue-1000">Información y opinión</a></li>
    <li><a href="<?php echo esc_url(home_url('/Variedades/')); ?>" class="block px-2 py-1 hover:text-blue-1000 focus:text-blue-1000 focus:border-b focus:border-blue-1000 border-b border-b-transparent hover:border-b hover:border-blue-1000">Variedades</a></li>
    <li><a href="<?php echo esc_url(home_url('/Infantil-Juvenil/')); ?>" class="block px-2 py-1 hover:text-blue-1000 focus:text-blue-1000 focus:border-b focus:border-blue-1000 border-b border-b-transparent hover:border-b hover:border-blue-1000">Infantil-Juvenil</a></li>
  </ul>
</div>
<!--  -->

<div class="w-full max-w-[1350px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] gap-y-5 gap-x-5 justify-items-center mt-8 mx-auto px-5">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="mb-5 hidden h-40 w-full bg-[#F1F3F7] p-3 md:block xl:h-[274px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>

    <div>
      <div class="flex flex-row items-center gap-x-2.5">
        <h3 class="text-xl-g lg:text-h5 text-blue-telesistema">Programas</h3>

        <div class="flex items-center gap-x-1 text-orange-telesistema">
          <div class="relative inline-block text-left dropdown bg-white">
            <button class="inline-flex items-center justify-center gap-x-1 w-full px-4 py-2 text-m-b"
              type="button" aria-haspopup="true" aria-expanded="true" aria-controls="headlessui-menu-items-117">
              <span>Todos</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-orange-telesistema" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M233.4 406.6c12.5 12.5 32.8 12.5 45.3 0l192-192c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L256 338.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l192 192z" />
              </svg>
            </button>
            <div class="hidden dropdown-menu relative z-10 bg-white">
              <div class="border border-[#E6E6E6] rounded-md absolute left-0 w-56 mt-2 origin-top-right divide-gray-100 bg-white" aria-labelledby="headlessui-menu-button-1" id="headlessui-menu-items-117" role="menu">
                <div id="filterSelect" class="">
                  <div class="border-b border-[#E6E6E6] text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5" role="menuitem">Todos</div>
                  <div class="border-b border-[#E6E6E6] text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5" role="menuitem">Información y opinión</div>
                  <div class="border-b border-[#E6E6E6] text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5" role="menuitem">Variedades</div>
                  <div class="border-b border-[#E6E6E6] text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5" role="menuitem">Infantil-Juvenil</div>
                  <div class="text-gray-700 flex justify-between w-full px-4 py-2 text-sm leading-5" role="menuitem">Novelas</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="">
      <div class="mt-10 grid lg:grid-cols-[1fr_320px] gap-x-6">
        <div>
          <!-- all -->
          <div class="section-item all grid md:grid-cols-2 mb-10 gap-y-6 gap-x-5 lg:justify-start">
            <a href="#" class="group relative block w-full h-full bg-white">
              <article class="relative w-full h-[342px] bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
                <div class="rounded-lg w-full h-full relative z-[1] p-4 flex flex-col justify-between items-center text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="rounded-full py-2 px-4 text-s font-extrabold font-lato bg-[#FF0000]">En vivo</span>
                  <div class="self-start">
                    <h5 class="text-m-b">telenoticias: Hora cero</h5>
                    <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1 font-normal">
                      ver contenido
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </article>
            </a>

            <a href="#" class="group relative block w-full h-full bg-white">
              <article class="relative w-full h-[342px] bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
                <div class="rounded-lg w-full h-full relative z-[1] p-4 flex flex-col justify-between items-center text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="rounded-full py-2 px-4 text-s font-extrabold font-lato bg-[#FF0000]">En vivo</span>
                  <div class="self-start">
                    <h5 class="text-m-b">telenoticias: Hora cero</h5>
                    <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1 font-normal">
                      ver contenido
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </article>
            </a>

            <a href="#" class="group relative block w-full h-full bg-white">
              <article class="relative w-full h-[342px] bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
                <div class="rounded-lg w-full h-full relative z-[1] p-4 flex flex-col justify-between items-center text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="rounded-full py-2 px-4 text-s font-extrabold font-lato bg-[#FF0000]">En vivo</span>
                  <div class="self-start">
                    <h5 class="text-m-b">telenoticias: Hora cero</h5>
                    <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1 font-normal">
                      ver contenido
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </article>
            </a>

            <a href="#" class="group relative block w-full h-full bg-white">
              <article class="relative w-full h-[342px] bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
                <div class="rounded-lg w-full h-full relative z-[1] p-4 flex flex-col justify-between items-center text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="rounded-full py-2 px-4 text-s font-extrabold font-lato bg-[#FF0000]">En vivo</span>
                  <div class="self-start">
                    <h5 class="text-m-b">telenoticias: Hora cero</h5>
                    <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1 font-normal">
                      ver contenido
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </article>
            </a>

            <a href="#" class="group relative block w-full h-full bg-white">
              <article class="relative w-full h-[342px] bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
                <div class="rounded-lg w-full h-full relative z-[1] p-4 flex flex-col justify-between items-center text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="rounded-full py-2 px-4 text-s font-extrabold font-lato bg-[#FF0000]">En vivo</span>
                  <div class="self-start">
                    <h5 class="text-m-b">telenoticias: Hora cero</h5>
                    <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1 font-normal">
                      ver contenido
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </article>
            </a>

            <a href="#" class="group relative block w-full h-full bg-white">
              <article class="relative w-full h-[342px] bg-gradient-to-t from-overlay-100 to-overlay-0">
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-06.png" alt="" class="absolute top-0 left-0 w-full h-full">
                <div class="rounded-lg w-full h-full relative z-[1] p-4 flex flex-col justify-between items-center text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                  <span class="rounded-full py-2 px-4 text-s font-extrabold font-lato bg-[#FF0000]">En vivo</span>
                  <div class="self-start">
                    <h5 class="text-m-b">telenoticias: Hora cero</h5>
                    <div class="opacity-0 group-hover:opacity-100 mt-4 flex flex-row items-center gap-x-1 font-normal">
                      ver contenido
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-3 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
                      </svg>
                    </div>
                  </div>
                </div>
              </article>
            </a>
          </div>
        </div>

        <div>
          <div class="w-full h-40 xl:h-[274px] mb-5 p-3 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>
          <!--  -->
          <div>
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
          <!--  -->

          <div class="mt-10">
            <div class="flex items-center border-b pb-2 mb-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/usd.png" alt="US Flag" class="h-6 mr-2">
              <h2 class="text-body-b font-bold">US Dólar</h2>
            </div>
            <div class="">
              <p class="text-body-b text-gray-100">Compra:<span class="font-normal text-black"> RD$ 59.80</span></p>
              <p class="mt-1.5 text-body-b text-gray-100">Venta:<span class="font-normal text-black"> RD$ 59.80</span></p>
            </div>

            <div class="flex items-center border-b pb-2 mt-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/euro.png" alt="EU Flag" class="h-6 mr-2">
              <h2 class="text-body-b font-bold">EURO</h2>
            </div>
            <div class="">
              <p class="text-body-b text-gray-100">Compra:<span class="font-normal text-black"> RD$ 59.80</span></p>
              <p class="mt-1.5 text-body-b text-gray-100">Venta:<span class="font-normal text-black"> RD$ 59.80</span></p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <!--  -->
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

    <!-- add banner -->
    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>

    <section class="w-full mt-10 grid grid-cols-1 lg:grid-cols-[650px_323px] gap-x-6 gap-y-16">
      <div>
        <h3 class="text-xl-b lg:text-h5 text-blue-telesistema">Programación</h3>
        <div class="rounded-lg border-2 border-blue-100 mt-4 p-4 flex flex-row items-center gap-x-4 text-blue-900 bg-blue-100">
          <div class="w-full flex flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-04.png" alt="" class="rounded-lg block w-24 h-24">
              <div>
                <h4 class="text-body-b">Esto no tiene nombre</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
              <span>Lun., Mier., Vie</span>
            </div>
          </div>
        </div>
        <div class="rounded-lg border-2 border-blue-100 mt-4 p-4 flex flex-row items-center gap-x-4 text-blue-900 bg-blue-100">
          <div class="w-full flex flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-04.png" alt="" class="rounded-lg block w-24 h-24">
              <div>
                <h4 class="text-body-b">La RepúblicaLa r</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
              <span>Lun., Mier., Vie</span>
            </div>
          </div>
        </div>
        <div class="rounded-lg border-2 border-blue-100 mt-4 p-4 flex flex-row items-center gap-x-4 text-blue-900 bg-blue-100">
          <div class="w-full flex flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-04.png" alt="" class="rounded-lg block w-24 h-24">
              <div>
                <h4 class="text-body-b">Esto no tiene nombre</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
              <span>Lun., Mier., Vie</span>
            </div>
          </div>
        </div>

      </div>
      <!--  -->
      <div>
        <div id="lotery-swiper" class="swiper w-full">
          <h3 class="text-lg lg:text-h5 text-blue-telesistema">Lotería</h3>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div>
                <div>
                  <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                    <h5 class="text-body-b text-black">Juega + Pega</h5>
                    <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    </div>
                  </div>
                  <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                    <h5 class="text-body-b text-black">Gana Más</h5>
                    <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    </div>
                  </div>
                  <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                    <h5 class="text-body-b text-black">Lotería Nacional</h5>
                    <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    </div>
                  </div>
                  <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                    <h5 class="text-body-b text-black">Super Kino TV</h5>
                    <div class="mt-1.5 flex flex-row flex-wrap items-center gap-x-2.5 gap-y-2.5">
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                      <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                  <h5 class="text-body-b text-black">Juega + Pega</h5>
                  <div class="mt-2 flex flex-row items-center gap-x-2.5">
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                  </div>
                </div>
                <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                  <h5 class="text-body-b text-black">Gana Más</h5>
                  <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                  </div>
                </div>
                <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                  <h5 class="text-body-b text-black">Lotería Nacional</h5>
                  <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                  </div>
                </div>
                <div class="border-b border-[#E8E8E8] mt-4 pb-4 flex flex-col gap-x-2">
                  <h5 class="text-body-b text-black">Super Kino TV</h5>
                  <div class="mt-1.5 flex flex-row flex-wrap items-center gap-x-2.5 gap-y-2.5">
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                    <span class="rounded-full w-[30px] h-[30px] flex items-center justify-center text-body-b text-white bg-blue-50">01</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="w-full mt-6 flex justify-center">
          <div class="rounded-2xl !w-[114px] flex flex-row items-center justify-center px-2 py-1 bg-[#F1F1F1] swiper-pagination-fraction swiper-pagination-horizontal">
            <span class="custom-swiper-button-prev">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
              </svg>
            </span>

            <div class="custom-swiper-pagination text-center">
              <span class="swiper-pagination-current"></span>
              /
              <span class="swiper-pagination-total"></span>
            </div>

            <span class="custom-swiper-button-next">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
              </svg>
            </span>
          </div>
        </div>
      </div>
    </section>

    <!-- add banner -->
    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <section class="mt-10">
      <h3 class="text-xl-b lg:text-h5 text-gray-100">Horóscopo del día</h3>

      <div id="tarot-swiper" class="swiper mt-6">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Escorpion</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-10">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5">
                <img src="<?php echo get_template_directory_uri(); ?>/images/escorpio.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Aries</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aries.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Tauro</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tauro.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Géminis</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/geminis.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Cáncer</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cancer.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Leo</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/leo.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Virgo</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/virgo.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Libra</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/libra.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Sagitario</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sagitario.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Capricornio</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/capricornio.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Acuario</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/acuario.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component rounded-lg p-4 pb-10 relative bg-[#F4F4F4]">
              <span class="rounded-[18px] py-1 px-2 text-xs-b text-white bg-blue-50">Piscis</span>
              <p class="h-[180px] mt-2 text-s leading-[20px] text-gray-100 relative z-20">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler self-end text-xs-b text-blue-50">Mostrar todo</button>
              </p>
              <div class="mt-5 flex justify-end absolute bottom-2 right-5 z-10">
                <img src="<?php echo get_template_directory_uri(); ?>/images/piscis.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="w-full mt-6 flex justify-center">
        <div class="rounded-2xl !w-[114px] flex flex-row items-center justify-center px-2 py-1 bg-[#F1F1F1] swiper-pagination-fraction swiper-pagination-horizontal">
          <span class="tarot-swiper-button-prev">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M9.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L77.3 256 246.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z" />
            </svg>
          </span>

          <div class="tarot-swiper-pagination text-center">
            <span class="swiper-pagination-current"></span>
            /
            <span class="swiper-pagination-total"></span>
          </div>

          <span class="tarot-swiper-button-next">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 320 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </span>
        </div>
      </div>
    </section>




  </div>
</div>

<?php
get_footer();
