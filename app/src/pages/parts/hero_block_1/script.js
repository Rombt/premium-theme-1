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

  let resizeTimeout;
  let oldWidth = 0;
  window.addEventListener('resize', () => {
    if (Math.abs(oldWidth - window.innerWidth) > 2) {
      svgDistribution();
    }
    oldWidth = window.innerWidth;

    if (window.innerWidth > 769) {
      topRowColLeft.prepend(logo);
      heroBlockFullWidth.classList.remove('hide-after');
    }
  });

  svgDistribution();

  function svgDistribution(minDistanceSvg, minDistanceRegion) {
    minDistanceSvg = 50;
    minDistanceRegion = 30;

    const containerSvg = document.querySelector('.rmbt-hero-block-1-col-left__bg');
    if (!containerSvg) {
      return;
    }
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

    if (!nl_svg || nl_svg.length === 0) {
      return;
    }

    nl_svg.forEach((svg, i) => {
      const widthSvg = svg.clientWidth;
      const heighSvg = svg.clientHeight;
      let x, y;
      let k = 0;

      do {
        x = getRandomInt(0, widthContainerSvg - widthSvg);
        y = getRandomInt(0, heightContainerSvg - heighSvg);
        k++;
        if (k > 200) {
          break;
        }
      } while (isOverlapping(x, y, widthSvg, heighSvg));

      svg.style.left = x + 'px';
      svg.style.top = y + 'px';
      placedSVGs.push({ x, y, width: widthSvg, height: heighSvg });
    });

    function isOverlapping(x, y, width, height) {
      const overlapsRestricted = restrictedRegions.some(
        region =>
          x < region.x + region.width + minDistanceRegion &&
          x + width > region.x - minDistanceRegion &&
          y < region.y + region.height + minDistanceRegion &&
          y + height > region.y - minDistanceRegion
      );

      if (overlapsRestricted) return true;

      const overlapsSVGs = placedSVGs.some(svg => {
        const dx = svg.x + svg.width / 2 - (x + width / 2);
        const dy = svg.y + svg.height / 2 - (y + height / 2);
        const distance = Math.sqrt(dx * dx + dy * dy);
        return distance < minDistanceSvg + Math.max(width, height) / 2;
      });

      return overlapsSVGs;
    }

    function getRandomInt(min, max) {
      min = Math.ceil(min);
      max = Math.floor(max);
      return Math.floor(Math.random() * (max - min + 1)) + min;
    }
  }

  function executeWithTimeout(fn, timeout) {
    return Promise.race([
      new Promise((resolve, reject) => {
        try {
          resolve(fn());
        } catch (error) {
          reject(error);
        }
      }),
      new Promise((_, reject) =>
        setTimeout(() => reject(new Error('Execution timed out')), timeout)
      ),
    ]);
  }
})();
