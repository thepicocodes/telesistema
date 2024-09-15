<?php

/**
 * Template part for displaying the header content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package telesistema
 */

?>

<?php get_template_part('template-parts/content/radio-overlay', 'radio-overlay'); ?>

<header class="border-b py-4 px-5 bg-blue-50">
	<div class="w-full max-w-screen-xl mx-auto flex flex-row items-center justify-between xl:justify-between gap-x-2">
		<a href="" class="block shrink-0">
			<img src="<?php echo get_template_directory_uri(); ?>/images/telesistemas-logo.png"
				srcset="<?php echo get_template_directory_uri(); ?>/images/telesistemas-logo@2x.png 2x"
				alt="Logo Telesistema"
				class="block h-[57px] w-[118px]">
		</a>

		<nav id="navigation" class="hidden xl:flex w-full h-screen xl:h-auto flex-col xl:flex-row items-center xl:justify-center gap-x-1 absolute xl:static left-0 bg-white xl:bg-inherit z-50 <?php echo is_user_logged_in() ? 'top-10' : 'top-0' ?>">
			<ul id="nav-links" class="w-full h-screen md:h-auto md:w-fit flex flex-col gap-y-5 xl:flex-row xl:items-center gap-x-1 px-5 xl:px-0 text-white text-sm font-bold">
				<a id="nav-link" href="#" class="close block p-2.5 cursor-pointer self-end xl:hidden">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-10 self-end fill-black pointer" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
					</svg>
				</a>
				<li>
					<div class="relative inline-block w-full lg:w-auto text-left group">
						<div class="flex flex-row items-center justify-between gap-x-1">
							<a href="/programas" class=" px-1 py-2 text-s-b">
								Programas
							</a>
							<svg id="dropdownButton" xmlns="http://www.w3.org/2000/svg" class="h-6 lg:h-4 fill-black lg:fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
								<path d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
							</svg>
						</div>

						<div id="dropdownMenu" class="hidden group-hover:block lg:absolute static mt-0 w-full lg:w-48 lg:rounded-md lg:shadow-lg bg-transparent lg:bg-white">
							<div class="py-1">
								<a href="#" class="block px-4 py-4 lg:py-2 text-s text-black lg:border-b lg:border-[#E6E6E6]">Información y opinión</a>
								<a href="#" class="block px-4 py-4 lg:py-2 text-s text-black lg:border-b lg:border-[#E6E6E6]">Variedades</a>
								<a href="#" class="block px-4 py-4 lg:py-2 text-s text-black lg:border-b lg:border-[#E6E6E6]">Infantil-Juvenil</a>
								<a href="#" class="block px-4 py-4 lg:py-2 text-s text-black">Novelas</a>
							</div>
						</div>
					</div>
				</li>
				<li><a href="<?php echo esc_url(home_url('/Programación')); ?>" class="block w-full md:w-fit px-1 py-2 text-s-b">Programación</a></li>
				<li><a href="<?php echo esc_url(home_url('/Noticias')); ?>" class="block w-full md:w-fit px-1 py-2 text-s-b">Noticias</a></li>
				<li><a href="<?php echo esc_url(home_url('/Contacto')); ?>" class="block w-full md:w-fit px-1 py-2 text-s-b">Contacto</a></li>
				<li><a href="<?php echo esc_url(home_url('/Vacantes')); ?>" class="block w-full md:w-fit px-1 py-2 text-s-b">Vacantes</a></li>
				<li class="w-max"><a href="<?php echo esc_url(home_url('/')); ?>" class="rounded-lg inline px-2 py-1 text-s-b text-white font-lato font-bold bg-orange-telesistema">En vivo</a></li>
			</ul>
		</nav>

		<div class="flex flex-row items-center gap-x-5">
			<!-- search input -->
			<div class="absolute top-[146px] left-0 md:top-0 md:static w-full px-2.5 xl:px-0">
				<div id="input-search" class="hidden md:relative">
					<input id="search-bar" type="search" placeholder="¿Qué andas buscando?" class="border border-gray-1000 rounded-lg w-full md:w-[232px] px-3.5 py-3.5 placeholder:text-gray-200 text-s outline-none">
					<svg xmlns="http://www.w3.org/2000/svg" id="search-icon" class="absolute top-2/4 right-6 -translate-y-2/4 h-4 fill-blue-900" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
					</svg>
				</div>
			</div>
			<!--  -->
			<ul class="relative flex flex-row items-center gap-x-4">
				<!-- input toggler icon -->
				<a href="#" id="search-toggler" class="cursor-pointer">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-white" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path d="M416 208c0 45.9-14.9 88.3-40 122.7L502.6 457.4c12.5 12.5 12.5 32.8 0 45.3s-32.8 12.5-45.3 0L330.7 376c-34.4 25.2-76.8 40-122.7 40C93.1 416 0 322.9 0 208S93.1 0 208 0S416 93.1 416 208zM208 352a144 144 0 1 0 0-288 144 144 0 1 0 0 288z" />
					</svg>
				</a>
				<a href="#" id="search-close" class="hidden">
					<span class="cursor-pointer rounded-full w-6 h-6 flex items-center justify-center">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-4 fill-black" viewBox="0 0 384 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
						</svg>
					</span>
				</a>
				<li>
					<a href="#" id="newsletter" class="px-2">
						<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-white" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
							<path d="M64 112c-8.8 0-16 7.2-16 16v22.1L220.5 291.7c20.7 17 50.4 17 71.1 0L464 150.1V128c0-8.8-7.2-16-16-16H64zM48 212.2V384c0 8.8 7.2 16 16 16H448c8.8 0 16-7.2 16-16V212.2L322 328.8c-38.4 31.5-93.7 31.5-132 0L48 212.2zM0 128C0 92.7 28.7 64 64 64H448c35.3 0 64 28.7 64 64V384c0 35.3-28.7 64-64 64H64c-35.3 0-64-28.7-64-64V128z" />
						</svg>
					</a>
				</li>
				<a href="#" id="navbar-toggler" class="block xl:hidden">
					<svg xmlns="http://www.w3.org/2000/svg" class="h-5 fill-white" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path d="M0 96C0 78.3 14.3 64 32 64H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32C14.3 128 0 113.7 0 96zM0 256c0-17.7 14.3-32 32-32H416c17.7 0 32 14.3 32 32s-14.3 32-32 32H32c-17.7 0-32-14.3-32-32zM448 416c0 17.7-14.3 32-32 32H32c-17.7 0-32-14.3-32-32s14.3-32 32-32H416c17.7 0 32 14.3 32 32z" />
					</svg>
				</a>
			</ul>
		</div>
	</div>
