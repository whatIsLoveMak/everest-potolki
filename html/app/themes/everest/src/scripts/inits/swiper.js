// Swiper
import Swiper, { Navigation, Pagination} from 'swiper';
Swiper.use([Navigation, Pagination]);
let body = document.querySelector('body');
document.addEventListener('DOMContentLoaded', () => {
  if (document.querySelector('.about_us__slider')) {
      const sliderTwoRows = document.querySelectorAll('.about_us__slider')
      sliderTwoRows.forEach(slider => {
        const $el = new Swiper(slider.querySelector('.swiper-container'), {
          navigation: {
            nextEl: document.querySelector('.swiper-button__next'),
            prevEl: document.querySelector('.swiper-button__prev'),
            disabledClass: 'swiper-button-disabled',
          },
          slidesPerView: 'auto',
          spaceBetween: 20,
          centeredSlides: true,
          initialSlide: 3,
          loop: false,
          
          autoplay: {
            reverseDirection: true,
          },
          
        })
      
      })
    }
    if (document.querySelector('.sales__slider-container')) {
      const sliderTwoRows = document.querySelectorAll('.sales__slider-container')
      sliderTwoRows.forEach(slider => {
        const $el = new Swiper(slider.querySelector('.swiper-container'), {
          // navigation: {
          //   nextEl: document.querySelector('.swiper-button__next'),
          //   prevEl: document.querySelector('.swiper-button__prev'),
          //   disabledClass: 'swiper-button-disabled',
          // },
         
          //centeredSlides: true,
          slidesPerView: "auto",
              centeredSlides: true,
          initialSlide: 1,
          loop: false,
          pagination: {
            el: ".swiper-pagination",
            clickable: true,
          },
          breakpoints: {
            1440: {
              slidesPerView: 3,
              slidesPerGroup: 1,
              spaceBetween: 20,
            },
            
          }
          
        })
        if(body.clientWidth < 1025){
          $el.destroy();
        }
      })
    }
})
