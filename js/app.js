$(document).foundation()

const $offcanvas = $('#off-canvas')
$offcanvas.find('li').click(function (ev){
  $offcanvas.foundation('close')
})
