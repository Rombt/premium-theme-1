(function () {

  const contEmails = document.querySelector('.rmbt-header-2-top-col-left__email');
  const contPhones = document.querySelector('.rmbt-header-2-top-col-left__phones');

  if (contPhones) {
    buildUl(contPhones, '.ul-toggle-wrap');
  }
  if (contEmails) {
    buildUl(contEmails, '.ul-toggle-wrap');
  }



    const emailsIcon = contEmails.querySelector('.rmbt-header-2-top-col-left__email-icon');
    const phonesIcon = contPhones.querySelector('.rmbt-header-2-top-col-left__phones-icon');

  const styleEmailsIcon = window.getComputedStyle(emailsIcon);
  const displayEmailsIcon = styleEmailsIcon.display;

  const stylePhonesIcon = window.getComputedStyle(phonesIcon);
  const displayPhonesIcon = stylePhonesIcon.display;

  console.log("displayEmailsIcon = ", displayEmailsIcon);
  console.log("displayPhonesIcon = ", displayPhonesIcon);
  
  if (displayEmailsIcon === 'block') {
    hideUl(contEmails)
  } 


  if (displayPhonesIcon === 'block') {
    hideUl(contPhones)
  }



  function hideUl(cont) {
    const nl_ul = cont.querySelectorAll('ul');
    const nl_ulToggleWrap = cont.querySelectorAll('.ul-toggle-wrap');

    nl_ul.forEach(ul => {
      ul.style.display = 'none';
    });

    nl_ulToggleWrap.forEach(ulToggleWrap => {
      ulToggleWrap.style.display = 'none';
    });


    
  }

  
  function buildUl(cont,sl_toggle) {
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
