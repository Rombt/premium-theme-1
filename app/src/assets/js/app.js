import './modules/functions.js';
import './modules/dynamic_adapt.js';
import './modules/popup.js';
import './modules/spoiler.js';
import './modules/tabs.js';
import './modules/arrowsInputNumberStyle.js';
import './modules/HorizontalMenu.js';
import './modules/sliders.js';
import './sidebar.js';

import { typeHTML } from './modules/effects.js'




/** //todo
 * набор символов через разные промежутки времени
 * перед следующим циклом текст очень резко пропадает нужен какой то переходной эффект, затухание например
    //!! но лучше ещё один эффект - стирание текста
 */

const node = document.querySelector('.rmbt-hero-block-1-col-left__title');
const mainTitleTyping = async () => {
  await typeHTML(node, 170);
  setTimeout(mainTitleTyping, 300);
};
mainTitleTyping();


  























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