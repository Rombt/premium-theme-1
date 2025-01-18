const tabsContainers = document.querySelectorAll('.tabs');

if (tabsContainers) {
  tabsContainers.forEach(tabsContainer => {
    tabsContainer.addEventListener('click', e => {
      const tab = e.target.closest('.tabs__title');
      if (!tab) return;

      const tabName = tab.dataset.tab;
      const tabsTitles = tabsContainer.querySelectorAll('.tabs__title');
      tabsTitles.forEach(tabTitle => {
        if (tabTitle === tab) {
          tabTitle.classList.add('tabs__title-active');
        } else {
          tabTitle.classList.remove('tabs__title-active');
        }
      });

      const tabsItems = tabsContainer.querySelectorAll('.tabs__body');
      tabsItems.forEach(tabItem => {
        if (tabItem.getAttribute('data-tab-name') === tabName) {
          tabItem.classList.add('tabs__body-active');
        } else {
          tabItem.classList.remove('tabs__body-active');
        }
      });
    });
  });
}
