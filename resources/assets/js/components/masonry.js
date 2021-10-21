import Masonry from 'masonry-layout'
import imagesLoaded from 'imagesloaded'

const grid = document.querySelector('.js-masonry')
if (grid) {
  imagesLoaded(grid, function () {
    const msnry = new Masonry(grid, {
      itemSelector: '.col-sm-6.col-lg-4.mb-4',
      percentPosition: true
    })
    msnry.once('layoutComplete', () => {
      grid.classList.add('load')
    })
    msnry.layout()
  })
}
