require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

(function () {
  // change navbar color on scroll
  const navbar = document.querySelector('.navbar');
  const navbarHeight = navbar.offsetHeight;
  window.addEventListener('scroll', function () {
    if (window.scrollY > navbarHeight) {
      navbar.classList.add('bg-white');
    }

    if (window.scrollY < navbarHeight) {
      navbar.classList.remove('bg-white');
    }
  });
})();