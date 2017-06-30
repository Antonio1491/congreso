<!--   footer  -->
<footer>
  <div class="row align-justify text-center">
    <div class="column small-6 medium-3 small-order-1 medium-order-1">
      <a href="participar.php"><img data-src="img/congreso-parques-logo-gris.png" alt="1er Congreso de Parques Urbanos"></a>
    </div>
    <div class="column small-12 medium-6 small-order-3 medium-order-2">
      <h5>CONGRESO INTERNACIONAL DE PARQUES URBANOS</h5>
      <h4>25 AL 27 DE ABRIL 2018 - MÉRIDA, YUCATÁN, MÉXICO</h4>
      <h6>Presentado por La Asociación Nacional de Parques y Recreación México.</h6>
    </div>
    <div class="column small-6 medium-3 small-order-2 medium-order-3">
      <a href="http://anpr.org.mx/"><img data-src="img/parques-urbanos-logo-anpr.png" alt="Asociación Nacional de Parques y Recreación"></a>
    </div>
  </div>
    <!-- Ménu footer -->
    <div class="row hide-for-small-only" id="menu-footer">
      <div class="column">
        <ul class="menu vertical ">
          <li class="menu-text">contáctanos</a></li>
          <li><a href="http://anpr.org.mx/" target="_blank">ANPR</a></li>
          <li><a href="http://www.parquesdemexico.org/consultora/">Parques de México</a></li>
          <li><a href="http://parquesalegres.org/" target="_blank">Parques Alegres</a></li>

          <li><a href="mailto:info.congreso@anpr.org.mx">info.congreso@anpr.org.mx</a></li>
          <li><a href="#">#CONGRESOPARQUES</a></li>
        </ul>
      </div>
      <div class="column ">
        <ul class="menu vertical">
          <li class="menu-text">congreso</a></li>
          <li><a href="conferencias.php">conferencias magistrales</a></li>
          <li><a href="sesiones.php">sesiones educativas</a></li>
          <li><a href="talleres.php">talleres</a></li>
          <li><a href="programa.php">programa completo</a></li>
          <li><a href="patrocinadores.php">patrocinadores y socios</a></li>
          <li><a href="expo.php">expo parques urbanos</a></li>
        </ul>
      </div>
      <div class="column">
          <ul class="menu vertical">
            <li class="menu-text">Participa</a></li>
            <li><a href="convocatoria-sesiones.php">Convocatoria 2018</a></li>
            <li><a href="inscripcion.php">Inscripción</a></li>
            <li><a href="participar.php">¿por qué participar?</a></li>
            <li><a href="preguntas.php">Preguntas frecuentes</a></li>
            <li><a href="contacto.php">Contacto</a></li>
            <li><a href="aviso-legal.php">aviso legal</a></li>
            <li><a href="privacidad.php">política de privacidad</a></li>
          </ul>
      </div>
      <div class="column">
        <ul class="menu vertical">
          <li class="menu-text">Mérida yucatán</li>
          <li><a href="ciudad-blanca.php">La ciudad Blanca</a></li>
          <li><a href="http://www.merida.gob.mx/municipio/sitiosphp/merida/eventos.phpx" target="_blank">actividades locales</a></li>
          <li><a href="hospedajes.php">Hospedaje</a></li>
          <li><a href="conectividad.php">conectividad</a></li>
          <li><a href="http://www.merida.gob.mx/capitalcultural/">Turismo en mérida</a></li>
        </ul>
      </div>
    </div>
      <!-- //Ménu footer -->
  </footer>
  <div class="row column expanded align-center" id="pie">
    <p><a href="http://anpr.org.mx/" target="_blank">© 2017 Asociación Nacional de Parques y Recreación</a></p>
  </div>

</div>

</div>
</div>
<!--   /footer  -->
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
          document.getElementById(id).innerHTML='<h4>Faltan ' + dias + ' D&iacute;as </h4>'
                    if (dias>0 || horas>0 || minutos>0 || segundos>0){
                            setTimeout("countdown(\"" + id + "\")",1000)
                    }
            }
            else{
                    document.getElementById('restante').innerHTML='Quedan ' + dias + ' D&iacute;as, ' + horas + ' Horas, ' + minutos + ' Minutos, ' + segundos + ' Segundos'
            }
        }
</script>
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
<!---->
<!--<script src="js/vendor/jquery.js"></script>-->
<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>

</body>
</html>
