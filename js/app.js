$(document).foundation()

const $offcanvas = $('#off-canvas')
$offcanvas.find('li').click(function (ev){
  $offcanvas.foundation('close')
})

$(document).ready(function(){
  // $('#open').click(function(){
        $('#popup').fadeIn('slow');
        $('.popup-overlay').fadeIn('slow');
        $('.popup-overlay').height($(window).height());
        return false;
    });
$(document).ready(function(){
    $('#close').click(function(){
        $('#popup').fadeOut('slow');
        $('.popup-overlay').fadeOut('slow');
        return false;
    });
 });

 
