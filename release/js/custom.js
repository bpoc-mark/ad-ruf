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
    toggleAccordion(item, nextEl);
  });
});

function toggleAccordion(curEl, nexEl) {
  var currentEl = document.querySelectorAll('.f-acc-sp > .active');
  var nextEl = document.querySelectorAll('.link.show');
  console.log(next[0]);
} //   const slideOut = ()=> {
//     const body = document.querySelector('body');
//     const burger = document.querySelector('.brgr-mail-burger');
//     const nav2 = document.querySelector('.nav-sp-wrppr');
//    burger.addEventListener('click', ()=>{
//     nav2.classList.toggle('slide');
//     body.classList.toggle('ovf');
//    });
// }
// slideOut();