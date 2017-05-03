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
    <title>Expo Comercial Parques Urbanos</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class=" header header-expo">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">EXPO COMERCIAL PARQUES URBANOS</h3>
        </div>
      </div>
    </div>
    <form class="" action="" method="post">
      <div class="row fila-espacio">
        <p>Complete esta solicitud para asegurar su participación en la "Expo Comercial Parques Urbanos 2018".</p>
      </div>
      <div class="row">
        <h5>Datos Fiscales (Elaboración de Factura y Contrato)</h5>
        <div class="column medium-8">
          <label for="">Razón Social a Facturar</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-4">
          <label for="">RFC:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Calle:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Número Ext:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Número Int:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Colonia:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Ciudad:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Estado:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">País:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">C.P:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-6">
          <label for="">Representante Legal:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Cargo:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">E-mail:</label>
          <input type="text" name="" value="">
        </div>
        <h5>Información para el directorio de expositores</h5>
        <div class="column medium-12">
          <label for="">Nombre Comercial:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Calle:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Número Ext:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Número Int:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Colonia:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Ciudad:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">Estado:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">País:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-3">
          <label for="">C.P:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-4">
          <label for="">Página Web:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-4">
          <label for="">Lada y Tel:</label>
          <input type="text" name="" value="">
        </div>
        <div class="column medium-4">
          <label for="">Ext:</label>
          <input type="text" name="" value="">
        </div>
      </div>
        <div class="row">
          <h5>Contactos Importantes</h5>
        </div>
        <div class="row">
          <div class="column medium-6">
            <label for="">Contacto del Evento (Responsable de la organización):</label>
            <input type="text" name="" value="">
          </div>
          <div class="column medium-3">
            <label for="">Cargo:</label>
            <input type="text" name="" value="">
          </div>
          <div class="column medium-3">
            <label for="">E-mail:</label>
            <input type="text" name="" value="">
          </div>
          <div class="column medium-6">
            <label for="">Contacto para pagos:</label>
            <input type="text" name="" value="">
          </div>
          <div class="column medium-3">
            <label for="">Cargo:</label>
            <input type="text" name="" value="">
          </div>
          <div class="column medium-3">
            <label for="">E-mail:</label>
            <input type="text" name="" value="">
          </div>
        </div>
        <div class="row fila-espacio">
          <p>Enliste sus 3 opciones principales de stands y sus medidas de su stand.
            Estas solicitudes de espacio son usadas por la administración del show para identificar donde
            le gustaría exhibir. Las opciones de stand seleccionadas no están garantizadas.
            La administración del show revisará su selección al momento de recibir la
            información y la usará como referencia si no es posible encontrarle en el
            día en que usted llenó este formato.</p>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">1.-Stand No.:</label>
            <input type="text" name="" value="">
          </div>
          <div class="column medium-4">
            <label for="">Medidas:</label>
            <input type="text" name="" value="">
          </div>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">2.-Stand No.:</label>
            <input type="text" name="" value="">
          </div>
          <div class="column medium-4">
            <label for="">Medidas:</label>
            <input type="text" name="" value="">
          </div>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">3.-Stand No.:</label>
            <input type="text" name="" value="">
          </div>
          <div class="column medium-4">
            <label for="">Medidas:</label>
            <input type="text" name="" value="">
          </div>
        </div>
        <div class="row">
          <input type="checkbox" name="" value="acepto"<label class="condiciones">
            Al aceptar esta solicitud de espacio, estoy de acuerdo
            con las normas, reglamentos, condiciones de pago y las
            condiciones para la "Expo Comercial Parques Urbanos 2018".</label>
        </div>
        <div class="row column text-center fila-espacio">
          <input type="submit" name="" value="ENVIAR" class="button large">
        </div>
    </form>
  </article
</main>

<?php include'assets/footer.php'; ?>
