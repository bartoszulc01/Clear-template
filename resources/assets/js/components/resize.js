import $ from 'jquery'

const text = document.querySelector('.background-header')
if ($(window).width() < 768) {
  $(window).resize(function () {
    $(text).each(function () {
      var highestBox = 0

      $('.background-mobile', this).each(function () {
        if ($(this).height() > highestBox) {
          highestBox = $(this).height()
        }
      })

      $(text).height(highestBox)
    })
  })
  $(window).trigger('resize')
}
