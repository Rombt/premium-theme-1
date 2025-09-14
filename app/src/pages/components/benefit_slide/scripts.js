if (document.querySelector('.rmbt-benefit-slide-swiper')) {
  let swiperParam = new Swiper('.rmbt-benefit-slide-swiper', {
    direction: 'horizontal',
    loop: true,
    // speed: 1600,
    speed: 2800,
    autoplay: {
      delay: 5000,
    },

    // effect: 'coverflow',
    // effect: 'flip',
    effect: 'cube',
  });
}
