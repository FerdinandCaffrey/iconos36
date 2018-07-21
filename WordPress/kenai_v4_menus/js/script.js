((d, $) => {
  const panel = d.querySelector('.Panel'),
    panelBtn = d.querySelector('.Panel-btn')

  panelBtn.addEventListener('click', e => {
    e.preventDefault;
    panel.classList.toggle('is-active')
    panelBtn.classList.toggle('is-active')
  })

  //$('body').fadeOut(2000).fadeIn(3000)
})(document, jQuery);

((d, c, $) => {
  const galleryLinks = d.querySelectorAll('.gallery a')

  c(galleryLinks)

  galleryLinks.forEach(link => link.dataset.fancybox = 'gallery')
})(document, console.log, jQuery);
