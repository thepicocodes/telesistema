<?php

/**
 *
 * Template Name: Home Page
 *
 * @package telesistema
 */
get_header();
?>

<?php get_template_part('template-parts/content/radio-overlay', 'radio-overlay'); ?>

<div class="mx-auto mt-8 grid w-full max-w-[1360px] grid-cols-1 justify-items-center gap-[23px] px-5 lg:px-0 xl:grid-cols-[160px_1fr_160px]">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>

  <div class="order-2 w-full">
    <!-- Ad -->
    <div class="mb-10 mx-auto hidden h-[274px] w-full max-w-[994px] bg-[#F1F3F7] px-3 py-3 md:block">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="relative mx-auto w-full max-w-[960px] rounded-lg aspect-video">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img-03.png" alt="" class="block h-full w-full rounded-lg object-cover">

      <div class="absolute left-1/2 top-1/2 w-max -translate-x-1/2 -translate-y-1/2 transform rounded-[32px] bg-blue-50 px-6 py-1 text-white">
        <div class="flex flex-row items-center gap-x-4">
          <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
          </svg>
          <p class="text-body-b">Ver programa en vivo</p>
        </div>
      </div>
    </section>

    <!-- Ad -->
    <div class="mx-auto mt-10 h-40 w-full max-w-[752px] bg-[#F1F3F7] p-3 xl:h-[114px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="mt-5 grid grid-cols-1 gap-5 md:grid-cols-[1fr_300px]">
        <a href="#" class="relative block h-[300px] w-full bg-white lg:h-[460px]">
          <article class="from-overlay-100 to-overlay-0 relative h-full w-full bg-gradient-to-t">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full ">
            <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-5 text-white lg:p-10">
              <p class="text-m-b lg:text-h4 mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="text-lightBlue-100 mt-2 text-xs">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
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

          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>
        </div>
      </div>


      <div class="mt-10">
        <div class="grid gap-x-5 gap-y-5 md:grid-cols-2 lg:grid-cols-3">

          <div class="relative h-[300px]">
            <a href="#" class="relative block h-full w-full bg-white">
              <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
                <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                  <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-blue-50 drop-shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
                <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                  <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="text-lightBlue-100 mt-2 text-xs">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </article>
            </a>
          </div>

          <div class="relative h-[300px]">
            <a href="#" class="relative block h-full w-full bg-white">
              <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
                <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                  <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-blue-50 drop-shadow-md">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                      <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                    </svg>
                  </span>
                </div>
                <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
                <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                  <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  <div class="text-lightBlue-100 mt-2 text-xs">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </article>
            </a>
          </div>

          <div class="p-4">
            <div class="mb-4 flex items-center border-b pb-2">
              <img src="<?php echo get_template_directory_uri(); ?>/images/usd.png" alt="US Flag" class="mr-2 h-6">
              <h2 class="text-body-b font-bold">US Dólar</h2>
            </div>
            <div class="">
              <p class="text-body-b text-gray-100">Compra:<span class="font-normal text-black"> RD$ 59.80</span></p>
              <p class="text-body-b mt-1.5 text-gray-100">Venta:<span class="font-normal text-black"> RD$ 59.80</span></p>
            </div>

            <div class="mt-4 flex items-center border-b pb-2">
              <img src="<?php echo get_template_directory_uri(); ?>/images/euro.png" alt="EU Flag" class="mr-2 h-6">
              <h2 class="text-body-b font-bold">EURO</h2>
            </div>
            <div class="">
              <p class="text-body-b text-gray-100">Compra:<span class="font-normal text-black"> RD$ 59.80</span></p>
              <p class="text-body-b mt-1.5 text-gray-100">Venta:<span class="font-normal text-black"> RD$ 59.80</span></p>
            </div>
          </div>


        </div>
      </div>
    </section>

    <!-- Ad -->
    <div class="mx-auto mt-10 h-40 w-full max-w-[752px] bg-[#F1F3F7] p-3 xl:h-[114px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Información y Opinión</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-blue-50">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper">
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

          <div class="absolute home-swiper-prev rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Ad -->
    <div class="mx-auto mt-10 h-40 w-full max-w-[752px] bg-[#F1F3F7] p-3 xl:h-[114px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Avances de novelas</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-blue-50">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper">
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

          <div class="absolute home-swiper-prev rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Ad -->
    <div class="mx-auto mt-10 h-40 w-full max-w-[752px] bg-[#F1F3F7] p-3 xl:h-[114px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Variedades</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-blue-50">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper">
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

          <div class="absolute home-swiper-prev rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Ad -->
    <div class="mx-auto mt-10 h-40 w-full max-w-[752px] bg-[#F1F3F7] p-3 xl:h-[114px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Infantiles</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-blue-50">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper">
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

          <div class="absolute home-swiper-prev rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Ad -->
    <div class="mx-auto mt-10 h-40 w-full max-w-[752px] bg-[#F1F3F7] p-3 xl:h-[114px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="">
        <div class="mb-4 flex items-center justify-between">
          <h2 class="lg:text-h5 text-blue-telesistema text-xl-b">Episodios anteriores</h2>
          <a href="#" class="text-m-b flex items-center gap-x-2 text-blue-50">
            Ver más
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-50" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </a>
        </div>

        <!-- Swiper Container -->
        <div class="relative">
          <div class="swiper home-swiper">
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

          <div class="absolute home-swiper-prev rounded-full w-[60px] h-[60px] flex justify-center items-center -left-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l160 160c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 246.6 118.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-160 160z" />
            </svg>
          </div>
          <div class="absolute home-swiper-next rounded-full w-[60px] h-[60px] flex justify-center items-center -right-[16px] bg-blue-100 top-[60px] z-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-blue-telesistema" viewBox="0 0 320 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M310.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L242.7 256 73.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z" />
            </svg>
          </div>
        </div>
      </div>
    </section>

    <!-- Ad -->
    <div class="mx-auto mt-10 h-40 w-full max-w-[752px] bg-[#F1F3F7] p-3 xl:h-[114px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->

    <section class="mx-auto mt-10 max-w-[960px]">
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-telesistema">Noticias</h5>
        <a href="" class="flex items-center gap-x-2 font-bold text-blue-50">
          Ver más
          <svg xmlns="http://www.w3.org/2000/svg" class="fill-text-blue-50 h-4" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </a>
      </div>

      <div class="mt-6 grid gap-x-5 gap-y-5 md:grid-cols-2 lg:grid-cols-3">
        <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
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
          <a href="#" class="relative block h-full w-full bg-white">
            <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
              <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
                <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-[#FF0000] drop-shadow-md">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                  </svg>
                </span>
              </div>
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
              <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
                <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="text-lightBlue-100 mt-2 text-xs">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </article>
          </a>
        </div>

        <div class="mt-4 grid gap-x-2 gap-y-4 md:mt-0">
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

      <div class="mt-6 grid gap-x-5 gap-y-5 md:grid-cols-2 lg:grid-cols-3">
        <a href="#" class="relative block h-full w-full bg-white">
          <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
            <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
              <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-[#FF0000] drop-shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
            <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
              <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="text-lightBlue-100 mt-2 text-xs">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="h-[300px] w-full rounded-lg bg-[#F1F3F7] p-3">
          <div class="h-full w-full bg-[#D6CCFF]"></div>
        </div>

        <a href="#" class="relative block h-full w-full bg-white">
          <article class="from-overlay-100 to-overlay-0 relative h-[300px] w-full bg-gradient-to-t">
            <div class="absolute right-2.5 top-2.5 z-[2] px-4 py-2 ">
              <span class="flex h-[34px] w-[34px] items-center justify-center rounded-full bg-[#FF0000] drop-shadow-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute left-0 top-0 h-full w-full rounded-lg object-cover">
            <div class="from-overlay-100 to-overlay-0 relative z-[1] flex h-full flex-col justify-end rounded-lg bg-gradient-to-t p-4 text-white">
              <p class="text-m-b mt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="text-lightBlue-100 mt-2 text-xs">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>
      </div>
    </section>

    <section class="mx-auto mt-10 grid w-full max-w-[994px] grid-cols-1 gap-x-6 gap-y-16 lg:grid-cols-[650px_323px]">
      <div>
        <h3 class="lg:text-h5 text-blue-telesistema text-xl-b">Programación</h3>
        <div class="mt-4 flex flex-row items-center gap-x-4 rounded-lg border-2 border-blue-100 bg-blue-100 p-4 text-blue-900">
          <div class="flex w-full flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-04.png" alt="" class="block h-24 w-24 rounded-lg">
              <div>
                <h4 class="text-body-b">Esto no tiene nombre</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
            </div>
          </div>
        </div>
        <div class="mt-4 flex flex-row items-center gap-x-4 rounded-lg border-2 border-blue-100 bg-blue-100 p-4 text-blue-900">
          <div class="flex w-full flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-04.png" alt="" class="block h-24 w-24 rounded-lg">
              <div>
                <h4 class="text-body-b">La RepúblicaLa r</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
            </div>
          </div>
        </div>
        <div class="mt-4 flex flex-row items-center gap-x-4 rounded-lg border-2 border-blue-100 bg-blue-100 p-4 text-blue-900">
          <div class="flex w-full flex-row items-center justify-between">
            <div class="flex flex-row items-center gap-4">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-04.png" alt="" class="block h-24 w-24 rounded-lg">
              <div>
                <h4 class="text-body-b">Esto no tiene nombre</h4>
                <span class="font-normal">Locutor 1 y Locutor 2</span>
              </div>
            </div>
            <div class="mt-4 flex flex-col text-end">
              <span class="text-body-b">12:00 am - 1:00 pm</span>
            </div>
          </div>
        </div>

        <a href="#" class="text-m-b text-blue-50 mt-4 flex flex-row items-center justify-center gap-x-1">
          Ver más
          <span>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-50 h-4" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
              <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
            </svg>
          </span>
        </a>
      </div>
      <!--  -->
      <div>
        <div id="lotery-swiper" class="swiper w-full">
          <h3 class="lg:text-h5 text-blue-telesistema text-lg">Lotería</h3>
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div>
                <div>
                  <div class="mt-4 flex flex-col gap-x-2 border-b border-[#E8E8E8] pb-4">
                    <h5 class="text-body-b text-black">Juega + Pega</h5>
                    <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    </div>
                  </div>
                  <div class="mt-4 flex flex-col gap-x-2 border-b border-[#E8E8E8] pb-4">
                    <h5 class="text-body-b text-black">Gana Más</h5>
                    <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    </div>
                  </div>
                  <div class="mt-4 flex flex-col gap-x-2 border-b border-[#E8E8E8] pb-4">
                    <h5 class="text-body-b text-black">Lotería Nacional</h5>
                    <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    </div>
                  </div>
                  <div class="mt-4 flex flex-col gap-x-2 border-b border-[#E8E8E8] pb-4">
                    <h5 class="text-body-b text-black">Super Kino TV</h5>
                    <div class="mt-1.5 flex flex-row flex-wrap items-center gap-x-2.5 gap-y-2.5">
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                      <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div>
                <div class="mt-4 flex flex-col gap-x-2 border-b border-[#E8E8E8] pb-4">
                  <h5 class="text-body-b text-black">Juega + Pega</h5>
                  <div class="mt-2 flex flex-row items-center gap-x-2.5">
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                  </div>
                </div>
                <div class="mt-4 flex flex-col gap-x-2 border-b border-[#E8E8E8] pb-4">
                  <h5 class="text-body-b text-black">Gana Más</h5>
                  <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                  </div>
                </div>
                <div class="mt-4 flex flex-col gap-x-2 border-b border-[#E8E8E8] pb-4">
                  <h5 class="text-body-b text-black">Lotería Nacional</h5>
                  <div class="mt-1.5 flex flex-row items-center gap-x-2.5">
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                  </div>
                </div>
                <div class="mt-4 flex flex-col gap-x-2 border-b border-[#E8E8E8] pb-4">
                  <h5 class="text-body-b text-black">Super Kino TV</h5>
                  <div class="mt-1.5 flex flex-row flex-wrap items-center gap-x-2.5 gap-y-2.5">
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                    <span class="text-body-b flex h-[30px] w-[30px] items-center justify-center rounded-full bg-blue-50 text-white">01</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="mt-6 flex w-full justify-center">
          <div class="swiper-pagination-fraction swiper-pagination-horizontal flex !w-[114px] flex-row items-center justify-center rounded-2xl bg-[#F1F1F1] px-2 py-1">
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


    <!-- horoscopo -->
    <section class="mx-auto mt-10 max-w-[960px]">
      <h3 class="text-xl-b lg:text-h5 text-blue-telesistema">Horóscopo del día</h3>

      <div id="tarot-swiper" class="swiper mt-6">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Escorpion</span>
              <p class="text-s relative z-10 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/escorpio.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Aries</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/aries.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Tauro</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/tauro.png" alt="" class="">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Géminis</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/geminis.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Cáncer</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/cancer.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Leo</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/leo.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Virgo</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/virgo.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Libra</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/libra.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Sagitario</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/sagitario.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Capricornio</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/capricornio.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Acuario</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/acuario.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="tarot-component relative rounded-lg bg-[#F4F4F4] p-4 pb-10">
              <span class="text-xs-b rounded-[18px] bg-blue-50 px-2 py-1 text-white">Piscis</span>
              <p class="text-s relative z-20 mt-2 h-[180px] leading-[20px] text-gray-100">
                <span class="tarot-content">
                  Las redes sociales están llenas de soluciones para problemas
                  que no tenemos. O tal vez los tenemos, pero solo cuando nos
                  inundamos de información sobre cómo lidiar con ellos comenzamos a
                  preguntarnos si necesitamos tomar medidas para abordarlos.
                  ¡Las arrugas y los productos milagrosos milagrosos...
                </span>
                <button class="tarot-toggler text-xs-b self-end text-blue-50">Mostrar todo</button>
              </p>
              <div class="absolute bottom-2 right-5 z-10 mt-5 flex justify-end">
                <img src="<?php echo get_template_directory_uri(); ?>/images/piscis.png" alt="" class="opacity-30">
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="mt-6 flex w-full justify-center">
        <div class="swiper-pagination-fraction swiper-pagination-horizontal flex !w-[114px] flex-row items-center justify-center rounded-2xl bg-[#F1F1F1] px-2 py-1">
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
