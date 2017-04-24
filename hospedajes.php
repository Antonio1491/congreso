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
    <title>Hospedajes</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-1">
  <article class="">
    <div class=" header header-ciudad">
      <div class="row align-middle">
        <div class="column text-center">
          <h3 class="titulos">HOSPEDAJES</h3>
        </div>
      </div>
    </div>
    <div class="row contenido">
      <div class="column medium-4 hoteles">
          <a href="https://secure.ibis.com/store/index.html#/es/hotels?q=Merida&dateIn=&children=&nights=&adults=1&domainId=www.ibis.com" target="_blank"><h5>Hotel Ibis Mérida</h5></a>
          <span>Costo promedio por noche:</span> $800 MXN
          <span>Distancia:</span> 550mts, 7 minutos
      </div>
      <div class="column medium-4 hoteles">
          <a href="http://www.hotelvictoriamerida.com/" target="_blank"><h5>Hotel Victoria</h5></a>
          <span>Costo promedio por noche:</span> $1500 MXN
          <span>Distancia:</span> 800mts, 10 minutos
      </div>
      <div class="column medium-4 hoteles">
          <a href="http://www.wyndhammerida.com/" target="_blank"><h5>Wyndham Mérida.</h5></a>
          <span>Costo promedio por noche:</span> $2,250 MXN
          <span>Distancia:</span> 450mts, 6 minutos
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-4 hoteles">
          <a href="https://merida.regency.hyatt.com/es/hotel/home.html" target="_blank"><h5>Hyatt Regency Mérida</h5></a>
          <span>Costo promedio por noche:</span> $2,250 MXN
          <span>Distancia:</span> 3000mts, 4 minutos
      </div>
      <div class="column medium-4 hoteles">
          <a href="http://www.presidenteicmerida.com/" target="_blank"><h5>Intercontinental Presidente Mérida</h5></a>
          <span>Costo promedio por noche:</span> $2,500 MXN
          <span>Distancia:</span> 180mts, 2 minutos
      </div>
      <div class="column medium-4 hoteles">
          <a href="http://www.fiestamericana.com/es/web/fiesta-americana-merida" target="_blank"><h5>Fiesta Americana Mérida</h5></a>
          <span>Costo promedio por noche:</span> $2,000 MXN
          <span>Distancia:</span> 290mts, 4 minutos
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-4 hoteles">
          <a href="https://www.holidayinn.com/hotels/us/es/reservation/searchresult?qAdlt=1&qBrs=6c.hi.ex.rs.ic.cp.in.sb.cw.cv.ul.vn.ki.sp.nd.ct&qChld=0&qDest=MERIDA%2CMexico&qFRA=1&qGRM=0&qIta=99612693&qPSt=0&qRRSrt=rt&qRef=df&qRms=1&qRpn=1&qRpp=20&qSHp=1&qSmP=3&qSrt=sBR&qWch=0&srb_u=1&icdv=99612693&sicreative=161614599020&siclientid=1927&sitrackingid=745394737&dp=true&glat=SEAR " target="_blank"><h5>Holiday Inn Mérida.</h5></a>
          <span>Costo promedio por noche:</span> $1,800 MXN
          <span>Distancia:</span> 350mts, 4 minutos
      </div>
      <div class="column medium-4 hoteles">
          <a href="http://www.elconquistador.com.mx/index.html" target="_blank"><h5>El Conquistador </h5></a>
          <span>Costo promedio por noche:</span> $1,000 MXN
          <span>Distancia:</span>950mts, 12 minutos
      </div>
      <div class="column medium-4 hoteles">
          <a href="http://hotellasamericas.wixsite.com/merida" target="_blank"><h5>Hotel Las Américas Mérida</h5></a>
          <span>Costo promedio por noche:</span> $600 MXN
          <span>Distancia:</span> 1km, 12 minutos
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-4 hoteles">
        <a href="http://www.hotelmarques.com.mx/" target="_blank"><h5>Hotel el Marqués</h5></a>
        <span>Costo promedio por noche:</span> $600 MXN
        <span>Distancia:</span> 1km, 12 minutos
      </div>
    </div>
    <div class="row fila-espacio">
      <div class="column medium-6">
        <img src="img/hoteles-1.png" alt="">
      </div>
      <div class="column medium-6">
        <img src="img/hoteles-2.jpg" alt="">
      </div>
    </div>
  </article>
</main>

<?php include'assets/footer.php'; ?>
