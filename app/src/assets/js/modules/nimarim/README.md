# Nimarim

**Nimarim** is a professional web animation library for text, headings, and other DOM elements. The library is built on a unified base class **NimCore** and supports automatic loading of new effects.

---

## Features

* Unified base class for all effects (`NimCore`)
* Easy inheritance and creation of new effects
* Automatic effect registration via `EffectLoader`
* Extensible architecture: effect manager, queues, and chains
* Compatible with modern build tools (ES Modules, Webpack, Vite)

---

## Quick Start

```js
import { FadeInEffect } from 'Nimarim/effects/FadeIn';

const title = document.querySelector('.title');
const effect = new FadeInEffect(title);

effect.play();
```

---

## Project Structure

```
Nimarim/
├─ NimCore/             # Core library
│   ├─ NimCore.js       # Base class for all effects
│   ├─ EffectLoader.js  # Auto-registers all effects
│   ├─ Manager.js       # Optional: manages effect queues and chains
│   └─ index.js         # Entry point for NimCore module
│
├─ effects/             # All individual animation effects
│   ├─ FadeIn/
│   │   ├─ FadeInEffect.js
│   │   └─ README.md
│   ├─ SlideIn/
│   │   └─ SlideInEffect.js
│   ├─ Typewriter/
│   │   └─ TypewriterEffect.js
│   └─ ...              # Additional effects each in its own folder
│
├─ utils/               # Helper functions used across all effects
│   ├─ dom.js           # DOM manipulation helpers
│   ├─ css.js           # CSS style helpers
│   └─ helpers.js       # Miscellaneous utility functions
│
├─ tests/               # Tests for the library
│   ├─ unit/            # Unit tests for NimCore, effects, utils
│   ├─ integration/     # Integration tests for DOM interactions
│   └─ e2e/             # End-to-End tests using real browser environment
│
└─ index.js             # Main entry point for the whole library
```

### **Folder Details**

* **NimCore/** – contains the base class `NimCore` and modules for autoloading and managing effects. All effects inherit from `NimCore`.
* **effects/** – each effect has its own folder with implementation and optional README.
* **utils/** – shared utility functions to avoid code duplication across effects.
* **tests/** – structured testing folders: `unit`, `integration`, and `e2e`.
* **index.js** – root entry point for importing the full library.

---

##  Testing

* **Unit tests:** NimCore, effects, utils (Jest)
* **Integration tests:** effects interacting with DOM (Jest + JSDOM)
* **Snapshot tests:** check DOM changes after `play()` or `reset()` (Jest)
* **End-to-End (E2E):** verify animations on a real page, sequences, and transitions (Cypress / Playwright)
* **EffectLoader:** ensure all new effects are registered automatically

---

##  Extension Guidelines

* Inherit from NimCore to create new effects
* Use `data-*` attributes to configure effects in HTML
* External plugins and effects can be added without modifying the core
* Events supported: `onStart`, `onComplete`, `onPause`

---

##  Compatibility

* Modern browsers
* ES Modules, Webpack, Vite
* Node.js (for build and testing)

---

##  License

MIT License © 2025
