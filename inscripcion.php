<?php
session_start();
    $_SESSION['dia'] = '25';
    $_SESSION['mes'] = '3'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2018';
    $_SESSION['hora'] = '9';
    $_SESSION['minuto'] = '00';
    $_SESSION['segundo'] = '00';
?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripción</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class=" header header-2">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">INSCRIPCIÓN</h1>
        </div>
      </div>
    </div>

    <section>
      <div class="row column contenido align-center">
        Aprovecha nuestra promoción a 3 meses sin intereses con tarjetas participantes.<img src="img/tarjestas-admitidas.png" alt="" class="tarjetas">
      </div>
      <div class="row fila-espacio text-center">
        <div class="column nota">
          <p><strong>Nota:</strong> La inscripción a los talleres y eventos sociales se podrá realizar en el proceso de la compra de un boleto general o de estudiante. ¡Entra a la opción COMPRAR del boleto que adquirirás y aparecerán estas opciones!.</p>
        </div>
      </div>
      <div class="row inscripciones align-center">
        <div class="column small-10 medium-4">
          <!-- <div class="card-info-label">
            <div class="card-info-label-text">
              COMPRA
            </div>
          </div> -->
          <div class="card-info-content">
            <ul class="pricing-table no-bullet text-center">
              <li class="title">Estudiantes</li>
              <li class="price"><span class="price desc">$1,900.00 </span></li>
              <!-- <li class="price desc">$1,500.00  <span class="pesos">MXN</span></li> -->
              <!-- <li><span class="fecha-precio">* Precio hasta el 1 de Febrero</span><br><span class="description">* No aplica para estudiantes de Posgrados <br>* Presentar la constancia de estudios el día del evento</span></li> -->
              <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
              <li>Sesiones Educativas <br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Eventos Sociales <br><i class="fi-x"></i></li>
              <li>Talleres <br><i class="fi-x"></i></li>
              <li>Membresía anual ANPR México <br><i class="fi-check"></i></li>
              <li><a class="button" id="botonComprarEstudiantes" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
              <script type="text/javascript">
               $( '#botonComprarEstudiantes' ).click(function() {
              //
                      fbq('track', 'Lead');

                });
              </script>
              </ul>
            </div>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title">general</li>
              <!-- <li class="price"><span class="precio-antes">$4,900.00 </span></li> -->
              <li class="price">$4,900.00  <span class="pesos">MXN</span></li>
              <!-- <li class="fecha-precio">* Precio a partir del 1 de Enero hasta el 1 de Marzo</li> -->
              <li>Conferencias Magistrales <br><i class="fi-check"></i></li>
              <li>Sesiones Educativas <br><i class="fi-check"></i></li>
              <li>Expo <br><i class="fi-check"></i></li>
              <li>Eventos Sociales <br><i class="fi-check"></i></li>
              <li>Talleres <br><i class="fi-x"></i></li>
              <li>Membresía anual ANPR México <br><i class="fi-check"></i></li>
              <li><a id="botonComprarGeneral" class="button" href="https://goo.gl/4DDkN9" target="_blank" >COMPRAR</a></li>

                        <script type="text/javascript">
                         $( '#botonComprarGeneral' ).click(function() {
                        //
                                fbq('track', 'Lead');

                          });
                        </script>
            </ul>
        </div>
        <div class="column small-10 medium-4">
          <ul class="pricing-table no-bullet text-center">
              <li class="title">Expo</li>
              <li class="price">$500.00  <span class="pesos">MXN</span></li>
              <li class="fecha-precio">* Precio fijo</li>
              <li>Conferencias Magistrales <br><i class="fi-x"></i></li>
              <li>Sesiones Educativas <br><i class="fi-x"></i></li>
              <li>Expo Comercial Parques Urbanos<br><i class="fi-check"></i></li>
              <li>Eventos Sociales <br><i class="fi-x"></i></li>
              <li>Talleres <br><i class="fi-x"></i></li>
              <li>Membresía anual ANPR México<br><i class="fi-x"></i></li>
              <li><a class="button" href="https://goo.gl/4DDkN9" target="_blank">COMPRAR</a></li>
            </ul>

        </div>
      </div>
    </section>

  </article>
  <!-- <section id="promocion">
    <div class="row">
      <p><span>Promoción:</span> Inscríbete del 13 al 15 de Marzo, invita a un amig@ y aprovecha la promoción:
        Taller GRATIS para ambos, y 40% de descuento adicional para el segundo inscrito. No Válido con otras
        promociones y no aplica con folios de registro anteriores al 13 de Marzo.</br><br>
         1.- Registrate con la opción de Cuota General y el código: TALLER-40.<br> 2.- Envía el folio de
          registro al correo: info@congresoparques.com.<br> 3.- Recibe otro códico para tu ami@ que incluye: taller
          gratis y 40% de descuento en su boleto de cuota general.</p>
    </div>
  </section> -->
</main>

<?php include'assets/footer.php'; ?>
