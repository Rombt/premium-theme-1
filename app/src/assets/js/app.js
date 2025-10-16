import './modules/functions.js';
import './modules/dynamic_adapt.js';
import './modules/popup.js';
import './modules/spoiler.js';
import './modules/tabs.js';
import './modules/arrowsInputNumberStyle.js';
import './modules/HorizontalMenu.js';
import './modules/sliders.js';

import './sidebar.js';
// let tl = gsap.timeline();

// tl.to('.test-box__green', { duration: 2, x: 800, ease: 'elastic' });
// tl.to('.test-box__green', { duration: 2, y: 200, ease: 'elastic' });
// tl.to('.test-box__green', { duration: 2, x: 0, ease: 'elastic' });
// tl.to('.test-box__green', { duration: 2, y: 0, ease: 'elastic' });



//================= Animation effects =================


const node = document.querySelector('.rmbt-hero-block-1-col-left__title');
typeHTML(node,170);



//!! как быть с высотой которая меняется при уменьшению экрана


//------------ Typing ------------

async function typeHTML(node, speed = 50) {
    const content = node.innerHTML;
    const heightNode = node.offsetHeight;
    node.style.minHeight = heightNode + 'px';
    node.innerHTML = ''; // очищаем
    const temp = document.createElement('div');
    temp.innerHTML = content;
  
    async function typeElement(el, target) {
      for (const child of el.childNodes) {
        if (child.nodeType === Node.TEXT_NODE) {
          const text = child.textContent;
          await typeText(text, target);
        } else if (child.nodeType === Node.ELEMENT_NODE) {
          const newEl = child.cloneNode(false);

          target.appendChild(newEl);
          await typeElement(child, newEl);
        }
      }
    }
  
    function typeText(text, target) {
      return new Promise(resolve => {
        let i = 0;
        function typeChar() {
          if (i < text.length) {
            target.append(text[i++]);
            setTimeout(typeChar, speed);
          } else {
            resolve();
          }
        }
        typeChar();
      });
    }
  
    await typeElement(temp, node);
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