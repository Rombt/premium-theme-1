/**
 * для каждого имени блока нужна отдельная функция 
 * одноимённых блоков на странице может быть несколько
 * НЕ привязана к css классам
 * 
 */

export default function tabs(blockName, event='hover') {

  const nl_tabsContainers = document.querySelectorAll(`[data-rmbt-tabs-container="${blockName}"]`);
  if (nl_tabsContainers.length == 0) {
    return;
   }

  nl_tabsContainers.forEach(tabsContainer => {
    
    const nl_navItems = tabsContainer.querySelectorAll('[data-rmbt-tab-nav-item]');
    const nl_contentItems = tabsContainer.querySelectorAll('[data-rmbt-tab-content-item]');
    if (nl_navItems.length == 0 || nl_contentItems.length == 0) return;

    nl_navItems.forEach(navItem => {
      navItem.addEventListener(event, e => {

        const navItem = e.target.closest('[data-rmbt-tab-nav-item]');
        if (!navItem) return;
        const itemName = navItem.dataset.rmbtTabNavItem;
        if (!itemName) return;

        nl_navItems.forEach(navItem => {
          if (navItem.dataset.rmbtTabNavItem == itemName) {
            navItem.classList.add('active');
          } else {
            navItem.classList.remove('active');
          }            
        });

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

{/* 
  
<div class="rmbt-slide-in-tabs" data-rmbt-tabs-container="rmbt-contacts-tabs">
  <div class="rmbt-slide-in-tabs-content">
      <div class="rmbt-slide-in-tabs-content__item" data-rmbt-tab-content-item="tab_1">

      </div>
      <div class="rmbt-slide-in-tabs-content__item" data-rmbt-tab-content-item="tab_2">

      </div>
      <div class="rmbt-slide-in-tabs-content__item" data-rmbt-tab-content-item="tab_3">

      </div>
  </div>
  <div class="rmbt-slide-in-tabs-nav">
      <div class="rmbt-slide-in-tabs-nav__item" data-rmbt-tab-nav-item="tab_1">
      tab_1
      </div>
      <div class="rmbt-slide-in-tabs-nav__item" data-rmbt-tab-nav-item="tab_2">
      tab_2
      </div>
      <div class="rmbt-slide-in-tabs-nav__item" data-rmbt-tab-nav-item="tab_3">
      tab_3
      </div>
  </div>
</div> 

*/}
