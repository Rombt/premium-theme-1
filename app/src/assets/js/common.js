/**
 * In this file is collection of a little but useful UI function 
*/





export function toggleUl(cont, icon) {
    
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
  
  export function buildUl(cont, sl_toggle, ulStyleName='') {
    
    const nl_ul = cont.querySelectorAll('ul');
    const toggle = cont.querySelector(sl_toggle);
    
    const toggleOpen = sl_toggle.replace(/[.#]/,'') + '-open';
    const toggleVisible = sl_toggle.replace(/[.#]/,'') + '-visible';
    
      if (!nl_ul.length > 0 && toggle) {
        return;
    }
    
    nl_ul.forEach(ul => {
      const initialHeightUl = ul.offsetHeight;
  
      toggle.classList.add(toggleVisible);
      ul.append(toggle);
      
      const nl_li = ul.querySelectorAll('li');
      let heightUl = 0;
      for (const li of nl_li) {
        heightUl += li.getBoundingClientRect().height;
      }
      
      toggle.addEventListener('click', () => {
        toggle.classList.toggle(toggleOpen);
        
        if (ulStyleName) {
          ul.classList.toggle(ulStyleName);
        }
  
        if (toggle.classList.contains(toggleOpen)) {
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