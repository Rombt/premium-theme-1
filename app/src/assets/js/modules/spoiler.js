/*
 *
 *	The styles in the file spoiler.less
 *
 */

class Spoiler {
  heightSpoilersBlock;
  marginBottomSpoiler;
  heightParentBlock;

  flagSpoilerOpen = false;

  constructor(spoilersBlock, param) {
    this.spoilersBlock = spoilersBlock;

    this.classSpoiler = param.classSpoiler;
    this.classSpoilerTitle = param.classSpoilerTitle;
    this.classSpoilerBody = param.classSpoilerBody;
    this.classSpoilerOpen = param.classSpoilerOpen;
    this.classSpoilerTitleOpen = param.classSpoilerTitleOpen;
    this.classSpoilerBodyOpen = param.classSpoilerBodyOpen;
    this.parentBlock = this.spoilersBlock.parentElement;

    this.spoilers = this.spoilersBlock.querySelectorAll(`.${this.classSpoiler}`);
    this.setPositionSpoilers();
    this.clickProcessing();

    const observer = new ResizeObserver(entries => {
      if (!this.heightParentBlock) {
        this.getHeightSpoilersBlockParent();
      }

      if (!this.flagSpoilerOpen) {
        this.setPositionSpoilers();
      }
    });
    observer.observe(this.parentBlock);
  }

  clickProcessing() {
    this.spoilers.forEach(spoiler => {
      spoiler.addEventListener('click', e => {
        const spoiler = e.target.closest(`.${this.classSpoiler}`);
        const spoilerTitle = spoiler.querySelector(`.${this.classSpoilerTitle}`);
        const spoilerBody = spoiler.querySelector(`.${this.classSpoilerBody}`);

        spoiler.classList.toggle(this.classSpoilerOpen);
        spoilerTitle.classList.toggle(this.classSpoilerTitleOpen);
        spoilerBody.classList.toggle(this.classSpoilerBodyOpen);

        if (spoilerBody) {
          if (spoilerBody.classList.contains(this.classSpoilerBodyOpen)) {
            spoilerBody.style.height = 'auto';
            const autoHeightSpoilerBody = spoilerBody.scrollHeight;
            spoilerBody.style.height = '0px';
            spoilerBody.getBoundingClientRect();
            this.spoilersBlock.style.maxHeight =
              this.heightParentBlock + autoHeightSpoilerBody + 'px'; //!!
            spoilerBody.style.height = autoHeightSpoilerBody + 'px';

            this.flagSpoilerOpen = true;
          } else {
            spoilerBody.getBoundingClientRect();
            spoilerBody.style.height = '0px';
            this.spoilersBlock.style.maxHeight = this.heightParentBlock + 'px';
            this.flagSpoilerOpen = false;
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

  getHeightSpoilersBlockParent() {
    this.heightParentBlock = this.parentBlock.getBoundingClientRect().height;
    this.spoilersBlock.style.maxHeight = this.heightParentBlock + 'px';
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
