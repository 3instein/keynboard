require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

(function () {
  'use strict';
  const navbar = document.querySelector('.navbar');
  const navbarHeight = navbar.offsetHeight;
  const caption = document.querySelector('.caption');
  const captionCover = document.querySelector('.caption-cover');
  const ctas = document.querySelectorAll('.cta');

  // animation on window load
  window.addEventListener('load', () => {
    setTimeout(function () {
      caption.style.right = '0';
    }, 100);
    setTimeout(function () {
      for (let i = 0; i < ctas.length; i++) {
        ctas[i].classList.remove('opacity-0');
      }
    }, 900);
    setTimeout(function () {
      captionCover.style.right = '100%';
    }, 250);
  });

  // change navbar color on scroll
  window.addEventListener('scroll', function () {
    if (window.scrollY > navbarHeight) {
      navbar.classList.add('bg-white');
    }

    if (window.scrollY < navbarHeight) {
      navbar.classList.remove('bg-white');
    }
  });
})();