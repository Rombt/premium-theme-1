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
  const email_link = document.querySelector('.rmbt-header-2-top-col-left__email a');

  const phones_icon = document.querySelector('.rmbt-header-2-top-col-left__phones > svg');
  const phones_block = document.querySelector('.rmbt-header-2-top-col-left__phones');
  const nl_phones_links = document.querySelectorAll(
    '.rmbt-header-2-top-col-left__phones ul'
  );

  if (getComputedStyle(email_icon).display !== 'none') {
    email_link.classList.add('hidden');
  }
  if (getComputedStyle(phones_icon).display !== 'none') {
    nl_phones_links.forEach(phones_link => {
      phones_link.classList.add('hidden');
    });
  }

  window.addEventListener('resize', () => {
    if (getComputedStyle(email_icon).display !== 'none') {
      email_link.classList.add('hidden');
    } else {
      email_link.classList.remove('hidden');
    }
    if (getComputedStyle(phones_icon).display !== 'none') {
      nl_phones_links.forEach(phones_link => {
        phones_link.classList.add('hidden');
      });
    } else {
      nl_phones_links.forEach(phones_link => {
        phones_link.classList.remove('hidden');
      });
    }
  });

  document.addEventListener('click', e => {
    if (email_icon.contains(e.target)) {
      email_link.classList.add('visible-email');
      email_icon.classList.add('hidden');
      phones_icon.classList.add('hidden');
    } else if (phones_icon.contains(e.target)) {
      nl_phones_links.forEach(phones_link => {
        phones_link.classList.remove('hidden');
      });

      phones_icon.classList.add('hidden');
      email_icon.classList.add('hidden');
    } else {
      if (!email_link.contains(e.target) && !phones_block.contains(e.target)) {
        email_link.classList.remove('visible-email');
        email_icon.classList.remove('hidden');
        phones_icon.classList.remove('hidden');

        nl_phones_links.forEach(phones_link => {
          phones_link.classList.add('hidden');
        });
      }
    }
  });
})();
