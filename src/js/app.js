import Animations from './components/animations'
import Cookies from './components/cookies'
import Menu from './components/menu'
import PageLoader from './components/pageLoader'
import SwiperSliders from './components/swiper'



new Animations().animation()
new Cookies().cookies()
new Menu().init()
new PageLoader().loader()
new SwiperSliders().init()


$(document).ready(function () {
  $('body').removeClass('preload');
});

if (document.querySelector('.gallery')) {
  new LiteBoxPro('.gallery');
}


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


const name = document.querySelector('#name')
if (name) {
  name.placeholder = "Imię / Nazwisko / Szkoła"
}

const tripForm = document.querySelector('.s1_trip__content__form')
if (tripForm) {
  const tripTitle = tripForm.getAttribute('data-tripTitle')

  document.querySelector('#textarea').placeholder = `Zapytanie o wycieczkę:  "${tripTitle}"`
}

console.log("%c2022 - Realizacja Paweł Hincka & Karolina Kotowska", "color: white; font-family:sans-serif; font-size: 20px");
console.log("%cwww.hincka.pl", "color: white; font-family:sans-serif; font-size: 16px");