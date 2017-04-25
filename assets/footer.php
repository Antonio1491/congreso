<!--   footer  -->
<footer>
  <div class="row align-justify text-center">
    <div class="column small-6 medium-3 small-order-1 medium-order-1">
      <img src="img/congreso-parques-logo-gris.png" alt="">
    </div>
    <div class="column small-12 medium-6 small-order-3 medium-order-2">
      <h5>CONFERENCIA INTERNACIONAL DE PARQUES URBANOS</h5>
      <h4>25 AL 27 DE ABRIL 2018 - MÉRIDA, YUCATÁN, MÉXICO</h4>
      <h6>Presentado por La Asociación Nacional de Parques y Recreación México.</h6>
    </div>
    <div class="column small-6 medium-3 small-order-2 medium-order-3">
      <img src="img/parques-urbanos-logo-anpr.png" alt="">
    </div>
  </div>
    <!-- Ménu footer -->
    <div class="row" id="menu-footer">
      <div class="column">
        <ul class="menu vertical ">
          <li class="menu-text">contáctenos</a></li>
          <li><a href="#">términos de uso</a></li>
          <li><a href="#">política de privacidad</a></li>
          <li><a href="#">#CONGRESOPARQUES</a></li>
        </ul>
      </div>
      <div class="column ">
        <ul class="menu vertical">
          <li class="menu-text">conferencia</a></li>
          <li><a href="">programa a la vista</a></li>
          <li><a href="">programa completo</a></li>
          <li><a href="">talleres</a></li>
          <li><a href="">patrocinadores y socios</a></li>
          <li><a href="">expositores</a></li>
          <li><a href="">congreso 2019</a></li>
        </ul>
      </div>
      <div class="column">
        <ul class="menu vertical">
          <li class="menu-text">Mérida</li>
          <li><a href="">La ciudad Blanca</a></li>
          <li><a href="">actividades locales</a></li>
          <li><a href="">Hotel sede</a></li>
          <li><a href="">Transportación</a></li>
          <li><a href="">Turismo en mérida</a></li>
        </ul>
      </div>
      <div class="column">
        <ul class="menu vertical">
          <li class="menu-text">Registro</a></li>
          <li><a href="">Tipos de registro</a></li>
          <li><a href="">Precios</a></li>
        </ul>
      </div>
      <div class="column">
        <ul class="menu vertical">
          <li class="menu-text">Acerca de</a></li>
          <li><a href="">ANPR</a></li>
          <li><a href="">¿Por qué participar?</a></li>
          <li><a href="">Parques de México</a></li>
          <li><a href="">Parques Alegres</a></li>
          <li><a href="">Preguntas Frecuentes</a></li>
        </ul>
      </div>
    </div>
      <!-- //Ménu footer -->
  </footer>
  <div class="row column expanded align-center" id="pie">
    <p>© 2017 Asociación Nacional de Parques y Recreación</p>
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
