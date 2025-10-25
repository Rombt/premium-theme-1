



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

  