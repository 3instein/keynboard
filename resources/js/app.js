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
  const body = document.querySelector('body');
  const waitlist = document.querySelector('#waitlist');
  const waitlistForm = document.querySelector('.waitlist-form');

  // animation on window load
  window.addEventListener('load', () => {
    body.classList.remove('overflow-hidden');
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

  // waiting list form
  // check if checkbox checked
  waitlist.addEventListener('click', function () {
    const checked = waitlist.checked;
    if (checked) {
      waitlistForm.classList.remove('hidden');
    } else {
      waitlistForm.classList.add('hidden');
    }
  });
})();