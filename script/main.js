const hamburger = document.querySelector('.hamburger');
const text_navbar = document.querySelectorAll('.nav-text');
const nav = document.querySelectorAll('.icon');
const content = document.querySelector('.background-content');

hamburger.addEventListener('click', () => {
  hamburger.classList.toggle('is-active');
  text_navbar.forEach(element => {
    element.classList.toggle('d-none')
  });
  nav.forEach(element => {
    element.classList.toggle('new-width');
  })
  content.classList.toggle('new-width1');
})