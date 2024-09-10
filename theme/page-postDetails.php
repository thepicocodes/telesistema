<?php

/**
 *
 * Template Name: Post Details Page
 *
 * @package telesistema
 */
get_header();
?>


<div class="w-full max-w-[1354px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] justify-items-center gap-y-5 gap-x-5 mt-8 mx-auto px-5">
  <div class="hidden xl:block order-1 w-full xl:max-w-40 h-40 xl:h-[600px] bg-[#D6CCFF]"></div>
  <div class="hidden xl:block order-3 w-full xl:max-w-40 h-40 xl:h-[600px] mb-5 bg-[#D6CCFF]"></div>
  <!--  -->
  <section class="order-2 w-full max-w-5xl">
    <!-- ad -->
    <div class="w-full max-w-[994px] h-[274px] mx-auto px-3 py-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <div class="mt-8">
      <h5 class="text-xl-b lg:text-h5 text-blue-telesistema">Noticias</h5>
      <h1 class="text-xl-b md:text-h1 mt-1 text-gray-100">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</h1>

      <div class="mt-2 text-p text-[#6A6A6A]">
        <p class="text-m ">
          Las autoridades de Palmira y la Policía Nacional llevan a
          cabo procedimientos especiales para el partido de este viernes
          en Palmaseca.
        </p>
      </div>
      <div class="border-t border-b border-[#E2E2E2] mt-2 py-4 px-0 md:px-4 flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="text-s text-[#8F8F8F]">
          Victor Santana • 08/04/2024 14:51
        </div>
        <div class="flex flex-row items-center gap-4">
          <span class="text-s md:text-body">compartir en:</span>
          <ul class="flex items-center gap-x-5">
            <li>
              <a href="" class="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-telesistema" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                </svg>
              </a>
            </li>
            <li>
              <a href="">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-telesistema" viewBox="0 0 512 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z" />
                </svg>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="mt-10 grid md:grid-cols-[1fr_300px] gap-y-5 gap-x-8">
        <div>
          <img src="<?php echo get_template_directory_uri(); ?>/images/img-14.png" alt="Post thumbnail" class="rounded-lg block w-full max-w-[630px] h-[630px] object-cover">
          <p class="mt-8 text-body text-[#6A6A6A] leading-[24px]">
            En medio de distintas realidades, Deportivo Cali y América protagonizarán una nueva edición del clásico vallecaucano. El Verde, que atraviesa una crisis deportiva que lo complica con el descenso, recibe al equipo de César Farías, que por el contrario dejó atrás la mala racha y encadenó una serie de resultados positivos que lo tiene en la pelea por clasificar a cuadrangulares de la Liga BetPlay.
            <br> <br>
            El derbi se jugará este viernes 12 de abril desde las 8:15 p.m., en Palmaseca. A dos días del enfrentamiento, las autoridades inician un plan de procedimientos especiales para garantizar la seguridad, así lo dio a conocer José Alberto Ortiz, periodista de Caracol Radio, quien detalló las medidas adoptadas por el municipio de Palmira y la Policía Nacional de cara al clásico.
            <br> <br>
            Entre las acciones que se llevarán a cabo destacan las reuniones con los representantes de las diferentes barras para garantizar el buen desarrollo del partido. También se reforzará el dispositivo de seguridad en tribunas que han sido sancionadas recientemente por malos comportamientos.
            <br> <br>
            Por otro lado, Caracol Radio señaló que “la Policía anunció que está preparada con mil uniformados para el clásico de fútbol de este viernes 12 de abril, en el estadio Palmaseca en Palmira, entre el Deportivo Cali y el América, para garantizar a los asistentes una fiesta del fútbol en paz y sana convivencia”.
          </p>
        </div>

        <div>
          <h3 class="text-xl font-extrabold text-orange-InfTeleantillas">Más visto</h3>
          <div class="mt-5 grid grid-rows-3 grid-cols-1 gap-y-4">
            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>
            <!-- -->
            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>
            <!--  -->
            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>
          </div>
          <div class="rounded-lg w-full max-w-[752px] h-[600px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>
        </div>
      </div>

      <!-- grid row -->
      <div class="w-full mx-auto mt-10">
        <h5 class="text-h5 text-orange-InfTeleantillas">Noticias relacionadas</h5>

        <div class="mt-5 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>

            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>
          </div>
          <!--  -->
          <div class="rounded-md w-full h-[300px] py-5 px-2.5 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>
          <!--  -->
          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>

            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>
          </div>
        </div>
      </div>
      <!-- Grid row -->
      <div class="w-full mx-auto mt-5">
        <div class="mt-5 grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
          <!--  -->
          <div class="mt-4 md:mt-0 grid gap-x-2 gap-y-4">
            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>

            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>
          </div>
          <!--  -->
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <a href="#" class="relative block w-full h-full bg-white">
              <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
              <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
                <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                <div class="mt-2 text-xs text-lightBlue-100">
                  Victor Santana • 08/04/2024 14:51
                </div>
              </div>
            </a>
          </article>
        </div>
      </div>

      <div class="w-full max-w-[752px] h-[114px] mt-10 mb-5 mx-auto p-3 bg-[#F1F3F7]">
        <div class="w-full h-full bg-[#D6CCFF]"></div>
      </div>

      <section class="mt-10">
        <h3 class="text-xl-b lg:text-h5 text-blue-telesistema">Clima</h3>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5 mt-4">
          <div class="w-full max-w-[300px]">
            <div class="rounded-lg p-4 bg-blue-100">
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

            <div class="rounded-lg mt-2 py-2 px-4 bg-blue-100">
              <div class="flex flex-row items-center gap-x-2">
                <h4 class="text-body-b text-blue-900">Samana</h4>
                <div class="mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
                </div>
                <div class="">
                  <p class="text-m-b">28° C</p>
                  <p>Muy nuboso</p>
                </div>
              </div>
            </div>

            <div class="rounded-lg mt-2 py-2 px-4 bg-blue-100">
              <div class="flex flex-row items-center gap-x-2">
                <h4 class="text-body-b text-blue-900">Samana</h4>
                <div class="mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
                </div>
                <div class="">
                  <p class="text-m-b">28° C</p>
                  <p>Muy nuboso</p>
                </div>
              </div>
            </div>

            <div class="rounded-lg mt-2 py-2 px-4 bg-blue-100">
              <div class="flex flex-row items-center gap-x-2">
                <h4 class="text-body-b text-blue-900">Samana</h4>
                <div class="mx-auto">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/cloud.png" alt="US Flag" class="h-full">
                </div>
                <div class="">
                  <p class="text-m-b">28° C</p>
                  <p>Muy nuboso</p>
                </div>
              </div>
            </div>
          </div>
          <div class="flex flex-col gap-5">
            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>

            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>
            <a href="/">
              <article class="rounded-md border w-full grid grid-cols-[60%_40%] overflow-hidden min-h-[140px] max-h-[140px]">
                <div class="content">
                  <div class="w-full p-4">
                    <p class="lg:w-[16ch] text-body-b text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                  </div>
                </div>
                <div class="image w-40% overflow-hidden relative">
                  <div class="h-full">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="w-full h-[140px]">
                  </div>
                </div>
              </article>
            </a>
          </div>
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
        </div>
      </section>

      <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
        <div class="w-full h-full bg-[#D6CCFF]"></div>
      </div>

      <section class="mt-10">
        <h3 class="text-h5 text-gray-100">Horóscopo del día</h3>

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

  </section>
</div>


<?php
get_footer();
