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

      this.addIconsSubMenu();
    });
    observer.observe(this.contVerticalMenu);
  }

  addIconsSubMenu() {
    this.nl_menuItems.forEach((menuItem, indexMenuItem) => {
      let bottomMenuItem = menuItem.getBoundingClientRect().bottom;
      let nl_menuItemUls = menuItem.querySelectorAll('ul');

      menuItem.style.position = 'relative';

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
                [...nl_otherSubMenusOpened]
                  .reverse()
                  .forEach(this.closeSubMenu.bind(this));
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
  }

  closeSubMenu(menu) {
    console.log('menu = ', menu);
    let dropIconOpen = menu
      .closest('li')
      .querySelector(`.${this.classMenuItemDropIconOpen}`);

    dropIconOpen.classList.remove(this.classMenuItemDropIconOpen);
    menu.classList.remove(this.classSubMenuIOpen);
  }

  closeAllSubMenus() {
    [...this.contVerticalMenu.querySelectorAll(`.${classSubMenuIOpen}`)]
      .reverse()
      .forEach(this.closeSubMenu);
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

  document.querySelectorAll(`.${param.classesContVerticalMenu}`).forEach(menu => {
    new VerticalMenu(menu, param);
  });
});
