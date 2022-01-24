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

  swiperProductGallery() {
    var ProductGalleryThumbs = new Swiper('.productGallery-bottom', {
      spaceBetween: 10,
      slidesPerView: 2,
      freeMode: true,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      breakpoints: {
        800: {
          slidesPerView: 4,
          spaceBetween: 20,
        },
      }
    });
    var galleryTop = new Swiper('.productGallery-top', {
      spaceBetween: 32,
     
      thumbs: {
        swiper: ProductGalleryThumbs
      }
    });

   
  }

  

  init(){
    document.querySelector('.s1_homepage__slider') ? this.homepageSlider() : null
    document.querySelector('.productGallery-top') ? this.swiperProductGallery() : null
  }
}