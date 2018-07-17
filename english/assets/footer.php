<!--   footer  -->
<footer>
  <div class="row align-justify text-center">
    <div class="column small-6 medium-2 small-order-1 medium-order-1">
      <a href="participar.php"><img data-src="img/congreso-parques-logo-gris.png" alt="1er Congreso de Parques Urbanos"></a>
    </div>
    <div class="column small-12 medium-8 small-order-3 medium-order-2" id="cabecera-footer">
      <h5>INTERNATIONAL CONGRESS OF URBAN PARKS</h5>
      <h4>MAY 14-17, 2019 - MONTERREY, NUEVO LEÓN, MEXICO</h4>
      <h6>Presented by The National Association of Parks and Recreation México.</h6>
    </div>
    <div class="column small-6 medium-2 small-order-2 medium-order-3">
      <a href="http://anpr.org.mx/"><img data-src="img/parques-urbanos-logo-anpr.png" alt="Asociación Nacional de Parques y Recreación"></a>
    </div>
  </div>
  <div class="row">
    <div class="colm medium-6">
      <!--========  Redes sociales  ========-->
      <section id="redes-sociales" class="hide-for-small-only">
        <div class="row align-center ">
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
    <div class="col medium-6">
      <div class="contador">
        <div id='contador'></div>
      </div>
    </div>
  </div>

  <!-- //Ménu footer -->
  </footer>
  <div class="row column expanded align-center" id="pie">
    <p><a href="http://anpr.org.mx/" target="_blank">© 2018 National Association of Parks and Recreation</a></p>
  </div>

</div>

</div>
</div>
<!--   =================================       /footer  =============================================================-->

<!--  slick  -->
<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
  <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

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

<!---->
<!--<script src="js/vendor/jquery.js"></script>-->
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
<!-- script del contador  -->
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
          document.getElementById(id).innerHTML='<h4> ' + dias + ' Days Left </h4>'
                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            setTimeout("countdown(\"" + id + "\")",1000)
                    }
            }
            else{
                    document.getElementById('restante').innerHTML='Quedan ' + dias + ' D&iacute;as, ' + horas + ' Horas, ' + minutos + ' Minutos, ' + segundos + ' Segundos'
            }
        }
</script>
<!-- Blazy carga de imagenes  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/blazy/1.8.2/blazy.min.js"></script>
<script type="text/javascript">
var bLazy = new Blazy({
  selector:'img'
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

</body>
</html>
