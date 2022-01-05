export default class SwiperSliders {

wideoBg() {
  const wideoBlocks = document.querySelectorAll('.wp-video')

  wideoBlocks.forEach(el => {
    el.classList.add('wp-video--active')
  });

  wideoBlocks.forEach(el => {
    el.addEventListener('click', () => {
      el.classList.toggle('wp-video--active')
    })
  });
}


init() {
  document.querySelector('.wp-video') ? this.wideoBg() : null
}}