</header>



<!-- modal box newsletter -->

<section id="newsletter-modal" class="hidden absolute top-0 w-full h-lvh bg-[#000000A3] z-50">
	<div class="h-full flex items-center justify-center">
		<div class="w-full max-w-5xl mx-auto mt-40 px-5 py-20 ">
			<div id="modal-box" class="rounded-2xl w-full max-w-5xl mt-8 py-8 px-10 relative -top-20 shadow-lg bg-white">
				<div class="flex flex-row items-center justify-between">
					<div>
						<h4 class="text-h5 lg:text-h4 text-blue-900 font-bold">Newsletter</h4>
						<p class="">Los campos marcados con (<span class="text-red-500">*</span>) son obligatorios</p>
					</div>

					<svg xmlns="http://www.w3.org/2000/svg" id="newsletter-toggler" class="h-6 fill-black cursor-pointer" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
						<path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z" />
					</svg>
				</div>
				<form action="#" method="POST" class="mt-5">
					<div class="grid grid-cols-1 gap-x-8 gap-y-6 sm:grid-cols-2">
						<div class="sm:col-span-2">
							<label for="email" class="block text-base text-blue-900">Correo:<span class="text-red-500">*</span></label>
							<div class="mt-2.5">
								<input type="email" name="email" id="email" autocomplete="email" placeholder="¿Cuál es tu correo electrónico?" class="block w-full h-[50px] rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-700 sm:text-s">
							</div>
						</div>
					</div>
					<!--  -->
					<div class="mt-5">
						<label for="date" class="block text-base text-blue-900">Fecha de nacimiento:</label>
						<div class="mt-2.5">
							<input type="date" name="date" id="date" autocomplete="email" placeholder="¿Cuál es tu correo electrónico?" class="block w-full h-[50px] rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-700 sm:text-s">
						</div>
					</div>
					<div class="mt-5">
						<p>Selecciona las noticias que más te interesan:</p>
						<div class="w-full flex items-center justify-between mt-2">
							<p class="text-m-b lg:text-xl-b text-black">El Tizón - Baseball</p>
							<label class="relative inline-flex cursor-pointer items-center">
								<input id="switch" type="checkbox" class="peer sr-only" />
								<label for="switch" class="hidden"></label>
								<div class="peer h-6 w-11 rounded-full border after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-telesistema peer-checked:after:translate-x-full"></div>
							</label>
						</div>
						<!--  -->
						<div class="w-full flex items-center justify-between mt-2">
							<p class="text-m-b lg:text-xl-b text-black">El Tizón - Basketball</p>
							<label class="relative inline-flex cursor-pointer items-center">
								<input id="switch" type="checkbox" class="peer sr-only" />
								<label for="switch" class="hidden"></label>
								<div class="peer h-6 w-11 rounded-full border after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-telesistema peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:ring-green-300"></div>
							</label>
						</div>
						<!--  -->
						<div class="w-full flex items-center justify-between mt-2">
							<p class="text-m-b lg:text-xl-b text-black">El Tizón - Football</p>
							<label class="relative inline-flex cursor-pointer items-center">
								<input id="switch" type="checkbox" class="peer sr-only" />
								<label for="switch" class="hidden"></label>
								<div class="peer h-6 w-11 rounded-full border after:absolute after:left-[2px] after:top-0.5 after:h-5 after:w-5 after:rounded-full after:border after:border-gray-300 after:bg-white after:transition-all after:content-[''] peer-checked:bg-blue-telesistema peer-checked:after:translate-x-full peer-checked:after:border-white peer-focus:ring-green-300"></div>
							</label>
						</div>
					</div>
					<div class="mt-10">
						<button type="submit" class="rounded-[40px] inline-block px-8 py-4 text-center text-base-b lg:text-xl-b text-white drop-shadow-lg bg-blue-telesistema">Suscribirme</button>
					</div>
				</form>
			</div>
			<!--  -->
		</div>
	</div>
</section>