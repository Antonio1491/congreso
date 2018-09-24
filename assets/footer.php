<!--   footer  -->
<footer>
  <div class="row align-justify text-center">
    <div class="column small-6 medium-3 small-order-1 medium-order-1">
      <a href="congresoParques.php"><img data-src="img/logotipo/logo_congreso_bc.png" alt="1er Congreso de Parques Urbanos" class=""></a>
    </div>
    <div class="column small-12 medium-5 small-order-3 medium-order-2" id="cabecera-footer">
      <hgroup>
        <h3>SEGUNDO CONGRESO INTERNACIONAL</h3>
        <h2>DE PARQUES URBANOS</h2>
        <h4>14 al 17 de MAYO 2019 - MONTERREY, NUEVO LEÓN, MÉXICO</h4>
        <h6>Presentado por la Asociación Nacional de Parques y Recreación México.</h6>
      </hgroup>
    </div>
    <div class="column small-6 medium-2 small-order-2 medium-order-2">
      <h4>Organiza</h4>
      <a href="http://anpr.org.mx/">
        <img data-src="img/i_anpr_bc.png" alt="Asociación Nacional de Parques y Recreación" class="logo_footer">
      </a>
    </div>
    <div class="column small-6 medium-2 small-order-2 ">
      <h4>Presenta</h4>
      <a href="https://www.parquefundidora.org/">
        <img data-src="img/logotipo/fundidora_bc.png" alt="Parque Fundidora" class="logo_footer">
      </a>
    </div>
  </div>
  <div class="row">
    <div class="colm medium-3">
      <!--========  Redes sociales  ========-->
      <section id="redes-sociales" class="hide-for-small-only">
        <div class="row align-center">
          <a href="https://www.facebook.com/Congreso-Internacional-de-Parques-Urbanos-433605833658855/" target="_blank">
            <img src="img/facebook.png" alt="">
          </a>
          <a href="https://twitter.com/congreso_parque" target="_blank">
            <img src="img/twitter.png" alt="">
          </a>
          <a href="https://www.instagram.com/congreso_parques/" target="_blank">
            <img src="img/instagram.png" alt="">
          </a>
          <a href="https://www.youtube.com/channel/UC_ExzrmxP5er7qZHeVpWidQ" target="_blank">
            <img src="img/youtobe.png" alt="">
          </a>
        </div>
      </section>
    </div>
    <div class="col medium-9">
      <div class="contador">
        <div id='contador'></div>
      </div>
    </div>
  </div>

  </footer>
  <div class="row column expanded align-center" id="pie">
    <p><a href="http://anpr.org.mx/" target="_blank">© 2018 Asociación Nacional de Parques y Recreación</a></p>
  </div>

</div


</div>
</div>
<!--   /footer  -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>

<script type="text/javascript">
var bLazy = new Blazy({
  selector:'img'
  });
</script>
<!-- cdn de belazy para la carga de imagenes-->
<script type="text/javascript">
  function countdown(id){
    var fecha=new Date('<?=$_SESSION['ano']?>','<?=$_SESSION['mes']?>','<?=$_SESSION['dia']?>','<?=$_SESSION['hora']?>','<?=$_SESSION['minuto']?>','<?=$_SESSION['segundo']?>')
    var hoy=new Date()
    var dias=0
    var horas=0
    var minutos=0
    var segundos=0
      if (fecha>hoy){
          var diferencia=(fecha.getTime()-hoy.getTime())/1000
          dias=Math.floor(diferencia/86400)
          diferencia=diferencia-(86400*dias)
          horas=Math.floor(diferencia/3600)
          diferencia=diferencia-(3600*horas)
          minutos=Math.floor(diferencia/60)
          diferencia=diferencia-(60*minutos)
          segundos=Math.floor(diferencia)
          document.getElementById(id).innerHTML='<span class="faltan">FALTAN </span><span class="num_dias">' + dias + ' D&iacute;as </span>'
                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            setTimeout("countdown(\"" + id + "\")",1000)
                    }
            }
            else{
                    document.getElementById('restante').innerHTML='Quedan ' + dias + ' D&iacute;as, ' + horas + ' Horas, ' + minutos + ' Minutos, ' + segundos + ' Segundos'
            }
        }
</script>
<!--  slick  -->
<script type="text/javascript">
    $(document).ready(function(){
      $('.marquee').slick({
        autoplay:true,
        autoplaySpeed: 1000,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1
      });
    });
  </script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('.cinta-ponentes').slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      slidesToScroll: 1
      });
    });
  </script>
    <script>/*google analytics*/
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-100039379-1', 'auto');
        ga('send', 'pageview');
    </script>
<!---->
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '401710473607617');
  fbq('track', 'PageView');
</script>
<noscript>
  <img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=401710473607617&ev=PageView&noscript=1"
/></noscript>

<script type="text/javascript">
$(function(){
$(".oculto").hide();
$(".MO").click(function(){
      var nodo = $(this).attr("href");

      if ($(nodo).is(":visible")){
           $(nodo).hide();
           return false;
      }else{
    $(".oculto").hide();
    $(nodo).fadeToggle( "slow" );
    return false;
      }
});
});
</script>
<!-- End Facebook Pixel Code -->
</body>
</html>
