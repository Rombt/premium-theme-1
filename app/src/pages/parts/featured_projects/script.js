if (document.querySelector('.rmbt-featured-projects-slide-swiper')) {
  let swiperParam = new Swiper('.rmbt-featured-projects-slide-swiper', {
    direction: 'horizontal',
    loop: true,
    speed: 820,
    slidesPerView: 1,
    centerInsufficientSlides: true,
    
    effect: 'coverflow',
    coverflowEffect: {
      rotate: 9,       
      stretch: 20,       
      depth: 7,       
      modifier: 1.5,      
      scale: 0.85,         
      slideShadows: true 
    },

    // autoplay: {
    //   delay: 4800,
    // },
    
    navigation: {
      nextEl: '.rmbt-featured-projects-slide-swiper__button-next',
      prevEl: '.rmbt-featured-projects-slide-swiper__button-prev',
    },

    breakpoints: {
      650: {
        slidesPerView: 'auto',
        centerInsufficientSlides: true,
      },
    }


  });
}
