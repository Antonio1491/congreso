<!--   footer  -->
<footer>
  <div class="row align-justify text-center">
    <div class="column small-6 medium-3 small-order-1 medium-order-1">
      <a href="participar.php"><img src="img/congreso-parques-logo-gris.png" alt=""></a>
    </div>
    <div class="column small-12 medium-6 small-order-3 medium-order-2">
      <h5>CONGRESO INTERNACIONAL DE PARQUES URBANOS</h5>
      <h4>25 AL 27 DE ABRIL 2018 - MÉRIDA, YUCATÁN, MÉXICO</h4>
      <h6>Presentado por La Asociación Nacional de Parques y Recreación México.</h6>
    </div>
    <div class="column small-6 medium-3 small-order-2 medium-order-3">
      <a href="http://anpr.org.mx/"><img src="img/parques-urbanos-logo-anpr.png" alt=""></a>
    </div>
  </div>
    <!-- Ménu footer -->
    <div class="row" id="menu-footer">
      <div class="column">
        <ul class="menu vertical ">
          <li class="menu-text">contáctenos</a></li>
          <li><a href="http://www.parquesdemexico.org/consultora/">Parques de México</a></li>
          <li><a href="http://parquesalegres.org/" target="_blank">Parques Alegres</a></li>

          <li><a href="mailto:info.congreso@anpr.org.mx">info.congreso@anpr.org.mx</a></li>
          <li><a href="#">#CONGRESOPARQUES</a></li>
        </ul>
      </div>
      <div class="column ">
        <ul class="menu vertical">
          <li class="menu-text">congreso</a></li>
          <li><a href="patrocinadores.php">patrocinadores y socios</a></li>
          <li><a href="tematicas.php">temáticas</a></li>
          <li><a href="conferencias.php">conferencias magistrales</a></li>
          <li><a href="talleres.php">talleres</a></li>
          <li><a href="sesiones.php">sesiones educativas</a></li>
          <li><a href="programa.php">programa completo</a></li>
          <li><a href="expo.php">expo comercial parques urbanos</a></li>
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
      <div class="column">
        <ul class="menu vertical">
          <li class="menu-text">Acerca de</a></li>
          <li><a href="http://anpr.org.mx/" target="_blank">ANPR</a></li>
          <li><a href="participar.php">¿Por qué participar?</a></li>
          <li><a href="preguntas.php">Preguntas Frecuentes</a></li>
          <li><a href="aviso-legal.php">aviso legal</a></li>
          <li><a href="privacidad.php">política de privacidad</a></li>
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
          document.getElementById(id).innerHTML='<h5>Faltan ' + dias + ' D&iacute;as </h5>' + horas + ' Horas | ' + minutos + ' Minutos | ' + segundos + ' Segundos' +''
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
<script src="js/vendor/jquery.js"></script>
<script src="js/vendor/what-input.js"></script>
<script src="js/vendor/foundation.js"></script>
<script src="js/app.js"></script>
</body>
</html>
