import $ from 'jquery'
import 'slick-carousel'

$(document).ready(() => {
  const recentProjectsSlider = $('.galeria_images-row')
  if ($(window).width() < 768) {
    $(recentProjectsSlider).slick({
      buttons: false,
      slidesToShow: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            buttons: false,
            centerMode: true,
            centerPadding: '40px',
            arrows: false
          }
        }
      ]
    })
  }
})
$(document).ready(() => {
  const recentReferencje = $('.referencje_images-row')
  if ($(window).width() < 768) {
    $(recentReferencje).slick({
      buttons: false,
      slidesToShow: 1,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            buttons: false,
            centerMode: true,
            centerPadding: '40px',
            arrows: false
          }
        }
      ]
    })
  }
})
