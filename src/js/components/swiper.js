export default class SwiperSliders {
  homepageSlider() {
    var swiper = new Swiper(".s1_homepage__slider", {
      slidesPerView: 1,
      loop: true,
      navigation: {
        nextEl: ".next",
        prevEl: ".prev",
      },
    });
  }

  premisesSlider() {
    var swiper = new Swiper(".premises__slider", {
      slidesPerView: 1,
      slidesPerGroup: 1,
      spaceBetween: 23,
      loop: true,

      breakpoints: {
        769: {
          slidesPerView: 3,
          slidesPerGroup: 3,
        },
      },
    });
  }
  

  init(){
    document.querySelector('.s1_homepage__slider') ? this.homepageSlider() : null
    document.querySelector('.premises__slider') ? this.premisesSlider() : null
  }
}