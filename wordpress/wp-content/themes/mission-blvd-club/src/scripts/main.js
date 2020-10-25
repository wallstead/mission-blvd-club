/* Polyfills */
import "core-js/stable";
import "regenerator-runtime/runtime";

/* Modules */
import Nav from './modules/Nav';

document.addEventListener("DOMContentLoaded", () => {
  new Nav();

});
