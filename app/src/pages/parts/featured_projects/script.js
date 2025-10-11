if (document.querySelector('.rmbt-featured-projects-slide-swiper')) {
  let swiperParam = new Swiper('.rmbt-featured-projects-slide-swiper', {
    direction: 'horizontal',
    loop: true,
    spaceBetween: 30,
    slidesPerView: 4,
    centeredSlides: true,
    speed: 820,

    effect: 'coverflow',
    // effect: 'flip',
    // effect: 'cards',
    // effect: 'slide',

    coverflowEffect: {
      rotate: 2,       // градусы поворота
      stretch: 30,       // отступ между слайдами
      depth: 2,       // глубина по оси Z
      modifier: 1.2,      // множитель эффекта
      scale: 0.85,         // масштаб слайда
      slideShadows: true // тени
    },

    autoplay: {
      delay: 4800,
    },
    navigation: {
      nextEl: '.rmbt-featured-projects-slide-swiper__button-next',
      prevEl: '.rmbt-featured-projects-slide-swiper__button-prev',
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
