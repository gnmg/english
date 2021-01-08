'use strict';

$(() => {
  // Open, close menu
  let menuToggleBtn = $('.navigation__btn');
  let navigationList = $('.navigation__list');

  menuToggleBtn.on('click', (evt) => {
    evt.preventDefault();
    menuToggleBtn.toggleClass('navigation__btn_active');
    navigationList.slideToggle(200);
  });

  // Form validation
  let contactForm = $('.contact__form');
  
  if (contactForm.length) {
    contactForm.validationEngine({promptPosition: 'bottomLeft'});
  }
});
