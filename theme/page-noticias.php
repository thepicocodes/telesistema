<?php

/**
 *
 * Template Name: Noticias Page
 *
 * @package telesistema
 */
get_header();
?>

<!--  -->
<?php get_template_part('template-parts/content/radio-overlay', 'radio-overlay'); ?>
<!--  -->

<div class="w-full max-w-[1350px] grid grid-cols-1 xl:grid-cols-[160px_960px_160px] gap-y-5 gap-x-5 justify-items-center mt-8 mx-auto px-5">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="mb-5 hidden h-40 w-full bg-[#F1F3F7] p-3 md:block xl:h-[274px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>

    <section>
      <div class="flex items-center justify-between">
        <h5 class="text-xl-b lg:text-h5 text-blue-telesistema">Noticias</h5>
      </div>

      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-5">
        <a href="#" class="relative block w-full min-h-[300px] bg-white">
          <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-14.png" alt="" class="absolute top-0 left-0 w-full h-full">
            <div class="rounded-lg h-full relative z-[1] p-5 lg:p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
              <p class="mt-2 text-m-b lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="flex flex-col gap-5">
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
    </section>

    <section class="mt-10">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">

        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-blue-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-blue-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-blue-50">
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


    <section>
      <div class="mt-5 grid grid-cols-1 lg:grid-cols-[620px_320px] gap-8">
        <div class="flex flex-col gap-y-5">

          <a href="">
            <article class="w-full lg:h-[250px]">
              <div class="w-full h-max grid lg:grid-cols-[300px_1fr]">
                <div class="relative">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none lg:rounded-tr-none lg:rounded-tl-lg lg:rounded-bl-lg w-full min-h-[256px] max-h-[300px] object-cover">
                  <div class="absolute top-5 right-5 z-10">
                    <span class="rounded-full w-8 h-8 flex items-center justify-center bg-blue-50">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-[#D9D9D9]" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="rounded-bl-lg rounded-br-lg lg:rounded-bl-none lg:rounded-tr-lg lg:rounded-br-lg border w-full flex flex-col justify-between py-4 px-2 lg:px-4">
                  <div>
                    <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
                    <p class="mt-2 text-body-b lg:text-m-b text-blueLight-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  </div>
                  <div class="text-xs text-gray-700">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </div>
            </article>
          </a>

          <a href="">
            <article class="w-full lg:h-[250px]">
              <div class="w-full h-max grid lg:grid-cols-[1fr_300px]">
                <div class="order-2 lg:order-1 rounded-bl-lg rounded-br-lg lg:rounded-bl-lg lg:rounded-tl-lg lg:rounded-tr-none lg:rounded-br-none border w-full flex flex-col justify-between py-4 px-2 lg:px-4">
                  <div>
                    <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
                    <p class="mt-2 text-body-b lg:text-m-b text-blueLight-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  </div>
                  <div class="text-xs text-gray-700">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
                <div class="relative order-1 lg:order-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none lg:rounded-tr-lg lg:rounded-br-lg lg:rounded-tl-none lg:rounded-bl-none w-full min-h-[256px] max-h-[300px] object-cover">
                  <div class="absolute top-5 right-5 z-10">
                    <span class="rounded-full w-8 h-8 flex items-center justify-center bg-blue-50">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-[#D9D9D9]" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </article>
          </a>

          <a href="">
            <article class="w-full lg:h-[250px]">
              <div class="w-full h-max grid lg:grid-cols-[300px_1fr]">
                <div class="relative">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none lg:rounded-tr-none lg:rounded-tl-lg lg:rounded-bl-lg w-full min-h-[256px] max-h-[300px] object-cover">
                  <div class="absolute top-5 right-5 z-10">
                    <span class="rounded-full w-8 h-8 flex items-center justify-center bg-blue-50">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-[#D9D9D9]" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                </div>
                <div class="rounded-bl-lg rounded-br-lg lg:rounded-bl-none lg:rounded-tr-lg lg:rounded-br-lg border w-full flex flex-col justify-between py-4 px-2 lg:px-4">
                  <div>
                    <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
                    <p class="mt-2 text-body-b lg:text-m-b text-blueLight-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  </div>
                  <div class="text-xs text-gray-700">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
              </div>
            </article>
          </a>

          <a href="">
            <article class="w-full lg:h-[250px]">
              <div class="w-full h-max grid lg:grid-cols-[1fr_300px]">
                <div class="order-2 lg:order-1 rounded-bl-lg rounded-br-lg lg:rounded-bl-lg lg:rounded-tl-lg lg:rounded-tr-none lg:rounded-br-none border w-full flex flex-col justify-between py-4 px-2 lg:px-4">
                  <div>
                    <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
                    <p class="mt-2 text-body-b lg:text-m-b text-blueLight-900">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
                  </div>
                  <div class="text-xs text-gray-700">
                    Victor Santana • 08/04/2024 14:51
                  </div>
                </div>
                <div class="relative order-1 lg:order-2">
                  <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-tl-lg rounded-tr-lg rounded-bl-none rounded-br-none lg:rounded-tr-lg lg:rounded-br-lg lg:rounded-tl-none lg:rounded-bl-none w-full min-h-[256px] max-h-[300px] object-cover">
                  <div class="absolute top-5 right-5 z-10">
                    <span class="rounded-full w-8 h-8 flex items-center justify-center bg-blue-50">
                      <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-[#D9D9D9]" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80L0 432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                      </svg>
                    </span>
                  </div>
                </div>
              </div>
            </article>
          </a>

        </div>
        <div>
          <div class="rounded-lg w-full min-h-[250px] p-3 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>

          <div class="rounded-lg w-full min-h-[250px] mt-8 p-3 bg-[#F1F3F7]">
            <div class="w-full h-full bg-[#D6CCFF]"></div>
          </div>

          <div class="mt-8 flex flex-col gap-5">
            <h3 class="text-m-b text-blue-900">Más visto</h3>

            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <div class="p-4">
                  <p class="text-xs-b text-blue-50">farandula</p>
                  <p class="text-body-b w-full mt-1 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>

            <a href="/">
              <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
                <div class="p-4">
                  <p class="text-xs-b text-blue-50">farandula</p>
                  <p class="text-body-b w-full mt-1 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>
                </div>

                <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
              </article>
            </a>
          </div>

          <div class="mt-4">
            <h3 class="text-m-b text-blue-900">Siguenos</h3>
            <ul class="mt-2 flex flex-wrap items-center gap-5">
              <li>
                <a href="" class="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-1000" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64h98.2V334.2H109.4V256h52.8V222.3c0-87.1 39.4-127.5 125-127.5c16.2 0 44.2 3.2 55.7 6.4V172c-6-.6-16.5-1-29.6-1c-42 0-58.2 15.9-58.2 57.2V256h83.6l-14.4 78.2H255V480H384c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-1000" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-1000" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M459.4 151.7c.3 4.5 .3 9.1 .3 13.6 0 138.7-105.6 298.6-298.6 298.6-59.5 0-114.7-17.2-161.1-47.1 8.4 1 16.6 1.3 25.3 1.3 49.1 0 94.2-16.6 130.3-44.8-46.1-1-84.8-31.2-98.1-72.8 6.5 1 13 1.6 19.8 1.6 9.4 0 18.8-1.3 27.6-3.6-48.1-9.7-84.1-52-84.1-103v-1.3c14 7.8 30.2 12.7 47.4 13.3-28.3-18.8-46.8-51-46.8-87.4 0-19.5 5.2-37.4 14.3-53 51.7 63.7 129.3 105.3 216.4 109.8-1.6-7.8-2.6-15.9-2.6-24 0-57.8 46.8-104.9 104.9-104.9 30.2 0 57.5 12.7 76.7 33.1 23.7-4.5 46.5-13.3 66.6-25.3-7.8 24.4-24.4 44.8-46.1 57.8 21.1-2.3 41.6-8.1 60.4-16.2-14.3 20.8-32.2 39.3-52.6 54.3z" />
                  </svg>
                </a>
              </li>
              <li>
                <a href="">
                  <svg xmlns="http://www.w3.org/2000/svg" class="h-8 fill-blue-1000" viewBox="0 0 576 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                    <path d="M549.7 124.1c-6.3-23.7-24.8-42.3-48.3-48.6C458.8 64 288 64 288 64S117.2 64 74.6 75.5c-23.5 6.3-42 24.9-48.3 48.6-11.4 42.9-11.4 132.3-11.4 132.3s0 89.4 11.4 132.3c6.3 23.7 24.8 41.5 48.3 47.8C117.2 448 288 448 288 448s170.8 0 213.4-11.5c23.5-6.3 42-24.2 48.3-47.8 11.4-42.9 11.4-132.3 11.4-132.3s0-89.4-11.4-132.3zm-317.5 213.5V175.2l142.7 81.2-142.7 81.2z" />
                  </svg>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    <!-- add banner -->
    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>


    <section>
      <div class="mt-5 grid grid-cols-1 md:grid-cols-[1fr_300px] gap-5">
        <a href="#" class="relative block w-full min-h-[300px] bg-white">
          <article class="relative w-full h-full bg-gradient-to-t from-overlay-100 to-overlay-0">
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="absolute top-0 left-0 w-full h-full ">
            <div class="rounded-lg h-full relative z-[1] p-5 lg:p-10 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
              <p class="mt-2 text-m-b lg:text-h4">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="flex flex-col gap-5">
          <a href="#" class="relative block w-full h-full bg-white">
            <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
              <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
                <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-blue-50">
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

          <a href="/">
            <article class="grid max-h-[140px] min-h-[140px] w-full grid-cols-[1fr_120px] overflow-hidden rounded-md border">
              <p class="text-body-b w-full p-4 text-gray-100">Son una forma emocionante de poner a prueba el cuerpo y la mente</p>

              <img src="<?php echo get_template_directory_uri(); ?>/images/img-02.png" alt="" class="image h-[140px] w-[120px]">
            </article>
          </a>
        </div>
      </div>
    </section>

    <section class="mt-10">
      <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-x-5 gap-y-5">

        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-blue-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <a href="#" class="relative block w-full h-full bg-white">
          <article class="relative w-full h-[300px] bg-gradient-to-t from-overlay-100 to-overlay-0">
            <div class="py-2 px-4 absolute top-2.5 right-2.5 z-[2] ">
              <span class="drop-shadow-md rounded-full w-[34px] h-[34px] flex items-center justify-center bg-blue-50">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-2 fill-white" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                  <path d="M73 39c-14.8-9.1-33.4-9.4-48.5-.9S0 62.6 0 80V432c0 17.4 9.4 33.4 24.5 41.9s33.7 8.1 48.5-.9L361 297c14.3-8.7 23-24.2 23-41s-8.7-32.2-23-41L73 39z" />
                </svg>
              </span>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/images/img-01.png" alt="" class="rounded-lg absolute top-0 left-0 w-full h-full object-cover">
            <div class="rounded-lg h-full relative z-[1] p-4 flex flex-col justify-end text-white bg-gradient-to-t from-overlay-100 to-overlay-0">
              <span class="rounded-lg inline-block w-fit py-1 px-2 bg-blue-50 text-blue-100 text-xs-b">Farándula</span>
              <p class="mt-2 text-m-b">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
              <div class="mt-2 text-xs text-lightBlue-100">
                Victor Santana • 08/04/2024 14:51
              </div>
            </div>
          </article>
        </a>

        <div class="flex flex-col gap-5">
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
    </section>

    <!-- add banner -->
    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
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

    <!-- add banner -->
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
</div>

<?php
get_footer();
