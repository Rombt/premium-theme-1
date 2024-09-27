/*
 *
 *	The styles in the file spoiler.less
 *
 */

class Spoiler {
  constructor(spoilersBlock, param) {
    this.spoilersBlock = spoilersBlock;

    this.classSpoiler = param.classSpoiler;
    this.classSpoilersTitle = param.classSpoilersTitle;
    this.classSpoilerBody = param.classSpoilerBody;
    this.classSpoilerOpen = param.classSpoilerOpen;
    this.classSpoilersTitleOpen = param.classSpoilersTitleOpen;
    this.classSpoilerBodyOpen = param.classSpoilerBodyOpen;

    console.log('this.spoilersBlock = ', this.spoilersBlock);

    this.spoilersBlock.forEach(spoilerBlock => {
      const spoilers = spoilerBlock.querySelectorAll(`.${this.classSpoiler}`);

      spoilers.forEach(spoiler);
    });
  }

  //   nl_parentSpoilers.forEach(parentSpoiler => {
  //     const spoilers = parentSpoiler.querySelectorAll(`.${classSpoiler}`);

  //   const classParentSpoilers = 'spoilers-block';
  //   const classSpoiler = 'spoilers__item';
  //   const classSpoilerOpen = '_open-item';

  //   const classSpoilersTitle = 'spoilers__title';
  //   const classSpoilersTitleOpen = '_open-title';

  //   const classSpoilerBody = 'spoilers__body';
  //   const classSpoilerBodyOpen = '_open-body';

  //   const nl_parentSpoilers = document.querySelectorAll(`.${classParentSpoilers}`);

  //   nl_parentSpoilers.forEach(parentSpoiler => {
  //     const spoilers = parentSpoiler.querySelectorAll(`.${classSpoiler}`);

  //     spoilers.forEach(spoiler => {
  //       const spoilersTitle = spoiler.querySelector(`.${classSpoilersTitle}`);
  //       const spoilerBody = spoiler.querySelector(`.${classSpoilerBody}`);

  //       const startHeightSpoiler = spoiler.getBoundingClientRect().height;

  //       spoiler.addEventListener('click', e => {
  //         spoiler.classList.toggle(classSpoilerOpen);
  //         spoilersTitle.classList.toggle(classSpoilersTitleOpen);
  //         spoilerBody.classList.toggle(classSpoilerBodyOpen);

  //         if (typeof anime !== 'undefined' && spoilerBody) {
  //           const autoHeightSpoilerBody = spoilerBody.scrollHeight;
  //           const autoHeightSpoiler = startHeightSpoiler + autoHeightSpoilerBody;

  //           if (spoilerBody.classList.contains(classSpoilerBodyOpen)) {
  //             spoilerBody.style.height = 'auto';
  //             spoilerBody.style.height = '0';

  //             // spoiler.style.height = 'auto';
  //             // spoiler.style.height = '0';

  //             console.log('startHeightSpoiler = ', startHeightSpoiler);
  //             console.log('autoHeightSpoiler = ', autoHeightSpoiler);

  //             anime({
  //               targets: spoiler,
  //               height: autoHeightSpoiler,
  //             });

  //             anime({
  //               targets: spoilerBody,
  //               height: [0, autoHeightSpoilerBody],
  //               opacity: 1,
  //               duration: 2000,
  //               // easing: 'easeInOutQuad',
  //               complete: () => {
  //                 spoilerBody.style.height = 'auto';
  //               },
  //             });
  //           } else {
  //             const currentHeight = spoilerBody.scrollHeight + 'px';

  //             console.log('*++* = ');

  //             anime({
  //               targets: spoiler,
  //               height: startHeightSpoiler,
  //             });

  //             anime({
  //               targets: spoilerBody,
  //               height: [currentHeight, 0],
  //               opacity: 0,
  //               duration: 2000,
  //               // easing: 'easeInOutQuad',
  //               complete: () => {
  //                 // spoiler.classList.remove();
  //                 // spoilerBody.classList.remove();
  //                 // spoilersTitle.classList.remove(classSpoilersTitleOpen);

  //                 spoilerBody.style.height = 'auto';
  //               },
  //             });
  //           }
  //         }
  //       });
  //     });
  //   });
}

document.addEventListener('DOMContentLoaded', function () {
  const param = {
    // classesContVerticalMenu: 'rmbt-cont-vertical-menu-0',
    classSpoilersBlock: 'spoilers-block',
    classSpoiler: 'spoiler',
    classSpoilerTitle: 'spoiler__title',
    classSpoilerBody: 'spoiler__body',

    classSpoilerOpen: '_open-item',
    classSpoilerTitleOpen: '_open-title',
    classSpoilerBodyOpen: '_open-body',

    // heightContVerticalMenu: '150px',
    // classVerticalMenuOpen: 'vertical-menu-open',
    // classMenuItemDropIcon: 'drop-icon',
    // classMenuItemDropIconOpen: 'drop-icon-open',
    // classSubMenuIOpen: 'submenu-open',
    // classMenuOverflow: 'menu-overflow',
    // classIconMenuOverflow: 'icon-menu-overflow',
    // classMenuItemOverflow: 'menu-item-other',
    // textMenuItemOverflow: 'other',

    // individualParamsContMenu: [
    //   {
    //     class: 'right-top-menu',
    //     height: '150px',
    //     width: '100%',
    //     maxWidth: '100%',
    //   },
    // ],
  };

  document.querySelectorAll(`.${param.classSpoilersBlock}`).forEach(spoilersBlock => {
    new Spoiler(spoilersBlock, param);
  });
});
