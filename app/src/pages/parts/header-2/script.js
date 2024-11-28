(function () {
  const nl_li = document.querySelectorAll('.rmbt-header-2-top-col-left__phones > ul li');
  console.log('nl_li = ', nl_li);

  if (nl_li.length == 1) {
    return;
  }

  nl_li.forEach((li, i) => {
    if (i == 0) return;
    li.classList.add('hidden');
  });
})();
