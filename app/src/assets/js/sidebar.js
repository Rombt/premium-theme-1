function sidebarToggle() {
  const parentSidebarToggle = document.querySelector('.rmbt-hero-block-1-top-row__row');
  const sidebar = document.querySelector('.sidebar');
  const sidebarToggle = document.querySelector('.sidebar-toggle');

  if (!sidebar || !sidebarToggle) return;

  parentSidebarToggle.prepend(sidebarToggle);
  //   const parentSidebarToggle = sidebarToggle.parentElement;

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('open');

    if (sidebar.classList.contains('open')) {
      sidebar.prepend(sidebarToggle);
      sidebarToggle.classList.add('close');
    } else {
      parentSidebarToggle.prepend(sidebarToggle);
    }
  });

  document.addEventListener('click', e => {
    if (
      sidebar.classList.contains('open') &&
      !sidebar.contains(e.target) &&
      !sidebarToggle.contains(e.target)
    ) {
      sidebar.classList.remove('open');
      parentSidebarToggle.append(sidebarToggle);
    }
  });
}
sidebarToggle();
