/**
 * для каждого имени блока нужна отдельная функция 
 * одноимённых блоков на странице может быть несколько
 * НЕ привязана к css классам
 * 
 */

export default function tabs(blockName, event='hover') {

  const nl_tabsContainers = document.querySelectorAll(`[data-rmbt-tabs-container="${blockName}"]`);

  if (nl_tabsContainers) {
    nl_tabsContainers.forEach(tabsContainer => {
      const nl_navItems = tabsContainer.querySelectorAll('[data-rmbt-tab-nav-item]');
      const nl_contentItems = tabsContainer.querySelectorAll('[data-rmbt-tab-content-item]');

      if (!nl_navItems) {
        return;
      }

      nl_navItems.forEach(navItem => {
        navItem.addEventListener(event, e => {
          const itemName = e.target.dataset.rmbtTabNavItem;
          e.target.classList.add('active');
          nl_contentItems.forEach(contentItem => {
            if (contentItem.dataset.rmbtTabContentItem == itemName) {
              contentItem.classList.add('active');
            } else {
              contentItem.classList.remove('active');
            }
          });
        });
      });

    });
  }
}
