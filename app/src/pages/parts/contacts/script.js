import tabs from '../../../assets/js/modules/tabs.3.0.0.js';


const event = window.matchMedia('(hover: hover)').matches ? 'mouseenter' : 'click';
tabs('rmbt-contacts-tabs', event);