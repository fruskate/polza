
var modal = document.querySelector('.news__order');  
var menuActive = document.querySelector('.header__icon-menu');
var close = document.querySelector('.modal__close');
var message = document.querySelector('.header__button-message');
var messageClose = document.querySelector('.modal-message__close');
var callModal = document.querySelector('.call-btn');
var callClose = document.querySelector('.call-modal__close');

menuActive.addEventListener('click' , function() {
console.log('ok');
document.querySelector('.header__menu')
.classList.toggle('header__menu--hidden');
});


modal.addEventListener('click', function(){
console.log('modal');
document.querySelector('.modal').classList.add('modal__open');
close.addEventListener('click', function(){
document.querySelector('.modal').classList.remove('modal__open');
  });
});

message.addEventListener('click', function(){
  console.log('message');
  document.querySelector('.modal-message').classList.add('modal-message__open');
  messageClose.addEventListener('click', function(){
  document.querySelector('.modal-message').classList.remove('modal-message__open');
  });
 
});

callModal.addEventListener('click', function(){
  console.log('click');
  document.querySelector('.call-modal__body').classList.add('call-modal__body--visible');
  document.querySelector('.call-modal__content').classList.add('call-modal__content--visible');
  callClose.addEventListener('click', function(){
    document.querySelector('.call-modal__body').classList.remove('call-modal__body--visible');
    document.querySelector('.call-modal__content').classList.remove('call-modal__content--visible');
  });
});


var mainSwiper = new Swiper('.main__swiper', {
  // Optional parameters
  direction: 'horizontal',
  loop: true,

  autoplay: {
      delay: 5000,
    },
  
});

var newsSwiper = new Swiper('.news__swiper', {
  // Optional parameters
  direction: 'horizontal',
  // loop: true,

  // freeMode: {
  //   enabled: true,
  //   sticky: true,
  // },

  slidesPerView: 1,
  spaceBetween: 20,
  // Responsive breakpoints
  breakpoints: {
    // when window width is >= 320px
    320: {
      slidesPerView: 1,
      spaceBetween: 20
    },
    // when window width is >= 480px
    480: {
      slidesPerView: 1,
      spaceBetween: 0
    },
    // when window width is >= 640px
    840: {
      slidesPerView: 2,
      spaceBetween: 20
    },

  },

  // autoplay: {
  //     delay: 5000,
  //   },

  // Navigation arrows
  navigation: {
    nextEl: '.news__swiper-button-next',
    prevEl: '.news__swiper-button-prev',
  },
  
});

