class VerticalMenu {
  contVerticalMenu;
  nl_menuItems;
  rectContVerticalMenu;
  bottomContVerticalMenu;
  heightContVerticalMenu;

  remainingHeight = 0;
  numberLastItem = 0;
  menuItemOverflow;
  menuOverflow;
  iconMenuOverflow;
  overflowItemsLength;

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

    const observer = new ResizeObserver(entries => {
      this.nl_menuItems = this.contVerticalMenu.querySelectorAll('nav > ul > li');
      this.rectContVerticalMenu = this.contVerticalMenu.getBoundingClientRect();
      this.bottomContVerticalMenu = this.rectContVerticalMenu.bottom;
      this.heightContVerticalMenu = this.rectContVerticalMenu.height;

      this.buildOverflowMenu();

      // this.processingClick();
    });
    observer.observe(this.contVerticalMenu);

    this.processingPressKeys();
  }

  processingClick() {
    if (!this.menuItemOverflow) return;

    console.log('11');

    this.menuItemOverflow.addEventListener('click', e => {
      console.log('33');
      const contVerticalMenuUl = this.contVerticalMenu.querySelector('nav > ul');
      let heightContVerticalMenuOpen;

      if (!this.contVerticalMenu.classList.contains(this.classVerticalMenuOpen)) {
        const nl_overflowItems = this.contVerticalMenu.querySelectorAll(
          `.${this.classMenuOverflow} > li`
        );
        this.overflowItemsLength = nl_overflowItems.length;

        this.contVerticalMenu.classList.add(this.classVerticalMenuOpen);
        contVerticalMenuUl.style.position = 'relative';
        nl_overflowItems.forEach((overflowItem, i) => {
          overflowItem.style.top =
            this.remainingHeight * (this.numberLastItem + i + 1) + 'px';
          contVerticalMenuUl.append(overflowItem);

          if (i === this.overflowItemsLength - 1) {
            heightContVerticalMenuOpen =
              overflowItem.getBoundingClientRect().bottom -
              this.contVerticalMenu.getBoundingClientRect().top;
          }

          // this.overflowItemsLength++;
        });

        this.contVerticalMenu.style.height = heightContVerticalMenuOpen + 'px';
        this.menuItemOverflow.style.bottom = 'auto';
        this.menuItemOverflow.style.top = heightContVerticalMenuOpen + 'px';
      } else {
        console.log('22');
        this.closeVerticalMenu();
      }
    });
  }

  buildOverflowMenu() {
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

        this.menuOverflow.append(menuItem);
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

      const heightMenuItemOverflow =
        this.contVerticalMenu.getBoundingClientRect().bottom -
        this.nl_menuItems[this.numberLastItem - 1]?.getBoundingClientRect().bottom;

      this.menuItemOverflow.style.position = 'absolute';
      this.menuItemOverflow.style.height = heightMenuItemOverflow + 'px';
      this.menuItemOverflow.style.lineHeight = heightMenuItemOverflow + 'px';
      this.menuItemOverflow.style.bottom = '0px';
      this.menuItemOverflow.style.left = '0px';
      this.menuItemOverflow.style.right = '0px';

      this.menuOverflow.prepend(this.nl_menuItems[this.numberLastItem]);

      this.contVerticalMenu.append(this.menuItemOverflow);
    }
  }

  addIconsSubMenu(menuItem) {
    let nl_menuItemUls = menuItem.querySelectorAll('ul');
    if (nl_menuItemUls.length > 0) {
      nl_menuItemUls.forEach(menuItemUl => {
        let iconDrop = document.createElement('div');
        let closestLi = menuItemUl.closest('li');

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

  closeVerticalMenu() {
    console.log('1 closeVerticalMenu    this.contVerticalMenu = ', this.contVerticalMenu);

    if (!this.contVerticalMenu.classList.contains(this.classVerticalMenuOpen)) {
      return;
    }

    for (let i = this.overflowItemsLength; i > 0; i--) {
      this.menuOverflow.append(this.nl_menuItems[this.nl_menuItems.length - i]);
    }

    this.contVerticalMenu.style.height = this.heightContVerticalMenu + 'px';
    if (this.menuItemOverflow) {
      this.menuItemOverflow.style.top = 'auto';
      this.menuItemOverflow.style.bottom = '0px';
    }

    // this.contVerticalMenu.classList.remove(this.classVerticalMenuOpen);
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
}
document.addEventListener('DOMContentLoaded', function () {
  const param = {
    classesContVerticalMenu: 'rmbt-cont-vertical-menu-0',
    classVerticalMenuOpen: 'vertical-menu-open',
    classMenuItemDropIcon: 'drop-icon',
    classMenuItemDropIconOpen: 'drop-icon-open',
    classSubMenuIOpen: 'submenu-open',
    classMenuOverflow: 'menu-overflow',
    classIconMenuOverflow: 'icon-menu-overflow',
    classMenuItemOverflow: 'menu-item-other',
    textMenuItemOverflow: 'other',
  };

  const arr_VerticalMenu = [];

  document.querySelectorAll(`.${param.classesContVerticalMenu}`).forEach(menu => {
    // new VerticalMenu(menu, param);

    arr_VerticalMenu.push(new VerticalMenu(menu, param));
  });

  // console.log('arr_VerticalMenu = ', arr_VerticalMenu);
});
