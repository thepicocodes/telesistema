<?php

/**
 *
 * Template Name: VacanteDetails Page
 *
 * @package telesistema
 */
get_header();
?>

<div class="w-full max-w-[1354px] grid grid-cols-1 xl:grid-cols-[160px_1fr_160px] justify-items-center gap-y-5 gap-x-5 mt-24 mx-auto px-5">
  <div class="xl:max-w-40 order-1 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>
  <div class="xl:max-w-40 order-3 mb-5 hidden h-40 w-full bg-[#D6CCFF] xl:block xl:h-[600px]"></div>

  <div class="order-2 w-full max-w-5xl">
    <div class="mb-5 hidden h-40 w-full bg-[#F1F3F7] p-3 md:block xl:h-[274px]">
      <div class="h-full w-full bg-[#D6CCFF]"></div>
    </div>
    <!--  -->
    <section class="mt-8">
      <img src="<?php echo get_template_directory_uri(); ?>/images/img-15.png" alt="" class="rounded-lg block w-full max-w-[200px] h-[200px]">
      <div class="mt-6 flex flex-col lg:flex-row items-center gap-5">
        <div class="w-full text-[#333333]">
          <h4 class="text-xl-b">Departamento</h4>
          <p>Audiovisual</p>
        </div>
        <div class="w-full text-[#333333]">
          <h4 class="text-xl-b">Departamento</h4>
          <p>Audiovisual</p>
        </div>
      </div>

      <div class="mt-6">
        <h4 class="text-xl-b">Descripción de la posición</h4>
        <p>
          Worem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu turpis molestie, dictum est a, mattis tellus. Sed dignissim, metus nec fringilla accumsan, risus sem sollicitudin lacus, ut interdum tellus elit sed risus. Maecenas eget condimentum velit, sit amet feugiat lectus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Praesent auctor purus luctus enim egestas, ac scelerisque ante pulvinar. Donec ut rhoncus ex. Suspendisse ac rhoncus nisl, eu tempor urna. Curabitur vel bibendum lorem. Morbi convallis convallis diam sit amet lacinia. Aliquam in elementum tellus.
          Curabitur tempor quis eros tempus lacinia. Nam bibendum pellentesque quam a convallis. Sed ut vulputate nisi. Integer in felis sed leo vestibulum venenatis. Suspendisse quis arcu sem. Aenean feugiat ex eu vestibulum vestibulum. Morbi a eleifend magna. Nam metus lacus, porttitor eu mauris a, blandit ultrices nibh. Mauris sit amet magna non ligula vestibulum eleifend. Nulla varius volutpat turpis sed lacinia. Nam eget mi in purus lobortis eleifend. Sed nec ante dictum sem condimentum ullamcorper quis venenatis nisi. Proin vitae facilisis nisi, ac posuere leo.
        </p>
      </div>

      <div class="mt-10">
        <button type="submit" class="rounded-lg inline-flex items-center gap-x-2 px-8 py-4 text-center text-m-b lg:text-xl-b text-white drop-shadow-lg bg-blue-telesistema">
          Aplicar
          <svg xmlns="http://www.w3.org/2000/svg" class="h-6 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
            <path d="M438.6 278.6c12.5-12.5 12.5-32.8 0-45.3l-160-160c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L338.8 224 32 224c-17.7 0-32 14.3-32 32s14.3 32 32 32l306.7 0L233.4 393.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0l160-160z" />
          </svg>
        </button>
      </div>
    </section>
    <div class="w-full max-w-[752px] h-40 xl:h-[114px] mt-10 mx-auto p-3 bg-[#F1F3F7]">
      <div class="w-full h-full bg-[#D6CCFF]"></div>
    </div>
  </div>
</div>


<?php
get_footer();
