import './modules/functions.js';
import './modules/dynamic_adapt.js';
import './modules/popup.js';
import './modules/spoiler.js';
import './modules/tabs.3.0.0.js';
import './modules/arrowsInputNumberStyle.js';
import './modules/HorizontalMenu.js';
import './modules/sliders.js';
import './sidebar.js';

import tabs from './modules/tabs.3.0.0.js';
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
  

tabs('rmbt-contacts-tabs', 'mouseenter');























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