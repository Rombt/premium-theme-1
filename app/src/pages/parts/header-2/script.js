(function () {
  let arr_li = [];
  const nl_ul = document.querySelectorAll('.rmbt-header-2-top-col-left__phones > ul');

  nl_ul.forEach((ul, i) => {
    arr_li[i] = ul.querySelectorAll('li');
    if (arr_li[i].length == 1) {
      return;
    }

    ul.classList.add('drop_ul');
    const icon_drop = document.createElement('div');
    icon_drop.classList.add('icon_drop');
    ul.prepend(icon_drop);

    icon_drop.addEventListener('click', e => {
      if (icon_drop.classList.contains('open')) {
        arr_li[i].forEach((li, i) => {
          if (i == 0) return;
          li.classList.add('hidden');
          li.classList.remove('visible');
          li.style.top = 0;
        });
      } else {
        arr_li[i].forEach((li, i) => {
          if (i == 0) return;
          li.classList.remove('hidden');
          li.classList.add('visible');
          li.style.top = i * li.offsetHeight + 'px';
        });
      }

      icon_drop.classList.toggle('open');

      console.log('e = ', e);
    });
  });

  arr_li.forEach(nl_li => {
    nl_li.forEach((li, i) => {
      if (i == 0) return;
      li.classList.add('hidden');
    });
  });

  const email_icon = document.querySelector('.rmbt-header-2-top-col-left__email > svg');
  const email_link = document.querySelector('.rmbt-header-2-top-col-left__email > a');

  const phones_icon = document.querySelector('.rmbt-header-2-top-col-left__phones > svg');
  const phones_links = document.querySelector('.rmbt-header-2-top-col-left__phones > ul');

  email_icon.addEventListener('click', e => {
    email_link.style.display = 'block';
  });
  phones_icon.addEventListener('click', e => {
    phones_links.style.display = 'block';
  });
})();
