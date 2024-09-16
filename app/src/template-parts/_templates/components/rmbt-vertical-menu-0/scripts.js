document.addEventListener('DOMContentLoaded', function () {
  const classVerticalMenuOpen = 'vertical-menu-open';
  const classMenuItemDropIcon = 'drop-icon';
  const classMenuItemDropIconOpen = 'drop-icon-open';
  const classSubMenuIOpen = 'submenu-open';

  const classMenuOverflow = 'menu-overflow';
  const classIconMenuOverflow = 'icon-menu-overflow';
  const classMenuItemOverflow = 'menu-item-other';
  const textMenuItemOverflow = 'other';

  const contVerticalMenu = document.querySelector('.rmbt-cont-vertical-menu-0');
  if (!contVerticalMenu) return;

  const nl_menuItems = contVerticalMenu.querySelectorAll('nav > ul > li');
  const rectContVerticalMenu = contVerticalMenu.getBoundingClientRect();
  const bottomContVerticalMenu = rectContVerticalMenu.bottom;
  const heightContVerticalMenu = rectContVerticalMenu.height;

  let remainingHeight = 0;
  let numberLastItem = 0;
  let menuItemOverflow;
  let menuOverflow;
  let iconMenuOverflow;

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
      if (!menuOverflow) {
        menuOverflow = document.createElement('div');
        menuOverflow.classList.add(classMenuOverflow);
        menuOverflow.style.display = 'none';
        contVerticalMenu.prepend(menuOverflow);
      }
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

  if (nl_menuItems[numberLastItem - 1]) {
    menuItemOverflow = document.createElement('div');
    menuItemOverflow.classList.add(classMenuItemOverflow);
    menuItemOverflow.innerText = textMenuItemOverflow;
    menuItemOverflow.classList.add();

    iconMenuOverflow = document.createElement('div');
    iconMenuOverflow.classList.add(classIconMenuOverflow);
    menuItemOverflow.append(iconMenuOverflow);

    const heightMenuItemOverflow =
      contVerticalMenu.getBoundingClientRect().bottom -
      nl_menuItems[numberLastItem - 1]?.getBoundingClientRect().bottom;

    menuItemOverflow.style.position = 'absolute';
    menuItemOverflow.style.height = heightMenuItemOverflow + 'px';
    menuItemOverflow.style.lineHeight = heightMenuItemOverflow + 'px';
    menuItemOverflow.style.bottom = '0px';
    menuItemOverflow.style.left = '0px';
    menuItemOverflow.style.right = '0px';

    menuOverflow.prepend(nl_menuItems[numberLastItem]);

    contVerticalMenu.append(menuItemOverflow);
  }

  const nl_overflowItems = contVerticalMenu.querySelectorAll(
    `.${classMenuOverflow} > li`
  );
  const overflowItemsLength = nl_overflowItems.length;

  document.addEventListener('click', e => {
    if (e.target === menuItemOverflow) {
      const contVerticalMenuUl = contVerticalMenu.querySelector('nav > ul');
      let heightContVerticalMenuOpen;

      if (!contVerticalMenu.classList.contains(classVerticalMenuOpen)) {
        contVerticalMenu.classList.add(classVerticalMenuOpen);
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
        menuItemOverflow.style.bottom = 'auto';
        menuItemOverflow.style.top = heightContVerticalMenuOpen + 'px';
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
    console.log('11 contVerticalMenu = ', contVerticalMenu);
    if (!contVerticalMenu.classList.contains(classVerticalMenuOpen)) {
      return;
    }
    contVerticalMenu.classList.remove(classVerticalMenuOpen);

    for (let i = overflowItemsLength; i > 0; i--) {
      menuOverflow.append(nl_menuItems[nl_menuItems.length - i]);
    }

    contVerticalMenu.style.height = heightContVerticalMenu + 'px';

    if (menuItemOverflow) {
      menuItemOverflow.style.top = 'auto';
      menuItemOverflow.style.bottom = '0px';
    }
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
