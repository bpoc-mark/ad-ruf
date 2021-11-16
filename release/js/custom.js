"use strict";

$(document).ready(function () {
  $('.your-class').slick({
    infinite: true,
    speed: 300,
    slidesToShow: 1.65,
    centerMode: true,
    centerPadding: '0',
    responsive: [{
      breakpoint: 750,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    } // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
    ]
  });
});