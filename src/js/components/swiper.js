export default class SwiperSliders {
  homepageSlider() {
    var swiper = new Swiper(".s1_homepage__slider", {
      slidesPerView: 1,
      loop: true,
      slidesPerView: 1,
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

  reviewsList() {
    var reviewsList = new Swiper('.reviews__list__slider', {
      spaceBetween: 24,
      slidesPerView: 1,
      freeMode: false,
      watchSlidesVisibility: true,
      watchSlidesProgress: true,
      scrollbar: {
        el: ".swiper-scrollbar",
        hide: false,
      },
      breakpoints: {
        800: {
          slidesPerView: 3,
          spaceBetween: 50,
        },
      }
    });
    


  }


  init(){
    document.querySelector('.s1_homepage__slider') ? this.homepageSlider() : null
    document.querySelector('.productGallery-top') ? this.swiperProductGallery() : null
    document.querySelector('.reviews__list__slider') ? this.reviewsList() : null
  }
}

