# Nimarim — документация

## 1. Features – ключевые возможности

* Унифицированный базовый класс `NimCore` для всех эффектов.
* Наследование и расширяемость — легко создавать новые эффекты.
* Автоподключение эффектов через `EffectLoader`.
* Менеджер эффектов (`Manager`) для управления очередями и цепочками анимаций.
* Утилиты (`utils`) для работы с DOM, CSS и вспомогательными функциями.
* Совместимость с современными сборщиками: ES Modules, Webpack, Vite.
* Событийная система: `onStart`, `onComplete`, `onPause`.

## 2. Installation – подключение библиотеки

* Через npm:

```bash
npm install nimarim
```

* Через прямой импорт ES Modules:

```html
<script type="module" src="path/to/Nimarim/index.js"></script>
```

## 3. Quick Start / Examples – минимальный пример

```js
import { FadeInEffect } from 'Nimarim/effects/FadeIn';

const title = document.querySelector('.title');
const effect = new FadeInEffect(title);

effect.play();
effect.onComplete(() => {
  console.log('Анимация завершена');
});
```

## 4. Project Structure – структура файлов проекта

```
Nimarim/
├─ NimCore/             
│   ├─ NimCore.js       # базовый класс для всех эффектов
│   ├─ EffectLoader.js  # автоподключение всех эффектов
│   ├─ Manager.js       # менеджер эффектов (очереди, цепочки)
│   └─ index.js         # точка входа для модуля NimCore
│
├─ effects/             
│   ├─ FadeIn/          
│   │   ├─ FadeInEffect.js
│   │   └─ README.md
│   ├─ SlideIn/         
│   │   └─ SlideInEffect.js
│   ├─ Typewriter/      
│   │   └─ TypewriterEffect.js
│   └─ ...              # каждый эффект в отдельной папке
│
├─ utils/               
│   ├─ dom.js           # DOM-хелперы
│   ├─ css.js           # CSS-хелперы
│   └─ helpers.js       # вспомогательные функции
│
├─ tests/               
│   ├─ unit/            # unit-тесты для NimCore, эффектов, utils
│   ├─ integration/     # интеграционные тесты с DOM
│   └─ e2e/             # End-to-End тесты на реальной странице
│
└─ index.js             # основной экспорт всей библиотеки
```

### Подробности структуры

* NimCore/ – содержит базовый класс `NimCore`, `Manager` и `EffectLoader`. Все эффекты наследуют `NimCore`.
* effects/ – каждый эффект отдельной папкой. Имя папки совпадает с названием эффекта.
* utils/ – общие функции для всех эффектов, чтобы избежать дублирования кода.
* tests/ – структурированные тесты: unit, integration, e2e.
* index.js – основной файл экспорта, объединяет все эффекты, core-классы и утилиты.

## 5. Правила добавления новых эффектов

1. Создайте новую папку с названием эффекта в `/effects/`.
2. Реализуйте класс эффекта, наследуя `NimCore`.
3. Реализуйте методы: `init()`, `play()`, `pause()`, `reset()`, `destroy()`.
4. При необходимости используйте утилиты из `/utils`.
5. Добавьте эффект в автозагрузку через `EffectLoader`.

## 6. Core Classes

### NimCore

* Родительский класс всех эффектов.
* Методы: `init()`, `play()`, `pause()`, `reset()`, `destroy()`.
* События: `onStart`, `onComplete`, `onPause`.
* Пример:

```js
class MyEffect extends NimCore {
  constructor(element) {
    super(element);
  }

  play() {
    super.play();
    // логика анимации
  }
}
```

### Manager

* Управляет группами эффектов, очередями и последовательностью.
* Пример:

```js
const manager = new Manager();
manager.addEffect(fadeEffect);
manager.addEffect(slideEffect);
manager.playAll(); // запуск всех эффектов по очереди
```

### EffectLoader

* Автоматически регистрирует все эффекты в библиотеке.
* Используется в `index.js` для экспорта всех эффектов.
