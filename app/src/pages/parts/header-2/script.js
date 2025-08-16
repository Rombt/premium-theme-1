(function () {

  const contEmails = document.querySelector('.rmbt-header-2-top-col-left__email');
  const contPhones = document.querySelector('.rmbt-header-2-top-col-left__phones');

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
    toggleUlMobile(iconEmail);
  })
  
  
  function toggleUlMobile(icon) {
    
    // получить родительский контейнер
    // получить все ul в этом контейнере
    // получить все li и рассчитать высоту ul 
    // спрятать icon 
    // открыть ul
    
    const parentDiv = icon.closest('div');
    const nl_ul = parentDiv.querySelectorAll('ul');

    nl_ul.forEach(ul => {
      
      const nl_li = ul.querySelectorAll('li');
      let heightUl = 0;
      for (const li of nl_li) {
        heightUl += li.getBoundingClientRect().height;
      }
      ul.style.display = 'block';
      ul.style.height = heightUl + 'px';

      //!!!!!


    });


    
    
    
    
    

  }





  function toggleUl(cont, icon) {
    
    const nl_ul = cont.querySelectorAll('ul');
    const nl_ulToggleWrap = cont.querySelectorAll('.ul-toggle-wrap');

    if (window.getComputedStyle(icon).display !== "none") {
  
      nl_ul.forEach(ul => {
        ul.style.display = 'none';
      });
  
      nl_ulToggleWrap.forEach(ulToggleWrap => {
        ulToggleWrap.style.display = 'none';
      });
    }else{
      nl_ul.forEach(ul => {
        ul.style.display = 'block';
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
