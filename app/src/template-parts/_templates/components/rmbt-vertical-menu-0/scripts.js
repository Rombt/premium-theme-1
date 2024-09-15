document.addEventListener('DOMContentLoaded', function () {
  const classVerticalMenuOpen = 'vertical-menu-open';
  const classMenuItemDropIcon = 'drop-icon';
  const classMenuItemDropIconOpen = 'drop-icon-open';
  const classSubMenuIOpen = 'submenu-open';

  const contVerticalMenu = document.querySelector('.rmbt-cont-vertical-menu-0');
  if (!contVerticalMenu) return;

  const menuOverflow = contVerticalMenu.querySelector('.menu-overflow');
  const nl_menuItems = contVerticalMenu.querySelectorAll('nav > ul > li');
  const rectContVerticalMenu = contVerticalMenu.getBoundingClientRect();
  const bottomContVerticalMenu = rectContVerticalMenu.bottom;
  const heightContVerticalMenu = rectContVerticalMenu.height;
  const menuIconOther = contVerticalMenu.querySelector('.menu-icon-other');

  let remainingHeight = 0;
  let numberLastItem = 0;

  nl_menuItems.forEach((menuItem, indexMenuItem) => {
    let bottomMenuItem = menuItem.getBoundingClientRect().bottom;
    menuItem.style.position = 'relative';

    let nl_menuItemUls = menuItem.querySelectorAll('ul');
    if (nl_menuItemUls.length > 0) {
      nl_menuItemUls.forEach(menuItemUl => {
        let iconDrop = document.createElement('div');
        let closestLi = menuItemUl.closest('li');
        closestLi.style.position = 'relative';
        iconDrop.classList.add(classMenuItemDropIcon);

        iconDrop.addEventListener('click', e => {
          let subMenu = closestLi.querySelector('ul');

          if (
            !e.target.classList.contains(classMenuItemDropIconOpen) &&
            !subMenu.classList.contains(classSubMenuIOpen)
          ) {
            let nl_otherSubMenusOpened = closestLi.parentNode.querySelectorAll(
              `li .${classSubMenuIOpen}`
            );
            if (nl_otherSubMenusOpened.length > 0) {
              [...nl_otherSubMenusOpened].reverse().forEach(closeSubMenu);
            }
            subMenu.classList.add(classSubMenuIOpen);
            iconDrop.classList.add(classMenuItemDropIconOpen);
          } else {
            closeSubMenu(subMenu);
          }
        });

        closestLi.closest('li').append(iconDrop);
      });
    }

    if (bottomMenuItem > bottomContVerticalMenu) {
      if (remainingHeight === 0) {
        remainingHeight =
          (bottomContVerticalMenu -
            nl_menuItems[indexMenuItem - 1].getBoundingClientRect().bottom) /
          indexMenuItem;

        for (let i = 0; i < nl_menuItems.length; i++) {
          if (i < indexMenuItem) {
            nl_menuItems[i].style.top = remainingHeight * (i + 1) + 'px';
          } else {
            numberLastItem = i - 1;
            break;
          }
        }
      }
      menuOverflow.append(menuItem);
    }
  });

  const heightMenuIconOther =
    contVerticalMenu.getBoundingClientRect().bottom -
    nl_menuItems[numberLastItem - 1].getBoundingClientRect().bottom +
    'px';

  menuIconOther.style.position = 'absolute';
  menuIconOther.style.height = heightMenuIconOther;
  menuIconOther.style.lineHeight = heightMenuIconOther;
  menuIconOther.style.bottom = '0px';
  menuIconOther.style.left = '0px';
  menuIconOther.style.right = '0px';

  menuOverflow.prepend(nl_menuItems[numberLastItem]);
  contVerticalMenu.append(menuIconOther);

  const nl_overflowItems = contVerticalMenu.querySelectorAll('.menu-overflow > li');
  const overflowItemsLength = nl_overflowItems.length;

  document.addEventListener('click', e => {
    if (e.target === menuIconOther) {
      const contVerticalMenuUl = contVerticalMenu.querySelector('nav > ul');

      let heightContVerticalMenuOpen;
      contVerticalMenu.classList.toggle(classVerticalMenuOpen);

      if (contVerticalMenu.classList.contains(classVerticalMenuOpen)) {
        contVerticalMenuUl.style.position = 'relative';

        nl_overflowItems.forEach((overflowItem, i) => {
          overflowItem.style.top = remainingHeight * (numberLastItem + i + 1) + 'px';
          contVerticalMenuUl.append(overflowItem);

          if (i === overflowItemsLength - 1) {
            heightContVerticalMenuOpen =
              overflowItem.getBoundingClientRect().bottom -
              contVerticalMenu.getBoundingClientRect().top;
          }
        });

        contVerticalMenu.style.height = heightContVerticalMenuOpen + 'px';
        menuIconOther.style.bottom = 'auto';
        menuIconOther.style.top = heightContVerticalMenuOpen + 'px';
      } else {
        closeVerticalMenu();
      }
    } else if (
      e.target !== contVerticalMenu &&
      !e.target.classList.contains(classMenuItemDropIcon) &&
      !e.target.classList.contains(classMenuItemDropIconOpen)
    ) {
      closeVerticalMenu();
      closeAllSubMenus();
    }
  });

  function closeVerticalMenu() {
    if (contVerticalMenu.classList.contains(classVerticalMenuOpen)) {
      contVerticalMenu.classList.remove(classVerticalMenuOpen);
    }

    for (let i = overflowItemsLength; i > 0; i--) {
      menuOverflow.append(nl_menuItems[nl_menuItems.length - i]);
    }

    contVerticalMenu.style.height = heightContVerticalMenu + 'px';
    menuIconOther.style.top = 'auto';
    menuIconOther.style.bottom = '0px';
  }

  function closeSubMenu(menu) {
    let dropIconOpen = menu.closest('li').querySelector(`.${classMenuItemDropIconOpen}`);

    dropIconOpen.classList.remove(classMenuItemDropIconOpen);
    menu.classList.remove(classSubMenuIOpen);
  }

  function closeAllSubMenus() {
    [...contVerticalMenu.querySelectorAll(`.${classSubMenuIOpen}`)]
      .reverse()
      .forEach(closeSubMenu);
  }

  document.addEventListener('keydown', e => {
    if (e.key === 27 || e.keyCode === 27) {
      closeVerticalMenu();
      closeAllSubMenus();
    }
  });
});
