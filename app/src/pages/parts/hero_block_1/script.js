(function () {
  const burgerMenu = document.querySelector('.rmbt-menu-horizontal .icon-burger');
  const logo = document.querySelector('.rmbt-hero-block-1-top-row .custom-logo-link');
  const menuHeaderNavigationContainer = document.querySelector(
    '.menu-header-navigation-container'
  );

  burgerMenu.addEventListener('click', e => {
    console.log('e = ', e);

    menuHeaderNavigationContainer.prepend(logo);
  });
})();
