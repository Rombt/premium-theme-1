class VerticalMenu {
  contVerticalMenu;
  nl_menuItems;
  rectContVerticalMenu;
  bottomContVerticalMenu;
  heightContVerticalMenu;
  heightContVerticalMenuClose;
  heightContVerticalMenuOpen;
  entriesBlockSize;
  positionContVerticalMenu;
  widthContVerticalMenu;

  remainingHeight = 0;
  numberLastItem = 0;
  menuItemOverflow;
  heightMenuItemOverflow;
  menuOverflow;
  iconMenuOverflow;
  overflowItemsLength;

  nl_overflowItems;

  entriesBlockSizeOld;
  count_nl_overflowItems;

  constructor(contVerticalMenu, param) {
    this.contVerticalMenu = contVerticalMenu;

    this.classesContVerticalMenu = param.classesContVerticalMenu;
    this.classVerticalMenuOpen = param.classVerticalMenuOpen;
    this.classMenuItemDropIcon = param.classMenuItemDropIcon;
    this.classMenuItemDropIconOpen = param.classMenuItemDropIconOpen;
    this.classSubMenuIOpen = param.classSubMenuIOpen;
    this.classMenuOverflow = param.classMenuOverflow;
    this.classIconMenuOverflow = param.classIconMenuOverflow;
    this.classMenuItemOverflow = param.classMenuItemOverflow;
    this.textMenuItemOverflow = param.textMenuItemOverflow;
    this.individualParamsContMenu = param.individualParamsContMenu;

    this.positionContVerticalMenu = this.contVerticalMenu.style.position;
    this.widthContVerticalMenu = this.contVerticalMenu.style.width;

    this.initParamMenus();
    this.buildOverflowMenu();
    this.processingPressKeys();
    this.clickOutside();

    this.showItemsOpenedVerticalMenu();

    this.entriesBlockSizeOld = this.heightContVerticalMenu;
    this.count_nl_overflowItems = 0;
    const observer = new ResizeObserver(entries => {
      this.entriesBlockSize = entries[0].contentBoxSize[0].blockSize;

      this.buildOverflowMenu();
      this.showItemsOpenedVerticalMenu();

      if (
        Math.round(this.entriesBlockSize) === Math.round(this.heightContVerticalMenuClose)
      ) {
        this.contVerticalMenu.style.width = this.widthContVerticalMenu;
        this.contVerticalMenu.style.position = this.positionContVerticalMenu;
      }
    });
    observer.observe(this.contVerticalMenu);
  }

  initParamMenus() {
    this.individualParamsContMenu.forEach(obj_paramsMenu => {
      const arr_properties = Object.entries(obj_paramsMenu);
      let classMenu;

      if (arr_properties.length === 0) return;
      arr_properties.forEach(([propertyKey, propertyValue]) => {
        if (propertyKey === 'class') classMenu = propertyValue;
        if (!this.contVerticalMenu.classList.contains(`${classMenu}`)) return;

        if (propertyKey in this.contVerticalMenu.style) {
          this.contVerticalMenu.style[propertyKey] = propertyValue;
        } else {
          /* */
        }
      });
    });

    this.contVerticalMenu.style.display = 'block';
  }

  clickMenuItemOverflow(e) {
    if (!this.menuItemOverflow) return;

    if (!this.contVerticalMenu.classList.contains(this.classVerticalMenuOpen)) {
      this.openVerticalMenu();
    } else {
      this.closeVerticalMenu();
    }
  }

  openVerticalMenu() {
    const contVerticalMenuUl = this.contVerticalMenu.querySelector('nav > ul');
    this.nl_overflowItems = this.contVerticalMenu.querySelectorAll(
      `.${this.classMenuOverflow} > li`
    );
    this.overflowItemsLength = this.nl_overflowItems.length;
    this.heightContVerticalMenuClose = this.rectContVerticalMenu.height;

    this.contVerticalMenu.classList.add(this.classVerticalMenuOpen);
    contVerticalMenuUl.style.position = 'relative';

    this.contVerticalMenu.style.position = 'absolute';
    this.contVerticalMenu.style.width = this.rectContVerticalMenu.width + 'px';

    this.nl_overflowItems.forEach((overflowItem, i) => {
      overflowItem.style.visibility = 'hidden';
      overflowItem.style.pointerEvents = 'none';
      overflowItem.style.top =
        this.remainingHeight * (this.numberLastItem + i + 1) + 'px';

      contVerticalMenuUl.append(overflowItem);

      if (i === this.overflowItemsLength - 1) {
        this.heightContVerticalMenuOpen =
          overflowItem.getBoundingClientRect().bottom -
          this.contVerticalMenu.getBoundingClientRect().top +
          this.heightMenuItemOverflow;
      }
    });

    this.contVerticalMenu.style.height = this.heightContVerticalMenuOpen + 'px';
  }

  showItemsOpenedVerticalMenu() {
    /**
     * for gradual display vertical menu items during animation
     */
    if (
      Math.abs(Math.round(this.entriesBlockSize) - Math.round(this.entriesBlockSizeOld)) >
        this.heightMenuItemOverflow / 2 &&
      this.nl_overflowItems
    ) {
      this.entriesBlockSizeOld = this.entriesBlockSize + this.heightMenuItemOverflow / 2;

      this.nl_overflowItems[this.count_nl_overflowItems].style.visibility = 'visible';
      this.nl_overflowItems[this.count_nl_overflowItems].style.pointerEvents = 'auto';
      this.count_nl_overflowItems++;

      if (this.count_nl_overflowItems === this.nl_overflowItems?.length) {
        this.count_nl_overflowItems = 0;
        this.entriesBlockSizeOld = this.heightContVerticalMenu;
      }
    }
  }

  closeVerticalMenu() {
    if (!this.contVerticalMenu.classList.contains(this.classVerticalMenuOpen)) {
      return;
    }

    this.contVerticalMenu.style.height = this.heightContVerticalMenuClose + 'px';
    this.contVerticalMenu.classList.remove(this.classVerticalMenuOpen);
  }

  buildOverflowMenu() {
    this.nl_menuItems = this.contVerticalMenu.querySelectorAll('nav > ul > li');
    this.rectContVerticalMenu = this.contVerticalMenu.getBoundingClientRect();

    this.bottomContVerticalMenu = this.rectContVerticalMenu.bottom;
    this.heightContVerticalMenu = this.rectContVerticalMenu.height;

    if (this.contVerticalMenu.classList.contains(this.classVerticalMenuOpen)) {
      return;
    }

    this.nl_menuItems.forEach((menuItem, indexMenuItem) => {
      let bottomMenuItem = menuItem.getBoundingClientRect().bottom;
      menuItem.style.position = 'relative';
      this.addIconsSubMenu(menuItem);

      if (bottomMenuItem > this.bottomContVerticalMenu) {
        if (!this.menuOverflow) {
          this.menuOverflow = document.createElement('div');
          this.menuOverflow.classList.add(this.classMenuOverflow);
          this.menuOverflow.style.display = 'none';
          this.contVerticalMenu.prepend(this.menuOverflow);
        }
        if (this.remainingHeight === 0) {
          this.remainingHeight =
            (this.bottomContVerticalMenu -
              this.nl_menuItems[indexMenuItem - 1].getBoundingClientRect().bottom) /
            indexMenuItem;
          for (let i = 0; i < this.nl_menuItems.length; i++) {
            if (i < indexMenuItem) {
              this.nl_menuItems[i].style.top = this.remainingHeight * (i + 1) + 'px';
            } else {
              this.numberLastItem = i - 1;
              break;
            }
          }
        }

        if (this.heightContVerticalMenuOpen) {
          /* building overflow menu during closing vertical menu*/
          this.menuOverflow.prepend(menuItem);
        } else {
          /* first building overflow menu during download page*/
          this.menuOverflow.append(menuItem);
        }
      }
    });
    if (!this.menuItemOverflow) this.addItemMenuOverflow();
  }

  addItemMenuOverflow() {
    if (this.nl_menuItems[this.numberLastItem - 1]) {
      this.menuItemOverflow = document.createElement('div');
      this.menuItemOverflow.classList.add(this.classMenuItemOverflow);
      this.menuItemOverflow.innerText = this.textMenuItemOverflow;
      this.menuItemOverflow.classList.add(this.classMenuItemOverflow);

      this.iconMenuOverflow = document.createElement('div');
      this.iconMenuOverflow.classList.add(this.classIconMenuOverflow);
      this.menuItemOverflow.append(this.iconMenuOverflow);

      this.heightMenuItemOverflow =
        this.contVerticalMenu.getBoundingClientRect().bottom -
        this.nl_menuItems[this.numberLastItem - 1]?.getBoundingClientRect().bottom;

      this.menuItemOverflow.style.position = 'absolute';
      this.menuItemOverflow.style.height = this.heightMenuItemOverflow + 'px';
      this.menuItemOverflow.style.lineHeight = this.heightMenuItemOverflow + 'px';
      this.menuItemOverflow.style.bottom = '0px';
      this.menuItemOverflow.style.left = '0px';
      this.menuItemOverflow.style.right = '0px';

      this.contVerticalMenu.append(this.menuItemOverflow);
      this.menuItemOverflow.addEventListener(
        'click',
        this.clickMenuItemOverflow.bind(this)
      );
    }
  }

  addIconsSubMenu(menuItem) {
    let nl_menuItemUls = menuItem.querySelectorAll('ul');
    if (nl_menuItemUls.length > 0) {
      nl_menuItemUls.forEach(menuItemUl => {
        let iconDrop = document.createElement('div');
        let closestLi = menuItemUl.closest('li');

        if (closestLi.querySelector(`.${this.classMenuItemDropIcon}`)) return;

        closestLi.style.position = 'relative';
        iconDrop.classList.add(this.classMenuItemDropIcon);
        iconDrop.addEventListener('click', e => {
          let subMenu = closestLi.querySelector('ul');
          if (
            !e.target.classList.contains(this.classMenuItemDropIconOpen) &&
            !subMenu.classList.contains(this.classSubMenuIOpen)
          ) {
            let nl_otherSubMenusOpened = closestLi.parentNode.querySelectorAll(
              `li .${this.classSubMenuIOpen}`
            );
            if (nl_otherSubMenusOpened.length > 0) {
              [...nl_otherSubMenusOpened].reverse().forEach(this.closeSubMenu.bind(this));
            }
            subMenu.classList.add(this.classSubMenuIOpen);
            iconDrop.classList.add(this.classMenuItemDropIconOpen);
          } else {
            this.closeSubMenu(subMenu);
          }
        });
        closestLi.closest('li').append(iconDrop);
      });
    }
  }

  closeSubMenu(menu) {
    let dropIconOpen = menu
      .closest('li')
      .querySelector(`.${this.classMenuItemDropIconOpen}`);

    dropIconOpen.classList.remove(this.classMenuItemDropIconOpen);
    menu.classList.remove(this.classSubMenuIOpen);
  }

  closeAllSubMenus() {
    [...this.contVerticalMenu.querySelectorAll(`.${this.classSubMenuIOpen}`)]
      .reverse()
      .forEach(this.closeSubMenu.bind(this));
  }

  processingPressKeys() {
    document.addEventListener('keydown', e => {
      if (e.key === 27 || e.keyCode === 27) {
        this.closeVerticalMenu();
        this.closeAllSubMenus();
      }
    });
  }

  clickOutside() {
    document.addEventListener('click', e => {
      if (
        e.target !== this.contVerticalMenu &&
        !e.target.classList.contains(this.classMenuItemDropIcon) &&
        !e.target.classList.contains(this.classMenuItemDropIconOpen) &&
        !e.target.classList.contains(this.classMenuItemOverflow)
      ) {
        this.closeVerticalMenu();
        this.closeAllSubMenus();
      }
    });
  }
}
document.addEventListener('DOMContentLoaded', function () {
  const param = {
    classesContVerticalMenu: 'rmbt-cont-vertical-menu-0',
    heightContVerticalMenu: '150px',
    classVerticalMenuOpen: 'vertical-menu-open',
    classMenuItemDropIcon: 'drop-icon',
    classMenuItemDropIconOpen: 'drop-icon-open',
    classSubMenuIOpen: 'submenu-open',
    classMenuOverflow: 'menu-overflow',
    classIconMenuOverflow: 'icon-menu-overflow',
    classMenuItemOverflow: 'menu-item-other',
    textMenuItemOverflow: 'other',

    individualParamsContMenu: [
      {
        class: 'right-top-menu',
        height: '150px',
        width: '100%',
        maxWidth: '100%',
      },
    ],
  };

  document.querySelectorAll(`.${param.classesContVerticalMenu}`).forEach(menu => {
    new VerticalMenu(menu, param);
  });
});
