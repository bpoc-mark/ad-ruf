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

  if (w <= 750) {
    clickAllowed = true;
  } else {
    clickAllowed = false;
    $('.acc-hidden').removeAttr('style');
    $('.f-acc-sp').removeAttr('style');
  }
});
$('.f-acc-sp').on('click', function (e) {
  // e.preventDefault();
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
}); // $(function () {
//   $('a[href*=#]:not([href=#])').click(function () {
//     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
//       var target = $(this.hash);
//       console.log(target);
//       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
//       if (target.length) {
//         $('html,body').animate({
//           scrollTop: target.offset().top(),
//           behavior: 'smooth'
//         }, 1000);
//         return false;
//       }
//     }
//   });
// });

$(document).on('click', 'a[href^="#"]', function (event) {
  event.preventDefault();
  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top
  }, 2000);
});
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
$(function () {
  $("select").append('<optgroup label=""></optgroup>');
});

(function (d) {
  var config = {
    kitId: 'hmk0dwz',
    scriptTimeout: 3000,
    async: true
  },
      h = d.documentElement,
      t = setTimeout(function () {
    h.className = h.className.replace(/\bwf-loading\b/g, "") + " wf-inactive";
  }, config.scriptTimeout),
      tk = d.createElement("script"),
      f = false,
      s = d.getElementsByTagName("script")[0],
      a;
  h.className += " wf-loading";
  tk.src = 'https://use.typekit.net/' + config.kitId + '.js';
  tk.async = true;

  tk.onload = tk.onreadystatechange = function () {
    a = this.readyState;
    if (f || a && a != "complete" && a != "loaded") return;
    f = true;
    clearTimeout(t);

    try {
      Typekit.load(config);
    } catch (e) {}
  };

  s.parentNode.insertBefore(tk, s);
})(document);

var casePhotos = document.querySelectorAll('.photos');
casePhotos.forEach(function (item) {
  var photos = item.querySelectorAll('img');
  photos.forEach(function (frame) {
    frame.addEventListener("click", function () {
      var currentView = document.querySelector('.frame-view');
      currentView.children[0].src = frame.src;
      currentView.style.display = "block";
      console.log(frame.src);
    });
  });
});
var closePhoto = document.querySelector('.frame-view');
closePhoto.addEventListener("click", function (e) {
  closePhoto.style.display = "none";
});
$('.show-ad').click(function () {
  if ($('.zip_s').val() !== '') {
    AjaxZip3.zip2addr('zip01', 'zip02', 'address1', 'municipality', 'address');
  }

  if ($('.zip_s').val() === '') {
    $('.prefecture_s').val(''), $('.municipality_s').val(''), $('.address_s').val(''); // $('.address_s2').val('')
  }
});
$(document).on('click')(function () {
  alert();
  $("#non").css("display", "none");
});

function clickClass() {
  if ($('.wpcf7-form').hasClass('init') || $('.wpcf7-form').hasClass('invalid')) {} else {
    $('.wpcf7-form').removeClass('customConfirm');
  }
}

function buttonclickClass() {
  $('.wpcf7-form').addClass('customConfirm');
}