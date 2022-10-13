import $ from 'jquery'
import 'slick-slider'

$(document).ready(function ($) {
  $('.slider').slick({
    dots: true,
    infinite: true,
    slidesToShow: 6,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    arrows: false,
    responsive: [{
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 810,
      settings: {
        slidesToShow: 4,
        slidesToScroll: 1,
        arrows: false
      }
    },
    {
      breakpoint: 667,
      settings: {
        arrows: false,
        slidesToShow: 2,
        slidesToScroll: 1
      }
    }]
  })
})
