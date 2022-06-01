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
  const community = document.querySelectorAll('#community');
  const instagramInput = document.querySelector('.instagram-input');
  const discordInput = document.querySelector('.discord-input');
  const modal = document.querySelector('.modal');
  const modalBg = document.querySelector('.modal-bg');
  const modalPanel = document.querySelector('.modal-panel');
  const layoutInfo = document.querySelector('.layout-info');
  const cancelBtn = document.querySelector('.cancel-btn');
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

  // community section
  for (let i = 0; i < community.length; i++) {
    community[i].addEventListener('click', function () {
      let value = community[i].value;
      if (value == 'instagram') {
        instagramInput.classList.remove('hidden');
        discordInput.classList.add('hidden');
        document.getElementById('disc-input').name = '';
      } else if (value == 'discord') {
        instagramInput.classList.add('hidden');
        discordInput.classList.remove('hidden');
        document.getElementById('insta-input').name = '';
      }
    });
  }

  // layout info
  layoutInfo.addEventListener('click', function () {
    modal.classList.remove('hidden');
    modalBg.style.transition = 'all .3s ease-out';
    modalBg.style.animation = 'modalBgIn .3s ease-out';
    modalPanel.style.transition = 'all .3s ease-out';
    modalPanel.style.animation = 'modalBgIn .3s ease-out';
  });

  // cancel
  cancelBtn.addEventListener('click', function () {
    modal.classList.add('hidden');
  });

  // waiting list form
  waitlist.addEventListener('click', function () {
    const checked = waitlist.checked;
    if (checked) {
      waitlistForm.classList.remove('hidden');
    } else {
      waitlistForm.classList.add('hidden');
    }
  });
})();