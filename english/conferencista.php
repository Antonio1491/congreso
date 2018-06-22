<?php
session_start();
    $_SESSION['dia'] = '25';
    $_SESSION['mes'] = '3'; // los meses van del 0 al 11
    $_SESSION['ano'] = '2018';
    $_SESSION['hora'] = '9';
    $_SESSION['minuto'] = '00';
    $_SESSION['segundo'] = '00';

    require("datos_conexion.php")
?>
<!doctype html>
<html class="no-js" lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferencista - Ponente</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="">
  <div class=" header header-8">
    <div class="row align-middle">
      <div class="column text-center">
        <h1 class="titulos">DETAILS OF THE SPEAKERS</h1>
      </div>
    </div>
  </div>
  <section>

    <div class="row contenido">
      <?php
        $id = $_GET["id"];
        $sql = "SELECT * FROM usuarios WHERE id_usuario = $id ";
        $resultado = $conexion->consultar($sql);
        while ($fila = mysqli_fetch_array($resultado)) {
          echo"<div class='column small-12 medium-4'>
                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$fila['foto']."'>
                </div>";
          echo "<div class='column small-12 medium-8 detalles-conferencistas'>
                  <h4>".$fila['nombre']."</h4>
                  <h5>".$fila['empresa_ing']."</h5>
                  <h6>".$fila['cargo_ing']."</h6>
                  <p>".$fila['biografia_ing']."</p>
                </div>";
        }

       ?>
    </div>
  </section>



</main>

<?php include'assets/footer.php'; ?>
