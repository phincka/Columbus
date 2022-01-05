
export default class Menu {
  headerMenu() {
    //! Hidden menu desktop
    let openButton = document.querySelector('.menuButton')
    let nav = document.querySelector('.header__main')

    !nav ? nav = document.querySelector('.header__main') : null
    
    openButton.addEventListener('click', () => {
      nav.classList.toggle("header__main--active")
      openButton.classList.toggle("menuButton--active")
    })
  }


  init(){
    this.headerMenu()
  }
} 