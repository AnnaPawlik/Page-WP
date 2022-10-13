import $ from 'jquery'

$('.header__hamburger').on('click', function () {
  $(this).toggleClass('header__hamburger--active')
  $('body').toggleClass('overlay-open')
  $('.overlay-menu').toggleClass('overlay-menu--active')
})
