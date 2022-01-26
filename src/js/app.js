import Animations from './components/animations'
import Cookies from './components/cookies'
import FromValidations from './components/formValidations'
import Menu from './components/menu'
import PageLoader from './components/pageLoader'
import SwiperSliders from './components/swiper'
import GoogleMaps from './components/GoogleMaps'
import RealizationsToggle from './components/realizationsToggle'
import Video from './components/video'
import AjaxProductLoad from './components/ajaxProductLoad'



// new Animations().animation()
new Cookies().cookies()
// new FromValidations().init()
new Menu().init()
new PageLoader().loader()
new SwiperSliders().init()
// new GoogleMaps().init()
// new RealizationsToggle().init()
// new Video().init()
// new AjaxProductLoad().init()



$(document).ready(function () {
  $('body').removeClass('preload');
});

if (document.querySelector('.gallery')) {
  new LiteBoxPro('.gallery');
}

// $('.js-panel-toggle').on('click', 'button', function(event) {
//   // Get panel to be opened
//   var target = $(this).data('target');
//   // Make all panels inactive
//   $('.panel-toggle').removeClass('panel-toggle--active');
//   $('.panel').hide();
  
//   // Activate clicked panel
//   $(this).addClass('panel-toggle--active');
//   $(target).show();
//   // Prevent default click event
//   event.preventDefault();
// });

const comment = document.querySelector('#comment')
if (comment){
  comment.placeholder = "Napisz swoją opinię"
}

const author = document.querySelector('#author')
if (author) {
  author.placeholder = "Imię / Nazwisko"
}

const email = document.querySelector('#email')
if (email) {
  email.placeholder = "E-mail"
}

const submit = document.querySelector('#submit')
if (submit) {
  submit.value = "Opublikuj"
}


const tripForm = document.querySelector('.s1_trip__content__form')
if (tripForm) {
  const tripTitle = tripForm.getAttribute('data-tripTitle')

  document.querySelector('#textarea').placeholder = `Zapytanie o wycieczkę:  "${tripTitle}"`

}
