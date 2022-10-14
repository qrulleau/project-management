const hamburger = document.querySelector('.hamburger');
const text_navbar = document.querySelectorAll('.nav-text');
const nav = document.querySelectorAll('.icon');
const content = document.querySelector('.background-content');
const button_selector = document.querySelectorAll('.selector-btn');



hamburger.addEventListener('click', () => {
  console.log('Bonjour');
  hamburger.classList.toggle('is-active');
  text_navbar.forEach(element => {
    element.classList.toggle('d-none')
  });
  nav.forEach(element => {
    element.classList.toggle('new-width');
  })
  content.classList.toggle('new-width1');
})


button_selector.forEach(element => {
  element.addEventListener('click', () => {
    if (!element.classList.contains('selector-btn-empty')){


      let button_selector_disable = document.querySelector('.selector-btn-active');
      button_selector_disable.classList.remove('selector-btn-active')

      element.classList.add('selector-btn-active');

      let actual_content = document.querySelector('.active-content');
      actual_content.classList.remove('active-content');

      let button_value = element.value;
      let elementvalue = document.getElementById(button_value);
      elementvalue.classList.add('active-content');

    }
  });
})