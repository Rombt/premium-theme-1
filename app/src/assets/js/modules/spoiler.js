/*
 *
 *	The styles in the file spoiler.less
 *
 */

class Spoiler {
  heightSpoilersBlock;
  marginBottomSpoiler;

  constructor(spoilersBlock, param) {
    this.spoilersBlock = spoilersBlock;

    this.classSpoiler = param.classSpoiler;
    this.classSpoilerTitle = param.classSpoilerTitle;
    this.classSpoilerBody = param.classSpoilerBody;
    this.classSpoilerOpen = param.classSpoilerOpen;
    this.classSpoilerTitleOpen = param.classSpoilerTitleOpen;
    this.classSpoilerBodyOpen = param.classSpoilerBodyOpen;

    this.spoilers = this.spoilersBlock.querySelectorAll(`.${this.classSpoiler}`);
    this.setPositionSpoilers();

    this.spoilers.forEach(spoiler => {
      // const startHeightSpoiler = spoiler.offsetHeight;
      // let finishHeightSpoiler;
      spoiler.addEventListener('click', e => {
        const spoiler = e.target.closest(`.${this.classSpoiler}`);
        const spoilerTitle = spoiler.querySelector(`.${this.classSpoilerTitle}`);
        const spoilerBody = spoiler.querySelector(`.${this.classSpoilerBody}`);

        spoiler.classList.toggle(this.classSpoilerOpen);
        spoilerTitle.classList.toggle(this.classSpoilerTitleOpen);
        spoilerBody.classList.toggle(this.classSpoilerBodyOpen);

        if (spoilerBody) {
          if (spoilerBody.classList.contains(this.classSpoilerBodyOpen)) {
            // spoiler.style.height = spoiler.offsetHeight - spoilerBody.offsetHeight + 'px';

            spoilerBody.style.height = 'auto';
            const autoHeightSpoilerBody = spoilerBody.scrollHeight;
            spoilerBody.style.height = '0px';

            // spoiler.style.height = 'auto';

            spoilerBody.getBoundingClientRect();
            spoilerBody.style.height = autoHeightSpoilerBody + 'px';
          } else {
            spoilerBody.getBoundingClientRect();
            spoilerBody.style.height = '0px';
          }
        }
      });
    });
  }

  setPositionSpoilers() {
    this.getHeightSpoilersBlock();
    this.getSpoilerMarginBottom();
    [...this.spoilers].map((spoiler, index) => {
      spoiler.style.marginBottom = this.marginBottomSpoiler + 'px';
    });
  }

  getHeightSpoilersBlock() {
    const style = window.getComputedStyle(this.spoilersBlock);
    const paddingTop = parseFloat(style.paddingTop);
    const paddingBottom = parseFloat(style.paddingBottom);
    this.heightSpoilersBlock =
      this.spoilersBlock.clientHeight - paddingTop - paddingBottom;
  }

  getSpoilerMarginBottom() {
    const sumHeightSpoilers = [...this.spoilers].reduce((sumHeight, spoiler) => {
      const heightSpoiler = spoiler.clientHeight;
      const spoilerTitle = spoiler.querySelector(`.${this.classSpoilerTitle}`);
      const spoilerBody = spoiler.querySelector(`.${this.classSpoilerBody}`);
      const heightSpoilerBody = spoilerBody.offsetHeight;
      const heightSpoilerWithBorder = spoiler.offsetHeight - heightSpoilerBody;

      spoilerTitle.style.height = heightSpoiler - heightSpoilerBody + 'px';
      spoilerTitle.style.lineHeight = heightSpoiler - heightSpoilerBody + 'px';
      return sumHeight + heightSpoilerWithBorder;
    }, 0);

    this.marginBottomSpoiler =
      (this.heightSpoilersBlock - sumHeightSpoilers) / (this.spoilers.length - 1);
  }
}

document.addEventListener('DOMContentLoaded', function () {
  const param = {
    // classesContVerticalMenu: 'rmbt-cont-vertical-menu-0',
    classSpoilersBlock: 'spoilers-block',
    classSpoiler: 'spoiler',
    classSpoilerTitle: 'spoiler__title',
    classSpoilerBody: 'spoiler__body',

    classSpoilerOpen: '_open-spoiler',
    classSpoilerTitleOpen: '_open-title',
    classSpoilerBodyOpen: '_open-body',
  };

  document.querySelectorAll(`.${param.classSpoilersBlock}`).forEach(spoilersBlock => {
    new Spoiler(spoilersBlock, param);
  });
});
