export default class RealizationsToggle{
  module() {
    const buttons = document.querySelectorAll('.btn-rel')
    const realizations = document.querySelectorAll('.single_realization')


    buttons.forEach(element => {
      element.addEventListener('click', () => {
        buttons.forEach(singleRemove => {
          singleRemove.classList.remove('btn-active')
        });

        const selectedTaxonomy = element.getAttribute('data-btnterm')
        element.classList.add('btn-active')

        if (selectedTaxonomy !== '00') {
          realizations.forEach(realization => {
            realization.style.display = 'block'

            let dataTerms = realization.getAttribute('data-terms')
            dataTerms = dataTerms.substring(0, dataTerms.length - 1)
            dataTerms = dataTerms.split(',')
            

            if (dataTerms.indexOf(selectedTaxonomy) == -1) realization.style.display = 'none'
           
          });
        }else{
          realizations.forEach(realization => {
            realization.style.display = 'block'
          });
        }
      });
    });
  }

  
  init() {
    document.querySelector('.single_realization') ? this.module() : null
  }
}