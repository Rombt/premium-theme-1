import { toggleUl, buildUl } from "../../../assets/js/common.js";


(function () {

  const contEmails = document.querySelector('.rmbt-header-2-top-col-left__email');
  const contPhones = document.querySelector('.rmbt-header-2-top-col-left__phones');

  const initialHeightContPhones = contPhones.offsetHeight;

  if (contPhones) {
    buildUl(contPhones, '.ul-toggle-wrap');
  }
  if (contEmails) {
    buildUl(contEmails, '.ul-toggle-wrap');
  }

  const iconEmail = contEmails.querySelector('.rmbt-header-2-top-col-left__email-icon');
  const iconPhone = contPhones.querySelector('.rmbt-header-2-top-col-left__phones-icon');
  
  toggleUl(contEmails, iconEmail);
  toggleUl(contPhones, iconPhone);
  window.addEventListener("resize", () => {
    toggleUl(contEmails, iconEmail);
    toggleUl(contPhones, iconPhone);
  });

  iconEmail.addEventListener('click', e => {
    showUlMobile(iconEmail);
  })
  iconPhone.addEventListener('click', e => {
    showUlMobile(iconPhone);
  })

  
  document.addEventListener('click', e => {
    if (!e.target.closest('.visible-ul') || !e.target.closest('.visible-ul-mobile')) {
      
      if (!e.target.closest('.rmbt-header-2-top-col-left__email-icon')) {
        hideUlMobile(contEmails);
      }
      if (!e.target.closest('.rmbt-header-2-top-col-left__phones-icon')) {
        hideUlMobile(contPhones);
      }

    }

  });
  
  function hideUlMobile(container) {
    container.querySelectorAll('.visible-ul, .visible-ul-mobile').forEach(ul => {
      ul.classList.replace('visible-ul', 'hidden-ul');
      ul.classList.remove('visible-ul-mobile');
      ul.style.height = initialHeightContPhones + 'px';
    });

    const icon = container.querySelector('visible-ul-icon');
    if (icon) {
      icon.classList.remove('visible-ul-icon');
    }
  }
  
  function showUlMobile(icon) {
    
    const viewportWidth = window.innerWidth;
    const parentDiv = icon.closest('div');
    const nl_ul = parentDiv.querySelectorAll('ul');


    nl_ul.forEach((ul,i) => {
      const nl_li = ul.querySelectorAll('li');
      let heightUl = 0;

      for (const li of nl_li) {
        heightUl += li.getBoundingClientRect().height;
      }
      ul.classList.remove('hidden-ul');
      ul.classList.remove('rmbt-hidden');
      ul.style.height = heightUl + 'px';

      if (viewportWidth < 450) {
        ul.classList.add('visible-ul-mobile');
          
        if (i > 0) {
          ul.style.left = widthPrevUl + 'px';
        } 
          
      }else {
        ul.classList.add('visible-ul');

        if (i > 0) {
          const widthPrevUl = nl_ul[i - 1].getBoundingClientRect().width;
          ul.style.left = widthPrevUl + 'px';
          } 
      }
    });
  }




  

})();
