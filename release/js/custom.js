"use strict";

$('.slider').slick({
  prevArrow: "<button class='prev-arrow slick-prev'><button>",
  nextArrow: "<button class='next-arrow slick-next'></button>",
  dots: false,
  speed: 300,
  slidesToShow: 4,
  slidesToScroll: 4,
  responsive: [{
    breakpoint: 1024,
    settings: {
      slidesToShow: 4,
      slidesToScroll: 4,
      infinite: true
    }
  }, {
    breakpoint: 750,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      infinite: true
    }
  }, {
    breakpoint: 480,
    settings: {
      slidesToShow: 1,
      slidesToScroll: 1,
      centerMode: true,
      infinite: true
    }
  }]
});
$(document).on('click', '.submenu-clk', function () {
  if ($(this).hasClass('active')) {
    $(this).removeClass('active');
    $(this).find('.nav-links-ul-02-link-submenu').slideUp();
    $(this).find('.plus').text('+').css('transform', 'rotate(-90deg)');
  } else {
    $(this).addClass('active');
    $(this).find('.nav-links-ul-02-link-submenu').slideDown();
    $(this).find('.plus').text('-').css('transform', 'rotate(0deg)');
  }
});
var clickAllowed = true;
$(window).on('load resize', function () {
  var w = $(window).width();

  if (w < 750) {
    clickAllowed = true;
  } else {
    clickAllowed = false;
    $('.acc-hidden').removeAttr('style');
    $('.f-acc-sp').removeAttr('style');
  }
});
$('.f-acc-sp').on('click', function (e) {
  e.preventDefault();

  if (clickAllowed) {
    if ($(this).hasClass('active')) {
      $(this).siblings().slideUp();
      $(this).removeClass('active');
      $(this).children('.head-icon').text('+');
      $(this).css('border-bottom', 'none');
      $('.f-acc-sp').filter(function (i) {
        return i == 3;
      }).css('border-bottom', '1px solid #fff');
    } else {
      $('.f-acc-sp').siblings().slideUp();
      $('.f-acc-sp').removeClass('active');
      $('.head-icon').text('+');
      $(this).children('.head-icon').text('-');
      $(this).siblings().slideDown();
      $('.f-acc-sp').css('border-bottom', 'none');
      $('.f-acc-sp').filter(function (i) {
        return i == 3;
      }).css('border-bottom', '1px solid #fff');
      $(this).css('border-bottom', '1px solid #fff');
      $(this).addClass('active');
    }
  }
});

var slideOut = function slideOut() {
  var body = document.querySelector('body');
  var burger = document.querySelector('.brgr-mail-burger');
  var nav2 = document.querySelector('.top-header');
  var menu_close = document.querySelector('.top-header-close a');
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
    $('.top-header').removeAttr('style');
    $('.nav-links-ul-02-link-submenu').removeAttr('style');
  }
});