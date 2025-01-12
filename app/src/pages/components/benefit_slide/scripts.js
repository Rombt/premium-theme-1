if (document.querySelector('.rmbt-benefit-slide-swiper')) {
  let swiperParam = new Swiper('.rmbt-benefit-slide-swiper', {
    direction: 'horizontal',
    loop: true,
    speed: 900,
    autoplay: {
      delay: 5000,
    },
  });
}
