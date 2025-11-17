


//------------ Scroll ------------


/**
 * Фиксирует указанный элемент на его исходной позиции на странице, 
 * для этого элемент переносится в body с position: absolute, а его место замещается placeholder?
 * до тех пор, пока страница не будет прокручена на заданное количество пикселей (offset). 
 * После достижения прокрутки offset элемент возвращается в исходное позиционирование, 
 * а обработчик скролла автоматически удаляется. 
 * Оптимизировано с использованием requestAnimationFrame для минимальной нагрузки на CPU.
 */

export function pinUntilScroll (element, offset, zIndex = 0) {
  if (!element) return;
  
    const originalPosition = window.getComputedStyle(element).position;
    const originalStyle = window.getComputedStyle(element);
    const rectByDoc = getCoordinatesByDocument(element);
    const body = document.querySelector('body');
    
    // создаём placeholder что бы при извлечении элемента из потока не порвало вёрстку
    // стили при этом не должны зависеть от родителя!
    const placeholder = document.createElement('div');
    placeholder.style.top = rectByDoc.top + 'px';
    placeholder.style.left = rectByDoc.left + 'px';
    placeholder.style.width = rectByDoc.width + 'px';
    placeholder.style.height = rectByDoc.height + 'px';
  
    // создал и вставил заглушку
    const parent = element.parentNode;
    const nextSibling = element.nextSibling; // может быть null, если элемент последний
    if (nextSibling) {
      parent.insertBefore(placeholder, nextSibling);
    } else {
        parent.appendChild(placeholder);
    }
    
    element.style.position = 'fixed';
    element.style.width = rectByDoc.width + 'px';
    element.style.zIndex = zIndex;

    let ticking = false;
    function checkScroll() {
        const y = window.scrollY;

        if (y >= offset) {

          const rectByDoc = getCoordinatesByDocument(element);
          element.style.position = 'absolute';
          body.appendChild(element);
          element.style.top = rectByDoc.top + 'px';
          element.style.left = rectByDoc.left + 'px';
          element.style.width = rectByDoc.width + 'px';
          element.style.marginTop = 0 + 'px'

          window.removeEventListener('scroll', onScroll);
          return;
        }

        ticking = false;
    }

    function onScroll() {
        if (!ticking) {
            ticking = true;
            requestAnimationFrame(checkScroll);
        }
    }

    window.addEventListener('scroll', onScroll);
};


//------------ Typing ------------

export async function typeHTML(node, { speed = 50 } = {}) {
  // Сохраняем исходный контент один раз внутри функции
  const originalContent = node.dataset.originalContent || node.innerHTML;
  node.dataset.originalContent = originalContent; // сохраняем на элементе для повторного цикла

  // Фиксируем высоту, чтобы верстка не прыгала
  const heightNode = node.offsetHeight;
  node.style.minHeight = heightNode + 'px';

  node.innerHTML = ''; // очищаем перед печатью
  const temp = document.createElement('div');
  temp.innerHTML = originalContent;

  async function typeElement(el, target) {
    for (const child of el.childNodes) {
      if (child.nodeType === Node.TEXT_NODE) {
        await typeText(child.textContent, target);
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
      (function typeChar() {
        if (i < text.length) {
          target.append(text[i++]);
          setTimeout(typeChar, speed);
        } else resolve();
      })();
    });
  }

  await typeElement(temp, node);
}

export async function eraseHTML(node, { speed = 50 } = {}) {
  const heightNode = node.offsetHeight;
  node.style.minHeight = heightNode + 'px';

  async function eraseElement(el) {
    const children = Array.from(el.childNodes).reverse();
    for (const child of children) {
      if (child.nodeType === Node.TEXT_NODE) {
        await eraseText(child);
      } else if (child.nodeType === Node.ELEMENT_NODE) {
        await eraseElement(child);
        child.remove();
      }
    }
  }

  function eraseText(textNode) {
    return new Promise(resolve => {
      let text = textNode.textContent;
      (function eraseChar() {
        if (text.length > 0) {
          text = text.slice(0, -1);
          textNode.textContent = text;
          setTimeout(eraseChar, speed);
        } else {
          textNode.remove();
          resolve();
        }
      })();
    });
  }

  await eraseElement(node);
}

  
/*===========================================================*/
/*==========================   HELPERS  =====================*/
/*===========================================================*/

function getCoordinatesByDocument(element) {
  const rect = element.getBoundingClientRect();
  const scrollY = window.scrollY || window.pageYOffset;
  const scrollX = window.scrollX || window.pageXOffset;

  return {
      top: rect.top + scrollY,
      left: rect.left + scrollX,
      right: rect.right + scrollX,
      bottom: rect.bottom + scrollY,
      width: rect.width,
      height: rect.height
  };
}