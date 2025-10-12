// Entry point for the Nimarim library
// Exports the core class, manager, utils, and all registered effects

import * as NimCoreModule from './NimCore/index.js';
import * as Utils from './utils/index.js';
import EffectLoader from './NimCore/EffectLoader.js';

// Load all effects automatically
const effects = EffectLoader.loadAll();

// Export core modules and utilities
export const NimCore = NimCoreModule.NimCore;
export const Manager = NimCoreModule.Manager;
export { Utils };

// Export all effects
export { effects };

// Optional: default export with all main objects
export default {
  NimCore,
  Manager,
  Utils,
  effects
};