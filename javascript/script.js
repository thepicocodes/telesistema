/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */
const navbarToggler = document.getElementById('navbar-toggler');
const closeNavBtn = document.querySelector('.close');
const nav = document.getElementById('navigation');
const navLinks = document.getElementById('nav-links');
const inputSearch = document.getElementById('input-search');
const inputSearchBar = document.getElementById('search-bar');
const searchToggler = document.getElementById('search-toggler');
const closeSearchBtn = document.getElementById('search-close');
const radioOverlay = document.getElementById('radio-overlay');
const radioOverlayToggle = document.getElementById('radio-overlay-toggler');

//close overlay radio
radioOverlayToggle.onclick = function () {
  radioOverlay.classList.add('hidden');
}

//input search funtion
searchToggler.onclick = function () {
  inputSearch.classList.add('block');
  inputSearch.classList.remove('hidden');
  searchToggler.classList.remove('block');
  searchToggler.classList.add('hidden');
  closeSearchBtn.classList.add('block');
  closeSearchBtn.classList.remove('hidden');
  inputSearchBar.focus();
};

closeSearchBtn.onclick = function () {
  inputSearch.classList.add('hidden');
  inputSearch.classList.remove('block');
  searchToggler.classList.remove('hidden');
  searchToggler.classList.add('block');
  closeSearchBtn.classList.add('hidden');
  closeSearchBtn.classList.remove('block');
};

// open nav function
navbarToggler.onclick = function (e) {
  e.preventDefault();
  nav.classList.add('block');
  nav.classList.remove('hidden');
  navLinks.classList.remove('text-white');
  navLinks.classList.add("text-black");
};
// close nav functin
closeNavBtn.onclick = function (e) {
  e.preventDefault();
  nav.classList.add('hidden');
  nav.classList.remove('block');
  navLinks.classList.remove('text-black');
  navLinks.classList.add("text-white");
};

// lotery swiper
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';
import { current } from 'tailwindcss/colors';
// init Swiper:
new Swiper("#lotery-swiper", {
  pagination: {
    el: ".custom-swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".custom-swiper-button-next",
    prevEl: ".custom-swiper-button-prev",
  },
});


const swiper = new Swiper('.mySwiper', {
  loop: true,
  spaceBetween: 20,
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
    },
    640: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
    768: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
    1024: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
    1440: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
  },
});


// tarot
new Swiper("#tarot-swiper", {
  slidesPerView: 3,
  spaceBetween: 50,
  slidesPerGroup: 3,
  pagination: {
    el: ".tarot-swiper-pagination",
    type: "fraction",
  },
  navigation: {
    nextEl: ".tarot-swiper-button-next",
    prevEl: ".tarot-swiper-button-prev",
  },
  breakpoints: {
    320: {
      slidesPerView: 1,
      slidesPerGroup: 1,
    },
    640: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
    768: {
      slidesPerView: 2,
      slidesPerGroup: 2,
    },
    1024: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
    1440: {
      slidesPerView: 3,
      slidesPerGroup: 3,
    },
  },
});

// 
//excerpt tarot
document.querySelectorAll('.tarot-component').forEach(component => {
  const tarotContainer = component.querySelector('.tarot-content');
  const tarotToggler = component.querySelector('.tarot-toggler');
  const fullText = tarotContainer.textContent.trim();

  const wordsToShow = 100;
  const words = fullText.split(' ');
  const initialText = words.slice(0, wordsToShow).join(' ');
  const hiddenText = fullText.substring(initialText.length).trim();

  tarotContainer.textContent = initialText;

  const moreText = document.createElement('span');
  moreText.className = 'moreText';
  moreText.textContent = hiddenText;
  tarotContainer.appendChild(moreText);

  const ellipsis = document.createElement('span');
  ellipsis.textContent = '...';
  tarotContainer.appendChild(ellipsis);

  tarotToggler.addEventListener('click', () => {
    if (moreText.style.display === 'none') {
      moreText.style.display = 'inline';
      ellipsis.style.display = 'none';
      tarotToggler.textContent = 'Ver menos';
    } else {
      moreText.style.display = 'none';
      ellipsis.style.display = 'inline';
      tarotToggler.textContent = 'Ver más';
    }
  });

  moreText.style.display = 'none';
  ellipsis.style.display = 'inline';
});


// programs filter
const filterSelect = document.getElementById('filterSelect');
const sections = document.querySelectorAll('.section-item');

filterSelect.value = 'all';

sections.forEach(section => section.classList.add('active'));

filterSelect.addEventListener('change', () => {
  const filter = filterSelect.value;

  sections.forEach(section => {
    if (filter === 'all') {
      section.classList.add('active');
    } else {
      if (section.classList.contains(filter)) {
        section.classList.add('active');
      } else {
        section.classList.remove('active');
      }
    }
  });
});

// programacion
document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card");

  cards.forEach(card => {
    card.addEventListener("click", () => {
      card.classList.toggle("collapsed");
    });
  });
});



document.addEventListener("DOMContentLoaded", () => {
  const cards = document.querySelectorAll(".card");

  cards.forEach(card => {
    card.addEventListener("click", () => {
      card.classList.toggle("collapsed");
    });
  });
});




const dropdownButton = document.getElementById('dropdownButton');
const dropdownMenu = document.getElementById('dropdownMenu');

// Toggle para abrir y cerrar el dropdown al hacer clic en el botón
dropdownButton.addEventListener('click', function (event) {
  event.stopPropagation(); // Evitar que el clic se propague
  if (dropdownMenu.classList.contains('hidden')) {
    dropdownMenu.classList.remove('hidden'); // Si está oculto, mostrar el menú
  } else {
    dropdownMenu.classList.add('hidden'); // Si está visible, ocultar el menú
  }
});

// Opcional: Cerrar el menú si se hace clic fuera
window.addEventListener('click', function (event) {
  if (!dropdownButton.contains(event.target) && !dropdownMenu.contains(event.target)) {
    dropdownMenu.classList.add('hidden'); // Cerrar el menú si el clic está fuera
  }
});




// Active link on current path
function activeMenuLinks(selector, highlightClass) {
  const links = document.querySelectorAll(selector);
  const currentLocation = window.location.href;

  links.forEach(function (link) {
    if (link.href === currentLocation) {
      link.classList.add(highlightClass);
    }
  });
}

function activeSubMenuLinks(selector, highlightClass) {
  const links = document.querySelectorAll(selector);
  const currentLocation = window.location.href;

  links.forEach(function (link) {
    if (link.href === currentLocation) {
      link.classList.add(highlightClass);
    }
  });
}
