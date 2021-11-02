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

  let footerAcc = document.querySelectorAll('.f-acc-sp');
  footerAcc.forEach(item => {
    item.addEventListener('click', (e) => {
    
      e.preventDefault();
      let nextEl = item.nextElementSibling;
      toggleAccordion(item, item.querySelectorAll('.head-icon'), nextEl);
    });
  }); 
  
  function toggleAccordion(item, curEl, nexEl) {
    let currentEl = document.querySelectorAll('.f-acc-sp > .active');
    let nextEl = document.querySelectorAll('.acc-show');

    document.querySelectorAll('.head-icon').forEach(op => {
      op.textContent = '+';
    });


   

    if(currentEl.length > 0 && nextEl.length > 0) {
      
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


  const slideOut = ()=> {
      const body = document.querySelector('body');
      const burger = document.querySelector('.brgr-mail-burger');
      const nav2 = document.querySelector('.top-header-nav');
      const menu_close = document.querySelector('.nav-links-ul-close');

    burger.addEventListener('click', ()=>{
      nav2.style = "transform: translateX(0)"; 
    });

    menu_close.addEventListener('click', ()=>{
      nav2.style = "transform: translateX(-100%)"; 
    });
  }
  slideOut();

  $(window).on('load resize', function () {
		var w = $(window).width();
		if (w < 750) {
			clickAllowed = true;
		}
		else{
      $('.top-header-nav').removeAttr('style');
		}
  })
