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
          <h3 class="titulos">URBAN PARKS EXPO</h3>
        </div>
      </div>
    </div>
    <div class="row fila-espacio">
      <figure class="carga">
        <a href="mapa/index.html" target="_blank">
          <img data-src="img/croquis-2.png" alt="Croquis del recinto" class="croquis" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
        </a>
      </figure>
    </div>
    <form class="expositores" action="alta.php" method="post">
      <div class="row ">
        <div class="column">
          <strong>For information write to Roberto Romahn Diez</strong>
          <p>Phone: 9999 60 07 65 <br> E-mail: comercial@anpr.org.mx</p>
          <p>Fill this application to ensure your participation in the "Urban Parks Expo ".</p>
        </div>
      </div>
      <div class="row">
        <div class="column">
          <h5>Fiscal Data (For invoice and contract elaboration)</h5>
        </div>
      </div>
      <div class="row">
        <div class="column small-12 medium-12">
          <label for="">Company Name:</label>
          <input type="text" name="rs" value="">
        </div>

        <div class="column small-12 medium-4">
          <label for="">Street:</label>
          <input type="text" name="calle" value="">
        </div>
        <div class="column small-6 medium-4">
          <label for="">Building/House Number:</label>
          <input type="text" name="num_ext" value="">
        </div>


        <div class="column small-12 medium-3">
          <label for="">City:</label>
          <input type="text" name="ciudad" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">State:</label>
          <input type="text" name="estado" value="">
        </div>
        <div class="column  small-12 medium-3">
          <label for="">Country:</label>
          <input type="text" name="pais" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">ZIP Code:</label>
          <input type="text" name="cp" value="">
        </div>
        <div class="column small-12 medium-6">
          <label for="">Person/Department to contact:</label>
          <input type="text" name="representante" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Contact Tel Number</label>
          <input type="text" name="cargo" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">E-mail:</label>
          <input type="text" name="email" value="">
        </div>
      </div>
      <div class="row">
        <div class="column">
          <h5>Information for exhibitors directory</h5>
        </div>
      </div>
      <div class="row">

        <div class="column small-12 medium-3">
          <label for="">Street:</label>
          <input type="text" name="calle_2" value="">
        </div>
        <div class="column medium-3">
          <label for="">Building/House Number:</label>
          <input type="text" name="num_ext_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">City:</label>
          <input type="text" name="ciudad_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">State:</label>
          <input type="text" name="estado_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">Country:</label>
          <input type="text" name="pais_2" value="">
        </div>
        <div class="column small-12 medium-3">
          <label for="">ZIP Code:</label>
          <input type="text" name="cp_2" value="">
        </div>
        <div class="column small-12 medium-4">
          <label for="">Web Page:</label>
          <input type="text" name="web" value="">
        </div>
        <div class="column medium-4">
          <label for="">Company's Telephone:</label>
          <input type="text" name="tel" value="">
        </div>

      </div>

        <div class="row fila-espacio">
          <div class="column">
            <p>List the 3 main options for your preferred stand according to the numbering in the map (available spaces). These space options will be used by the committee of Urban Parks Expo, to identify the places where the client wants to exhibit. The selected booth options are not guaranteed. The committee of the Urban Parks Expo will review this selection at the time of receiving the information and will use it as a reference to define the space hand in hand with the client at the time of signing the contract. </p>
          </div>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">1.-Stand No.:</label>
            <input type="text" name="op_1" value="">
          </div>
          <div class="column medium-4">
            <label for="">Measurements:</label>
            <input type="text" name="m_1" value="">
          </div>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">2.-Stand No.:</label>
            <input type="text" name="op_2" value="">
          </div>
          <div class="column medium-4">
            <label for="">Measurements:</label>
            <input type="text" name="m_2" value="">
          </div>
        </div>
        <div class="row">
          <div class="column medium-2">
            <label for="">3.-Stand No.:</label>
            <input type="text" name="op_3" value="">
          </div>
          <div class="column medium-4">
            <label for="">Measurements:</label>
            <input type="text" name="m_3" value="">
          </div>
        </div>
        <div class="row">
          <div class="column shrink">
            <input type="checkbox" name="" value="acepto">
          </div>
          <div class="column">
            <label class="condiciones">By accepting this space request, I agree to the rules, regulations, payment terms and conditions for the "Urban Parks Expo”.</label>
          </div>
        </div>
        <div class="row fila-espacio">
          <div class="column">
            <strong>Download:</strong>
            <ul>
              <li><a href="assets/Reglamento.pdf">Stand regulation</a></li>
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
