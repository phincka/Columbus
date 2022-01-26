
export default class Menu {
  headerMenu() {
    //! Hidden menu desktop
    // let openButton = document.querySelector('.menuButton')
    // let openSubButton = document.querySelector('.menu-item-has-children')
    // let closeSubButton = document.querySelector('.sub-menu-close')
    let openButton = document.querySelector('.menuButton')
    let nav = document.querySelector('.header__main')

    !nav ? nav = document.querySelector('.header__main') : null
    
    openButton.addEventListener('click', () => {
      nav.classList.toggle("header__main--active")
      openButton.classList.toggle("menuButton--active")
    })


    // openSubButton.addEventListener('click', () => {
    //   subnav.classList.add("sub-menu--active")
    //   closeSubButton.classList.add("sub-menu-close--closed")

    //   openButton.style.top = '-10rem'
    // })

    // closeSubButton.addEventListener('click', () => {
    //   subnav.classList.remove("sub-menu--active")
    //   closeSubButton.classList.remove("sub-menu-close--closed")
    //   openButton.style.top = '0'
    // })
  }


  init(){
    this.headerMenu()
  }
} 