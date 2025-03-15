function sidebarToggle() {
  const sidebar = document.querySelector('.sidebar');
  const sidebarToggle = document.querySelector('.sidebar-toggle');

  if (!sidebar || !sidebarToggle) {
    return;
  }

  sidebarToggle.addEventListener('click', () => {
    sidebar.classList.toggle('open');
  });
}
sidebarToggle();
