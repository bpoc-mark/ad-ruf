"use strict";

$('.slider').slick({
  dots: false,
  infinite: true,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 3,
      slidesToScroll: 3,
      infinite: true,
      dots: true
    }
  }, {
    breakpoint: 751,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true
    }
  }]
});

var slideOut = function slideOut() {
  var body = document.querySelector('body');
  var burger = document.querySelector('.brgr-mail-burger');
  var nav2 = document.querySelector('.top-header-nav');
  var menu_close = document.querySelector('.nav-links-ul-close');
  burger.addEventListener('click', function () {
    nav2.style = "transform: translateX(0)";
  });
  menu_close.addEventListener('click', function () {
    nav2.style = "transform: translateX(-100%)";
  });
};

slideOut();
$(window).on('load resize', function () {
  var w = $(window).width();

  if (w < 750) {
    clickAllowed = true;
  } else {
    $('.top-header-nav').removeAttr('style');
  }
});