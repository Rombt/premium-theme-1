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

  window.addEventListener('resize', () => {
    if (window.innerWidth > 769) {
      topRowColLeft.prepend(logo);
      heroBlockFullWidth.classList.remove('hide-after');
    }
  });
})();

const containerSvg = document.querySelector('.rmbt-hero-block-1-col-left__bg');
const widthContainerSvg = containerSvg.clientWidth;
const heightContainerSvg = containerSvg.clientHeight;

const title = document.querySelector('.rmbt-hero-block-1-col-left__title');
const subtitle = document.querySelector('.rmbt-hero-block-1-col-left__subtitle');
const slogan = document.querySelector('.rmbt-hero-block-1-col-left__slogan');
const controlsContainer = document.querySelector(
  '.rmbt-hero-block-1-col-left > .controls-container'
);

const arr_regions = [title, subtitle, slogan, controlsContainer]; // исключаемые регионы
const restrictedRegions = [];
const placedSVGs = [];

const containerSvgRect = containerSvg.getBoundingClientRect();

arr_regions.forEach(region => {
  const regionRect = region.getBoundingClientRect();
  const x = Math.floor(regionRect.left - containerSvgRect.left);
  const y = Math.floor(regionRect.top - containerSvgRect.top);
  const width = Math.floor(regionRect.width);
  const height = Math.floor(regionRect.height);

  restrictedRegions.push({ x, y, width, height });
});

const nl_svg = containerSvg.querySelectorAll('svg');
nl_svg.forEach((svg, i) => {
  const widthSvg = svg.clientWidth;
  const heighSvg = svg.clientHeight;
  let x, y;

  do {
    x = getRandomInt(0, widthContainerSvg - widthSvg);
    y = getRandomInt(0, heightContainerSvg - heighSvg);
  } while (isOverlapping(x, y, widthSvg, heighSvg));

  svg.style.left = x + 'px';
  svg.style.top = y + 'px';
});

function isOverlapping(x, y, width, height) {
  const overlapsRestricted = restrictedRegions.some(
    region =>
      x < region.x + region.width &&
      x + width > region.x &&
      y < region.y + region.height &&
      y + height > region.y
  );

  if (overlapsRestricted) return true;

  const overlapsSVGs = placedSVGs.some(svg => {
    const dx = svg.x + svg.width / 2 - (x + width / 2);
    const dy = svg.y + svg.height / 2 - (y + height / 2);
    const distance = Math.sqrt(dx * dx + dy * dy);
    return distance < minDistance + Math.max(width, height) / 2;
  });

  return overlapsSVGs;
}

function getRandomInt(min, max) {
  min = Math.ceil(min);
  max = Math.floor(max);
  return Math.floor(Math.random() * (max - min + 1)) + min;
}
