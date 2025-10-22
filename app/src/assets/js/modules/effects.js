



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
  