function sidebarToggle() {
  const sidebar = document.querySelector('.sidebar');
  const sidebarToggle = document.querySelector('.sidebar-toggle');

  if (!sidebar || !sidebarToggle) return;

  const parentSidebarToggle = sidebarToggle.parentElement;

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('open');
    sidebar.prepend(sidebarToggle);
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
