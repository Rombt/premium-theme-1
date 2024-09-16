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

    this.processingPressKeys();

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

  closeVerticalMenu() {
    // if (!contVerticalMenu.classList.contains(classVerticalMenuOpen)) {
    //   return;
    // }
    // contVerticalMenu.classList.remove(classVerticalMenuOpen);
    // for (let i = overflowItemsLength; i > 0; i--) {
    //   menuOverflow.append(nl_menuItems[nl_menuItems.length - i]);
    // }
    // contVerticalMenu.style.height = heightContVerticalMenu + 'px';
    // if (menuItemOverflow) {
    //   menuItemOverflow.style.top = 'auto';
    //   menuItemOverflow.style.bottom = '0px';
    // }
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

  document.querySelectorAll(`.${param.classesContVerticalMenu}`).forEach(menu => {
    new VerticalMenu(menu, param);
  });
});

// const nl_contVerticalMenus = document.querySelectorAll(`.${classesContVerticalMenu}`);
// if (!nl_contVerticalMenus.length === 0) return;

// nl_contVerticalMenus.forEach(contVerticalMenu => {
//   const observer = new ResizeObserver(entries => {
//     const nl_menuItems = contVerticalMenu.querySelectorAll('nav > ul > li');
//     const rectContVerticalMenu = contVerticalMenu.getBoundingClientRect();
//     const bottomContVerticalMenu = rectContVerticalMenu.bottom;
//     const heightContVerticalMenu = rectContVerticalMenu.height;

//     let remainingHeight = 0;
//     let numberLastItem = 0;
//     let menuItemOverflow;
//     let menuOverflow;
//     let iconMenuOverflow;

//     console.log('------------- contVerticalMenu = ', contVerticalMenu);
//     // console.log('00 menuOverflow = ', menuOverflow);
//     // console.log('   nl_menuItems = ', nl_menuItems);

//     nl_menuItems.forEach((menuItem, indexMenuItem) => {
//       let bottomMenuItem = menuItem.getBoundingClientRect().bottom;
//       menuItem.style.position = 'relative';
//       let nl_menuItemUls = menuItem.querySelectorAll('ul');
//       if (nl_menuItemUls.length > 0) {
//         nl_menuItemUls.forEach(menuItemUl => {
//           let iconDrop = document.createElement('div');
//           let closestLi = menuItemUl.closest('li');
//           closestLi.style.position = 'relative';
//           iconDrop.classList.add(classMenuItemDropIcon);
//           iconDrop.addEventListener('click', e => {
//             let subMenu = closestLi.querySelector('ul');
//             if (
//               !e.target.classList.contains(classMenuItemDropIconOpen) &&
//               !subMenu.classList.contains(classSubMenuIOpen)
//             ) {
//               let nl_otherSubMenusOpened = closestLi.parentNode.querySelectorAll(
//                 `li .${classSubMenuIOpen}`
//               );
//               if (nl_otherSubMenusOpened.length > 0) {
//                 [...nl_otherSubMenusOpened].reverse().forEach(closeSubMenu);
//               }
//               subMenu.classList.add(classSubMenuIOpen);
//               iconDrop.classList.add(classMenuItemDropIconOpen);
//             } else {
//               closeSubMenu(subMenu);
//             }
//           });
//           closestLi.closest('li').append(iconDrop);
//         });
//       }

//       if (bottomMenuItem > bottomContVerticalMenu) {
//         console.log('11 menuOverflow = ', menuOverflow);

//         if (!menuOverflow) {
//           menuOverflow = document.createElement('div');
//           menuOverflow.classList.add(classMenuOverflow);
//           menuOverflow.style.display = 'none';

//           contVerticalMenu.prepend(menuOverflow);
//         }

//         console.log(
//           'nl_menuItems[indexMenuItem - 1] = ',
//           nl_menuItems[indexMenuItem - 1]
//         );

//         if (remainingHeight === 0) {
//           remainingHeight =
//             (bottomContVerticalMenu -
//               nl_menuItems[indexMenuItem - 1].getBoundingClientRect().bottom) /
//             indexMenuItem;
//           for (let i = 0; i < nl_menuItems.length; i++) {
//             if (i < indexMenuItem) {
//               nl_menuItems[i].style.top = remainingHeight * (i + 1) + 'px';
//             } else {
//               numberLastItem = i - 1;
//               break;
//             }
//           }
//         }
//         menuOverflow.append(menuItem);
//       }
//     });

