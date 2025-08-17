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
  
  function hideUlMobile(container, exceptionSelector) {
    container.querySelectorAll('.visible-ul, .visible-ul-mobile').forEach(ul => {

      ul.classList.replace('visible-ul', 'hidden-ul');
      ul.classList.remove('visible-ul-mobile');
      ul.classList.add('rmbt-hidden');
      ul.style.top = 'auto';
      ul.style.height = initialHeightContPhones + 'px';
    });
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
          ul.style.top = '0px';
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

  function toggleUl(cont, icon) {
    
    const nl_ul = cont.querySelectorAll('ul');
    const nl_ulToggleWrap = cont.querySelectorAll('.ul-toggle-wrap');

    if (window.getComputedStyle(icon).display !== "none") {
  
      nl_ul.forEach(ul => {
        ul.classList.add('hidden-ul');
      });
  
      nl_ulToggleWrap.forEach(ulToggleWrap => {
        ulToggleWrap.style.display = 'none';
      });
    }else{
      nl_ul.forEach(ul => {
        ul.classList.remove('hidden-ul');
      });
  
      nl_ulToggleWrap.forEach(ulToggleWrap => {
        ulToggleWrap.style.display = 'block';
      });
    }
  }

  function buildUl(cont, sl_toggle) {
    
    const nl_ul = cont.querySelectorAll('ul');
    const toggle = cont.querySelector(sl_toggle);

    const toggleOpen = sl_toggle.replace(/[.#]/,'') + '-open';
    const toggleVisible = sl_toggle.replace(/[.#]/,'') + '-visible';
    const tempToggle = toggle.cloneNode(true);
    toggle.remove();
    
      if (!nl_ul.length > 0 && toggle) {
        return;
    }
    
    let topUl = 0;
    let leftUl = 0;
    nl_ul.forEach(ul => {
      const toggleCurrentUl = tempToggle.cloneNode(true);
      const initialHeightUl = ul.offsetHeight;

      toggleCurrentUl.classList.add(toggleVisible);
      ul.after(toggleCurrentUl);
      
      const nl_li = ul.querySelectorAll('li');
      let heightUl = 0;
      for (const li of nl_li) {
        heightUl += li.getBoundingClientRect().height;
      }
      
      toggleCurrentUl.addEventListener('click', () => {
        toggleCurrentUl.classList.toggle(toggleOpen);

        if (toggleCurrentUl.classList.contains(toggleOpen)) {
          ulOpen(ul, heightUl);
        } else {
          ulClose(ul, initialHeightUl);
        }

      });
    });


    function ulOpen(ul, heightUl) {
      ul.style.height = heightUl + 'px';
      ul.classList.add('rmbt-visible_drop');
    }
    function ulClose(ul, initialHeightUl){
      ul.style.height = initialHeightUl + 'px';
      ul.classList.remove('rmbt-visible_drop');
    }
  }


  

})();
