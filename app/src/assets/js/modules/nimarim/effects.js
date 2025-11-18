


//------------ Scroll ------------


/**
 * Фиксирует указанный элемент на его исходной позиции на странице, 
 * для этого элемент переносится в body с position: absolute, а его место замещается placeholder,
 * до тех пор, пока страница не будет прокручена на заданное количество пикселей (offset). 
 * после достижения установленного предела элемент отлипает и скрывается за верхним краем страницы
 * при обратном скролле элемент снова залипает у верхней границы вьюпорта
 * Оптимизировано с использованием requestAnimationFrame для минимальной нагрузки на CPU.
 */

export function pinUntilScroll (element, offset, zIndex = 0, useVwWidth = false) {
  if (!element) return;
  
    const rectByDoc = getCoordinatesByDocument(element);
    const body = document.querySelector('body');
    const y_init = window.scrollY;
    
    let isFixed = true; // текущее состояние элемента
    
    // создаём placeholder что бы при извлечении элемента из потока не порвало вёрстку
    // стили при этом не должны зависеть от родителя!
    // создал заглушку
    const placeholder = document.createElement('div');
    placeholder.style.top = rectByDoc.top + 'px';
    placeholder.style.left = rectByDoc.left + 'px';
    placeholder.style.width = formatWidth(rectByDoc.width, useVwWidth);
    placeholder.style.height = rectByDoc.height + 'px';
  
    if (y_init <= offset) {
      // вставил заглушку
      const parent = element.parentNode;
      const nextSibling = element.nextSibling; // может быть null, если элемент последний
      if (nextSibling) {
        parent.insertBefore(placeholder, nextSibling);
      } else {
          parent.appendChild(placeholder);
      }
      element.style.position = 'fixed';
      element.style.width = formatWidth(rectByDoc.width, useVwWidth);
      element.style.zIndex = zIndex;

      
    } else {
      element.style.position = 'absolute';
      const rect = element.getBoundingClientRect();
      element.style.top = `${rectByDoc.top - rect.top}px`;
      element.style.left = rectByDoc.left + 'px';
      element.style.width = formatWidth(rectByDoc.width, useVwWidth);
      element.style.marginTop = 0 + 'px'

      body.appendChild(element);
      isFixed = false;      
    }
  
  

    
    let ticking = false;
    function checkScroll() {
        const y = window.scrollY;

        if (y >= offset) {
          const _rectByDoc = getCoordinatesByDocument(element);
          element.style.position = 'absolute';
          body.appendChild(element);
          element.style.top = _rectByDoc.top + 'px';
          element.style.left = _rectByDoc.left + 'px';
          element.style.width = formatWidth(rectByDoc.width, useVwWidth);
          element.style.marginTop = 0 + 'px'
          isFixed = false;
        }else if (y < offset && !isFixed) {
          element.style.position = 'fixed';
          element.style.top = rectByDoc.top + 'px';
          element.style.left = rectByDoc.left + 'px';
          isFixed = true;
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

function formatWidth(width, vw = false) {
  return vw
    ? `${width / (window.innerWidth / 100)}vw`
    : `${width}px`;
}