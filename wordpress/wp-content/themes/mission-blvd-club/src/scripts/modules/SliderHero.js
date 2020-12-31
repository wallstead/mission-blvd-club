import Swiper, { EffectFade, Autoplay } from 'swiper';


export default class SliderHero {
    constructor(sliderHeroElement) {
        Swiper.use([Autoplay, EffectFade]);

        var mySwiper = new Swiper(sliderHeroElement, {
            slidesPerView: 1,
            spaceBetween: 0,
            effect: 'fade',
            fadeEffect: {
                crossFade: true
            },
            speed: 1000,
            loop: true,
            autoplay: {
                delay: 2000,
                disableOnInteraction: false
            }
        })
    }
}