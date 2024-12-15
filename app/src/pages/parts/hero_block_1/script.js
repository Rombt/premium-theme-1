(function () {
  const burgerMenu = document.querySelector('.rmbt-menu-horizontal .icon-burger');
  const topRowColLeft = document.querySelector('.rmbt-hero-block-1-top-row-col-left');
  const logo = topRowColLeft.querySelector('.custom-logo-link');
  const heroBlockFullWidth = document.querySelector('.rmbt-hero-block-1-full-width');
  const menuHeaderNavigationContainer = document.querySelector(
    '.menu-header-navigation-container'
  );

  if (!menuHeaderNavigationContainer || !logo || !topRowColLeft) {
    return;
  }

  burgerMenu.addEventListener('click', e => {
    menuHeaderNavigationContainer.prepend(logo);
    heroBlockFullWidth.classList.add('hide-after');
  });

  document.addEventListener('click', e => {
    if (
      menuHeaderNavigationContainer.contains(logo) &&
      !menuHeaderNavigationContainer.contains(e.target)
    ) {
      topRowColLeft.prepend(logo);
      heroBlockFullWidth.classList.remove('hide-after');
    }
  });
})();
