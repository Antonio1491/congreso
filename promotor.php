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
    <title>¿Quieres ser promotor?</title>
    <?php  require("assets/head_common.php") ?>
    <!-- <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css"> -->
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class="header header-3">
      <div class="row align-middle">
        <div class="column text-center">
          <h1 class="titulos">¿QUIERES SER PROMOTOR?</h1>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="column small-12 medium-12">
        <div class="text-center">
          <img src="img/promotores.png" alt="" id="img-promotor" class="img-promotores" alt="Promotores del congreso internacional de parques urbanos">
        </div>
      </div>
    </div>
    <div class="row">
      <p >¿Te interesan los parques urbanos y los espacios públicos en
          México y Latinoamérica?  Tú puedes ser promotor del <strong>1er Congreso Internacional de Parques Urbanos</strong> en México y participar
          de nuestro programa de metas y recompensas donde podrás ganar:</p>
    </div>
    <div class="row">
      <div class="column medium-6">
        <ol type=A>
          <li>Inscripción completa de dos días al 1er Congreso Internacional de Parques Urbanos.</li>
          <li>Transportación aérea desde tu ciudad al evento.</li>
          <li>Hospedaje sin costo durante los días del evento.</li>
          <li>Entrada al coctel VIP donde podrás conocer y convivir con nuestros conferencistas magistrales y de sesiones educativas.</li>
          <li>Incentivos económicos por logros en las metas alcanzadas.</li>
        </ol>
      </div>
      <div class="column medium-6">
        <img src="img/promotores-2.png" alt="">
      </div>
    </div>
    <div class="row">
      <div class="column medium-12">
        <img src="img/beneficios-promotores.jpg" alt="">
      </div>
    </div>
    <div class="row">
      <div class="column medium-12">
          <img src="img/beneficios-promotores-2.jpg" alt="">
      </div>
    </div>
    <div class="row">
      <div class="column medium-12">
          <img src="img/beneficios-promotores-3.jpg" alt="">
      </div>
    </div>

    <div class="row">
      <h5 class="fila-espacio">¿Cómo participar?</h5>
      <p>Llena el formulario en esta página y te haremos llegar una presentación explicativa del
        proceso, las bases y la condiciones.  Un representante del congreso se comunicará contigo para resolver tus dudas y
        darte todas las herramientas necesarias para que logres un programa exitoso de promoción.<br>
        Contarás con material como:</p>
      <ol type="a">
        <li>Presentación de ventas.</li>
        <li>Video promocional.</li>
        <li>Programas preliminares</li>
        <li>Posters y Volantes.</li>
        <li>Contactos relevantes en tu comunidad interesados en los parques y espacios públicos.</li>
        <li>Sesión de capacitación.</li>
      </ol><br>

    </div>
    <div class="formulario_promotores">
      <div class="row">
          <p class="text-center"><strong>¡Participa en este gran esfuerzo por convocar a todos los que nos interesan los parques urbanos y espacios púbicos en México y Latinoamérica!</strong></p>
      </div>
      <form class="" action="registro-promotor.php" method="post">
      <div class="row">
          <div class="column small-12 medium-4">
            <label for="">Nombre y Apellido:</label>
            <input type="text" name="nombre" value="" required>
          </div>
          <div class="column small-12 medium-3">
            <label for="">E-mail:</label>
            <input type="email" name="email" value="" required>
          </div>
          <div class="column small-12 medium-2">
            <label for="">Tel: </label>
            <input type="text" name="tel" value="" required>
          </div>
          <div class="column small-12 medium-3">
            <label for="">Ciudad:</label>
            <input type="text" name="ciudad" value="" required>
          </div>
      </div>
      <div class="row column">
          <input type="submit" name="" value="Enviar Datos" class="button enviar-datos">
      </div>
      </form>
    </div>


  <div class="row column contenido">
    <h5>Condiciones generales del promotor</h5>
    <ul>

      <li>Se entregará un código de referencia al promotor para controlar sus beneficios.</li>
      <li>El descuento es aplicado en los boletos: General y Estudiante.</li>
      <li>El descuento por el número total de inscripciones realizadas con el código del promotor, será aplicado en el módulo de registro los días del Congreso sobre el precio general de $3,900.</li>
      <li>Los beneficios por hospedaje y transportación aérea se pagarán en efectivo ÚNICAMENTE los días del Congreso presentando el recibo o reservación del boleto de avión, autobús u otro medio de transporte así como el de su hotel. </li>
      <li>Beneficios por transportación y hospedaje: La cuota máxima que el comité organizador del congreso se responsabiliza a cubrir bajo estos dos conceptos (transporte y hospedaje) es de $4,500 MXN por cada concepto. Si existe una diferencia mayor a este precio, éste deberá ser cubierto por el promotor. Si el costo a cubrir bajo estos dos conceptos es menor $4,500 el comité organizador no pagará la diferencia en efectivo. </li>
      <li>Los descuentos a estudiantes, no aplíca hospedaje y transportación, sólo beca del 100%. </li>
    </ul>
    <h5>Otras condiciones</h5>
      <ul>
        <li>Cada persona que se inscriba utilizando el código del promotor, tendrá un 10% de descuento directo sobre el precio de la inscripción.</li>
        <li>El precio de la inscripción general al congreso aplica sobre las fechas publicadas en nuestra página web y en el programa preliminar.</li>
        <li>Los precios de las inscripciones ya incluyen IVA.</li>
      </ul>
  </div>
  </article>

</main>



<?php include'assets/footer.php'; ?>
