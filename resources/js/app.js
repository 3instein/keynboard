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
  const keebHero1 = document.querySelector('.keeb-hero-1');
  const keebHero2 = document.querySelector('.keeb-hero-2');

  // animation on window load
  window.addEventListener('load', () => {
    keebHero1.style.right = '-3rem';
    keebHero2.style.right = '-8rem';
    setTimeout(function () {
      caption.style.right = '0';
    }, 100);
    setTimeout(function () {
      for (let i = 0; i < ctas.length; i++) {
        ctas[i].classList.remove('opacity-0');
      }
    }, 350);
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