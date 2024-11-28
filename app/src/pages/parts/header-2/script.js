(function () {
  let arr_li = [];
  const nl_ul = document.querySelectorAll('.rmbt-header-2-top-col-left__phones > ul');

  nl_ul.forEach((ul, i) => {
    arr_li[i] = ul.querySelectorAll('li');
    if (arr_li[i].length == 1) {
      return;
    }

    ul.classList.add('drop_ul');
  });

  arr_li.forEach(nl_li => {
    nl_li.forEach((li, i) => {
      if (i == 0) return;
      li.classList.add('hidden');
    });
  });
})();
