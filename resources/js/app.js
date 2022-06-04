require('./bootstrap');

import Alpine from 'alpinejs';

window.Alpine = Alpine;

Alpine.start();

(function () {
  'use strict';
  // landing page
  const navbar = document.querySelector('.navbar');
  const navbarHeight = navbar.offsetHeight;
  const caption = document.querySelector('.caption');
  const captionCover = document.querySelector('.caption-cover');
  const ctas = document.querySelectorAll('.cta');
  const keebHero1 = document.querySelector('.keeb-hero-1');
  const keebHero2 = document.querySelector('.keeb-hero-2');
  const body = document.querySelector('body');

  // ic page
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

  // build page
  const keebEmbed = {
    'black-black': 'https://sketchfab.com/models/f9b3bb88c61940d9ab65bf90c52730cc/embed?autostart=1',
    'black-white': 'https://sketchfab.com/models/208db99be9664cccaa80cba18b62a157/embed?autostart=1',
    'white-black': 'https://sketchfab.com/models/036e8d22677f4b748ec47bdb384d2d72/embed?autostart=1',
    'white-white': 'https://sketchfab.com/models/6cb9185a99fa463d8b9bc72acb7d2af7/embed?autostart=1',
  }

  const buildCode = document.querySelector('.build-code');
  const formBuildCode = document.querySelector('.form-build-code');
  const sketfabEmbedWrapper = document.querySelector('.sketchfab-embed-wrapper');
  const topCase = document.querySelectorAll('.top-case');
  const bottomCase = document.querySelectorAll('.bottom-case');

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

  // // layout info
  // layoutInfo.addEventListener('click', function () {
  //   modal.classList.remove('hidden');
  //   modalBg.style.transition = 'all .3s ease-out';
  //   modalBg.style.animation = 'modalBgIn .3s ease-out';
  //   modalPanel.style.transition = 'all .3s ease-out';
  //   modalPanel.style.animation = 'modalBgIn .3s ease-out';
  // });

  // // cancel
  // cancelBtn.addEventListener('click', function () {
  //   modal.classList.add('hidden');
  // });

  // // waiting list form
  // waitlist.addEventListener('click', function () {
  //   const checked = waitlist.checked;
  //   if (checked) {
  //     waitlistForm.classList.remove('hidden');
  //   } else {
  //     waitlistForm.classList.add('hidden');
  //   }
  // });

  // build configuration
  if (buildCode) {
    buildCode.addEventListener('click', function () {
      formBuildCode.classList.remove('hidden');
    });
  }

  // keeb model
  if (sketfabEmbedWrapper) {
    // top case bottom case
    var topCaseColor = 'black';
    var bottomCaseColor = 'black';
    var code = topCaseColor + '-' + bottomCaseColor;

    for (let i = 0; i < topCase.length; i++) {
      topCase[i].addEventListener('click', function () {
        if (topCase[i].checked) {
          topCaseColor = topCase[i].id.split(' ')[0].toLowerCase();
          code = topCaseColor + '-' + bottomCaseColor;
          sketfabEmbedWrapper.querySelector('iframe').src = keebEmbed[code];
        }
      });

      bottomCase[i].addEventListener('click', function () {
        if (bottomCase[i].checked) {
          bottomCaseColor = bottomCase[i].id.split(' ')[0].toLowerCase();
          code = topCaseColor + '-' + bottomCaseColor;
          sketfabEmbedWrapper.querySelector('iframe').src = keebEmbed[code];
        }
      });
    }
  }
})();