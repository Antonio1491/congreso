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
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="registro-expo">
    <div class=" header header-2">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">EXPO COMERCIAL PARQUES URBANOS</h3>
        </div>
      </div>
    </div>
    <div class="row fila-espacio">
      <figure class="carga">
        <img data-src="img/croquis.png" alt="Croquis de la Expo Parques Urbanos" class="croquis" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
      </figure>
    </div>
    <form class="expositores" action="alta.php" method="post">
      <div class="row ">
        <div class="column">
          <strong>Para informes y ventas con Roberto Romahn Diez</strong>
          <p>Teléfono: 9999 60 07 65 <br> E-mail: comercial@anpr.org.mx</p>
          <p>Complete esta solicitud para asegurar su participación en la "Expo Comercial Parques Urbanos 2018".</p>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <h5>Datos Fiscales (Elaboración de Factura y Contrato)</h5>
        </div>
      </div>
      <div class="row">
        <div class="column small-12 medium-8">
          <label for="">Razón Social a Facturar:</label>
          <input type="text" name="rs" value="">
        </div>
        <div class="column small-12 medium-4">
          <label for="">RFC:</label>
          <input type="text" name="rfc" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Calle:</label>
          <input type="text" name="calle" value="">
        </div>
        <div class="column small-6 medium-3">
          <label for="">Número Ext:</label>
          <input type="text" name="num_ext" value="">
        </div>
        <div class="column small-6 medium-3">
          <label for="">Número Int:</label>
          <input type="text" name="num_int" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Colonia:</label>
          <input type="text" name="colonia" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Ciudad:</label>
          <input type="text" name="ciudad" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Estado:</label>
          <input type="text" name="estado" value="">
        </div>
        <div class="column  small-12 medium-3">
          <label for="">País:</label>
          <input type="text" name="pais" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">C.P:</label>
          <input type="text" name="cp" value="">
        </div>
        <div class="column small-12 medium-6">
          <label for="">Representante Legal:</label>
          <input type="text" name="representante" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Cargo:</label>
          <input type="text" name="cargo" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">E-mail:</label>
          <input type="text" name="email" value="">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <h5>Información para el directorio de expositores</h5>
        </div>
      </div>
      <div class="row">
        <div class="column small-12 medium-12">
          <label for="">Nombre Comercial:</label>
          <input type="text" name="nom_comercial" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Calle:</label>
          <input type="text" name="calle_2" value="">
        </div>
        <div class="column medium-3">
          <label for="">Número Ext:</label>
          <input type="text" name="num_ext_2" value="">
        </div>
        <div class="column medium-3">
          <label for="">Número Int:</label>
          <input type="text" name="num_int_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Colonia:</label>
          <input type="text" name="colonia_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Ciudad:</label>
          <input type="text" name="ciudad_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Estado:</label>
          <input type="text" name="estado_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">País:</label>
          <input type="text" name="pais_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">C.P:</label>
          <input type="text" name="cp_2" value="">
        </div>
        <div class="column small-12 medium-4">
          <label for="">Página Web:</label>
          <input type="text" name="web" value="">
        </div>
        <div class="column medium-4">
          <label for="">Lada y Tel:</label>
          <input type="text" name="tel" value="">
        </div>
        <div class="column medium-4">
          <label for="">Ext:</label>
          <input type="text" name="ext" value="">
        </div>
      </div>
        <div class="row">
          <div class="column">
            <h5>Contactos Importantes</h5>
          </div>
        </div>
        <div class="row">
          <div class="column small-12 medium-6">
            <label for="">Contacto del Evento (Responsable de la organización):</label>
            <input type="text" name="contacto_evento" value="">
          </div>
          <div class="column small-12 medium-3">
            <label for="">Cargo:</label>
            <input type="text" name="cargo_evento" value="">
          </div>
          <div class="column small-12 medium-3">
            <label for="">E-mail:</label>
            <input type="text" name="email_evento" value="">
          </div>
          <div class="column small-12 medium-6">
            <label for="">Contacto para pagos:</label>
            <input type="text" name="contacto_pagos" value="">
          </div>
          <div class="column small-12 medium-3">
            <label for="">Cargo:</label>
            <input type="text" name="cargo_pagos" value="">
          </div>
          <div class="column small-12 medium-3">
            <label for="">E-mail:</label>
            <input type="text" name="email_pagos" value="">
          </div>
        </div>
        <div class="row fila-espacio">
          <div class="column">
            <p>Enliste sus 3 opciones principales de su stand según la numeración en el plano (espacios disponibles).
              Estas opciones de espacio serán usadas por la administración de la Expo Parques Urbanos 2018, para
              identificar los lugares donde desea exhibir el cliente. Las opciones de stand seleccionadas no están
              garantizadas. La administración de la Expo Parques Urbanos 2018 revisará esta selección al momento de
              recibir la información y la usará como referencia para definir el espacio junto con el cliente al momento
              de la firma del convenio.  </p>
          </div>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">1.-Stand No.:</label>
            <input type="text" name="op_1" value="">
          </div>
          <div class="column medium-4">
            <label for="">Medidas:</label>
            <input type="text" name="m_1" value="">
          </div>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">2.-Stand No.:</label>
            <input type="text" name="op_2" value="">
          </div>
          <div class="column medium-4">
            <label for="">Medidas:</label>
            <input type="text" name="m_2" value="">
          </div>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">3.-Stand No.:</label>
            <input type="text" name="op_3" value="">
          </div>
          <div class="column medium-4">
            <label for="">Medidas:</label>
            <input type="text" name="m_3" value="">
          </div>
        </div>
        <div class="row">
          <div class="column shrink">
            <input type="checkbox" name="" value="acepto">
          </div>
          <div class="column">
            <label class="condiciones">Al aceptar esta solicitud de espacio, estoy de acuerdo
            con las normas, <a href="assets/Reglamento-Expo.pdf">reglamentos</a>, condiciones de pago y las
            condiciones para la "Expo Comercial Parques Urbanos 2018".</label>
          </div>
        </div>
        <div class="row fila-espacio">
          <div class="column">
            <strong>Descargas Importantes:</strong>
            <ul>
              <li><a href="assets/Reglamento-Expo.pdf">Reglamento</a></li>
            </ul>
          </div>
        </div>
        <div class="row column text-center fila-espacio">
          <input type="submit" name="" value="ENVIAR" class="button">
        </div>
    </form>
  </article>
</main>

<?php include'assets/footer.php'; ?>
