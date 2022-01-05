export default class FromValidations {
  inputValue(){
    const input = document.querySelectorAll('.contact__single--input')
    const textarea = document.querySelectorAll('.contact__single--textarea')

    input.forEach(element => {
      element.addEventListener('click', () => {
        input.forEach(elReset => {
          if (elReset.value == '') elReset.parentNode.childNodes[0].style.opacity = 1;
        });
        element.parentNode.childNodes[0].style.opacity = 0;
      });
    });


    textarea.forEach(element => {
      element.addEventListener('click', () => {
        textarea.forEach(elReset => {
          if (elReset.value == '') elReset.parentNode.childNodes[0].style.opacity = 1;
        });
        element.parentNode.childNodes[0].style.opacity = 0;
      });
    });
  }


  init() {
    if (document.querySelector('.contact__single--input')) this.inputValue()
  }
}