//     if (nl_menuItems[numberLastItem - 1]) {
//       menuItemOverflow = document.createElement('div');
//       menuItemOverflow.classList.add(classMenuItemOverflow);
//       menuItemOverflow.innerText = textMenuItemOverflow;
//       menuItemOverflow.classList.add();

//       iconMenuOverflow = document.createElement('div');
//       iconMenuOverflow.classList.add(classIconMenuOverflow);
//       menuItemOverflow.append(iconMenuOverflow);

//       const heightMenuItemOverflow =
//         contVerticalMenu.getBoundingClientRect().bottom -
//         nl_menuItems[numberLastItem - 1]?.getBoundingClientRect().bottom;

//       menuItemOverflow.style.position = 'absolute';
//       menuItemOverflow.style.height = heightMenuItemOverflow + 'px';
//       menuItemOverflow.style.lineHeight = heightMenuItemOverflow + 'px';
//       menuItemOverflow.style.bottom = '0px';
//       menuItemOverflow.style.left = '0px';
//       menuItemOverflow.style.right = '0px';

//       menuOverflow.prepend(nl_menuItems[numberLastItem]);

//       contVerticalMenu.append(menuItemOverflow);
//     }

//     const nl_overflowItems = contVerticalMenu.querySelectorAll(
//       `.${classMenuOverflow} > li`
//     );
//     const overflowItemsLength = nl_overflowItems.length;

//     document.addEventListener('click', e => {
//       if (e.target === menuItemOverflow) {
//         const contVerticalMenuUl = contVerticalMenu.querySelector('nav > ul');
//         let heightContVerticalMenuOpen;

//         if (!contVerticalMenu.classList.contains(classVerticalMenuOpen)) {
//           contVerticalMenu.classList.add(classVerticalMenuOpen);
//           contVerticalMenuUl.style.position = 'relative';
//           nl_overflowItems.forEach((overflowItem, i) => {
//             overflowItem.style.top = remainingHeight * (numberLastItem + i + 1) + 'px';
//             contVerticalMenuUl.append(overflowItem);

//             if (i === overflowItemsLength - 1) {
//               heightContVerticalMenuOpen =
//                 overflowItem.getBoundingClientRect().bottom -
//                 contVerticalMenu.getBoundingClientRect().top;
//             }
//           });

//           contVerticalMenu.style.height = heightContVerticalMenuOpen + 'px';
//           menuItemOverflow.style.bottom = 'auto';
//           menuItemOverflow.style.top = heightContVerticalMenuOpen + 'px';
//         } else {
//           closeVerticalMenu();
//         }
//       } else if (
//         e.target !== contVerticalMenu &&
//         !e.target.classList.contains(classMenuItemDropIcon) &&
//         !e.target.classList.contains(classMenuItemDropIconOpen)
//       ) {
//         closeVerticalMenu();
//         closeAllSubMenus();
//       }
//     });

//     function closeVerticalMenu() {
//       if (!contVerticalMenu.classList.contains(classVerticalMenuOpen)) {
//         return;
//       }
//       contVerticalMenu.classList.remove(classVerticalMenuOpen);

//       for (let i = overflowItemsLength; i > 0; i--) {
//         menuOverflow.append(nl_menuItems[nl_menuItems.length - i]);
//       }

//       contVerticalMenu.style.height = heightContVerticalMenu + 'px';

//       if (menuItemOverflow) {
//         menuItemOverflow.style.top = 'auto';
//         menuItemOverflow.style.bottom = '0px';
//       }
//     }

//     function closeSubMenu(menu) {
//       let dropIconOpen = menu
//         .closest('li')
//         .querySelector(`.${classMenuItemDropIconOpen}`);

//       dropIconOpen.classList.remove(classMenuItemDropIconOpen);
//       menu.classList.remove(classSubMenuIOpen);
//     }

//     function closeAllSubMenus() {
//       [...contVerticalMenu.querySelectorAll(`.${classSubMenuIOpen}`)]
//         .reverse()
//         .forEach(closeSubMenu);
//     }

//     document.addEventListener('keydown', e => {
//       if (e.key === 27 || e.keyCode === 27) {
//         closeVerticalMenu();
//         closeAllSubMenus();
//       }
//     });
//   });
//   observer.observe(contVerticalMenu);
// });
