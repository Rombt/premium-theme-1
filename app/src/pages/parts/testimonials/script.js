if (document.querySelector('.rmbt-testimonials-block-slide-swiper')) {
  let swiperParam = new Swiper('.rmbt-testimonials-block-slide-swiper', {
    direction: 'horizontal',
    loop: true,
    spaceBetween: 30,
    slidesPerView: 1,
    centeredSlides: true,
    speed: 820,
    autoplay: {
      delay: 4800,
    },
    navigation: {
      nextEl: '.rmbt-testimonials-block-slide-swiper__button-next',
      prevEl: '.rmbt-testimonials-block-slide-swiper__button-prev',
    },

    breakpoints: {
      800: {
        centeredSlides: false,
        slidesPerView: 'auto',
      },
      680: {
        slidesPerView: 3,
      },
      480: {
        slidesPerView: 1,
      },
    },
  });
}
