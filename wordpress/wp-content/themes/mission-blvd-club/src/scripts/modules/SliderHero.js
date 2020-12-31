import { Swiper, Navigation, Pagination } from 'swiper/js/swiper.esm.js';

export default class SliderHero {
  constructor(sliderHeroElement) {
    console.log("yo")

    var mySwiper = new Swiper(sliderHeroElement, {
      slidesPerView: 1,
      spaceBetween: 0,
    })
  }
}
