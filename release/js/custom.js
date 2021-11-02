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
var footerAcc = document.querySelectorAll('.f-acc-sp');
footerAcc.forEach(function (item) {
  item.addEventListener('click', function (e) {
    e.preventDefault();
    var nextEl = item.nextElementSibling;
    toggleAccordion(item, item.querySelectorAll('.head-icon'), nextEl);
  });
});

function toggleAccordion(item, curEl, nexEl) {
  var currentEl = document.querySelectorAll('.f-acc-sp > .active');
  var nextEl = document.querySelectorAll('.acc-show');
  document.querySelectorAll('.head-icon').forEach(function (op) {
    op.textContent = '+';
  });

  if (currentEl.length > 0 && nextEl.length > 0) {
    currentEl[0].classList.remove('active');
    nextEl[0].classList.replace('acc-show', 'acc-hidden');
    curEl[0].textContent = '+';

    if (!(currentEl[0].isSameNode(curEl[0]) && nextEl[0].isSameNode(nexEl))) {
      curEl[0].classList.add('active');
      nexEl.classList.replace('acc-hidden', 'acc-show');
      curEl[0].textContent = '-';
    }
  } else {
    curEl[0].classList.add('active');
    nexEl.classList.replace('acc-hidden', 'acc-show');
    curEl[0].textContent = '-';
  }
}

var slideOut = function slideOut() {
  var body = document.querySelector('body');
  var burger = document.querySelector('.brgr-mail-burger');
  var nav2 = document.querySelector('.nav-sp-wrppr');
  burger.addEventListener('click', function () {
    nav2.classList.toggle('slide');
    body.classList.toggle('ovf');
  });
};

slideOut();