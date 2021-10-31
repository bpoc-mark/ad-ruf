$('.slider').slick({
    dots: false,
    infinite: true,
    speed: 300,
    slidesToShow: 4,
    slidesToScroll: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 751,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          centerMode: true,
        }
      }
    ]
  });


  const slideOut = ()=> {
    const body = document.querySelector('body');
    const burger = document.querySelector('.brgr-mail-burger');
    const nav2 = document.querySelector('.nav-sp-wrppr');


   burger.addEventListener('click', ()=>{
    nav2.classList.toggle('slide');
    body.classList.toggle('ovf');
       
   });
}

slideOut();