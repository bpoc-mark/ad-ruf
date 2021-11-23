"use strict";

$(document).ready(function () {
  $('.slider_realestate').slick({
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
  $(document).on("click", ".tab_wrap_item__link", function (e) {
    e.preventDefault();
    var getTab = $(this).attr("href");
    $('.tab_cont').removeClass('active');
    $('#' + getTab).addClass('active');
    $('.tab_wrap_item').removeClass('active');
    $(this).parent().addClass('active');
    $('.slider_realestate').slick('setPosition');
  });
});