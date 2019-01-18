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


 $(function (){
       $(window).scroll(function(){
          if ($(this).scrollTop() > 50) {
           $('#encabezado').addClass("menu_azul");
          } else {
           $("#encabezado").removeClass("menu_azul");
          }
       });
   });
