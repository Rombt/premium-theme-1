



//------------ Typing ------------

export async function typeHTML(node, speed = 50) {
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
  



  export async function eraseHTML(node, speed = 50) {
    // Сохраняем высоту, чтобы при очистке не прыгала верстка
    const heightNode = node.offsetHeight;
    node.style.minHeight = heightNode + 'px';
  
    // Получаем исходное содержимое (чтобы знать, что удалять)
    const content = node.innerHTML;
  
    // Временный контейнер для итерации по элементам
    const temp = document.createElement('div');
    temp.innerHTML = content;
  
    // Основная функция — рекурсивно проходит по элементам и стирает
    async function eraseElement(el) {
      const childNodes = Array.from(el.childNodes).reverse(); // идём с конца
  
      for (const child of childNodes) {
        if (child.nodeType === Node.TEXT_NODE) {
          await eraseText(child);
        } else if (child.nodeType === Node.ELEMENT_NODE) {
          await eraseElement(child);
          child.remove(); // удаляем тег после содержимого
        }
      }
    }
  
    function eraseText(textNode) {
      return new Promise(resolve => {
        let text = textNode.textContent;
        function eraseChar() {
          if (text.length > 0) {
            text = text.slice(0, -1);
            textNode.textContent = text;
            setTimeout(eraseChar, speed);
          } else {
            textNode.remove();
            resolve();
          }
        }
        eraseChar();
      });
    }
  
    await eraseElement(node);
  }
  