function sidebarToggle() {
  const sidebar = document.querySelector('.sidebar');
  const sidebarToggle = document.querySelector('.sidebar-toggle');

  if (!sidebar || !sidebarToggle) {
    return;
  }

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('open');
  });

  document.addEventListener('click', e => {
    if (
      sidebar.classList.contains('open') &&
      !sidebar.contains(e.target) &&
      !sidebarToggle.contains(e.target)
    ) {
      sidebar.classList.remove('open');
    }
  });
}
sidebarToggle();
