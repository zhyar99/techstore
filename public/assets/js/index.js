var swiper = new Swiper('.mainslider', {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  pagination: {
    el: '.swiper-pagination',
    dynamicBullets: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

var swiper = new Swiper('.slider2', {
  spaceBetween: 50,
  freeModeSticky: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  autoplay: {
    delay: 2500,
    disableOnInteraction: false,
  },
  breakpoints: {
    // when window width is <= 499px
    499: {
        slidesPerView: 1,
        spaceBetween: 50,
    },
    // when window width is <= 999px
    900: {
        slidesPerView: 2,
        spaceBetween: 20,
    },
    1500: {
      slidesPerView: 3,
      spaceBetween: 50,
    }
  }
});

 


  
        
        
        