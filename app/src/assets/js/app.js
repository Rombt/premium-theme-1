import './modules/functions.js';
import './modules/dynamic_adapt.js';
import './modules/popup.js';
import './modules/spoiler.js';
import './modules/tabs.3.0.0.js';
import './modules/arrowsInputNumberStyle.js';
import './modules/HorizontalMenu.js';
import './modules/sliders.js';
import './sidebar.js';


import { typeHTML, eraseHTML, pinUntilScroll } from './modules/nimarim/effects.js'
import { NimarimChain } from './modules/nimarim/NimarimChain.js'


const heightViewport  = window.visualViewport?.height || window.innerHeight;

const node = document.querySelector('.rmbt-hero-block-1-col-left__title');
if (node) {
  const chain = new NimarimChain(node);
  chain
    .use(typeHTML, { speed: 80})
    .wait(7000)
    .use(eraseHTML, { speed: 30 })
    .wait(500)
    .play(true); // зациклено
}


const heroBockTopRow = document.querySelector('.rmbt-hero-block-1-top-row-is-inner');

if (heroBockTopRow) {
  pinUntilScroll(heroBockTopRow, heightViewport, 4, true);
}
  

//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
//  вынести в отдельный модуль
//!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
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






















// function typing(node) {
//     // const text = node.innerText;
//     const text = node.textContent;
//     node.innerText = '';
//     // node.textContent = '';
//     const arr_text = Array.from(text);

//     const timeout = 300;
//     let i = 0;

//     function typeChar() {

//         if (i < arr_text.length) {
//             // node.innerText += arr_text[i];
//             node.textContent += arr_text[i];
//             i++;
//             setTimeout(typeChar, timeout);
//         } 
//     }


//     typeChar();

// }