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
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class="header header-3">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">¿QUIERES SER PROMOTOR?</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column small-12 medium-12">
        <p><span class="letra-capital">S</span>e promotor del <strong>"1er Congreso Internacional de Parques Urbanos"</strong> y gana premios y recompensas
          promoviendo la participación y las inscripciones en este importante evento.</p>
        <h5>¿Por qué participar?</h5>
        <p class="fila-espacio">¿Te interesan los parques urbanos y los espacios públicos en
          México y Latinoamérica?  Tu puedes ser promotor del 1er Congreso Internacional de Parques Urbanos en México y participar
          de nuestro programa de metas y recompensas donde podrás ganar:</p>
        <ol type=a>
          <li>Inscripción completa al 1er Congreso Internacional de Parques Urbanos.</li>
          <li>Transportación aérea desde tu ciudad al evento.</li>
          <li>Hospedaje sin costo durante los días del evento.</li>
          <li>Entrada al coctel VIP donde podrás conocer y convivir con nuestros conferencias magistrales y de sesiones educativas.</li>
          <li>Incentivos económicos por logros en las metas alcanzadas.</li>
        </ol>
        <h5>Cómo participar</h5>
        <p>Llena el formulario en esta página y te haremos llegar por correo electrónico una presentación explicativa de todo el
          proceso, las bases y la condiciones.  Un representante del Congreso se comunicará contigo para resolver tus dudas y
          darte todas las herramientas necesarias para que logres un programa exitoso de promoción.</p>
          <p>Contarás con material como:</p>
        <ol type="a">
          <li>Presentación de ventas.</li>
          <li>Video promocional.</li>
          <li>Pre-programas.</li>
          <li>Posters y Volantes.</li>
          <li>Contactos relevantes en tu comunidad interesados en los parques y espacios públicos.</li>
          <li>Una sesión de capacitación.</li>
        </ol>
        <p class="text-center"><strong>¡Participa en el esfuerzo de convocar a todos los que nos interesan los parques urbanos y espacios púbicos en México y Latinoamérica!</strong></p>
      </div>
    </div>
  </article>

</main>



<?php include'assets/footer.php'; ?>
