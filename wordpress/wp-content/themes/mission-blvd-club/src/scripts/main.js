/* Polyfills */
import "core-js/stable";
import "regenerator-runtime/runtime";

/* Modules */
import Nav from './modules/Nav';
import Player from './modules/Player';
import SliderHero from './modules/SliderHero';

document.addEventListener('DOMContentLoaded', () => {
  new Nav();

  const sliderHero = document.querySelector('.js-slider-hero');
  if (sliderHero != null) {
      new SliderHero(sliderHero);
  }
});

window.addEventListener('load', () => {
  new Player();
  console.log('test')
});
