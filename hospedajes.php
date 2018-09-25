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
    <title>Hospedaje</title>

    <?php  require("assets/head_common.php") ?>


</head>
<body onload="countdown('contador')">
  <header class="header_paginas header_hospedaje">
    <?php include'assets/menu.php'; ?>
      <hgroup class="titulo_pagina"><br>
        <h1 >hospedaje</h1>
      </hgroup>
      <div class="row descripcion_header align-center">
        <h5 class="subtitulo_bc ">¡Encuentra tu hospedaje!</h5>
        <p>Monterrey cuenta con una vasta oferta de hoteles, en esta sección encontrarás información sobre hoteles a una distancia caminable de CINTERMEX. </p>
      </div>
  </header>
<main>
  <div class=" row contenedor_hoteles">
    <div class="row">
      <div class="column medium-2 ">
        <div class="item_hotel">
          <figure >
            <a href="#antaris" class="MO"><img src="img/hoteles/antaris.png" alt=""></a>
          </figure>
          <span class="overlay"></span>
        </div>

      </div>
      <div class="column medium-2">
        <figure>
          <a href="#hmonterrey" class="MO"><img src="img/hoteles/hotel_monterrey.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#fourpoints1" class="MO"><img src="img/hoteles/four_points.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#fourpoints2" class="MO"><img src="img/hoteles/four_points_2.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#holidayinn" class="MO"><img src="img/hoteles/holiday_inn.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#crowne" class="MO"><img src="img/hoteles/crowne_plaza.png" alt=""></a>
        </figure>
      </div>
    </div>
    <div class="row">
      <div class="column medium-2">
        <figure>
          <a href="#istay" class="MO"><img src="img/hoteles/istay.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#travohotel" class="MO"><img src="img/hoteles/travohotel.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#hgalerias" class="MO"><img src="img/hoteles/holiday_inn_2.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#htec" class="MO"><img src="img/hoteles/holiday_inn_3.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <figure>
          <a href="#milenium" class="MO"><img src="img/hoteles/milenium.png" alt=""></a>
        </figure>
      </div>
      <div class="column medium-2">
        <a href="#antaris2" class="MO"><img src="img/hoteles/antaris.png" alt=""></a>
      </div>
    </div>
  </div>

  <section >
    <div class="row" id="descripcion_hotel">
      <div id="antaris" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/logo_antaris.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Hotel Antaris Cintermex/Ave. Fundidora Nº 500 Col. Obrera.</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">Parques Urbanos</span></p>
              <p><span>Contacto: </span>T. (81) 83 18 04 44</p>
              <a href="https://hotelantaris.com/ " class="btn_vermas">Sitio Web</a>
            </div>
        </div>
        <!-- <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div> -->
        <div class="row precios_hotel align-center">
          <div class="column medium-6">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>luxor suite</li>
                <li>Master Suite</li>
              </ul>
            </div>
          </div>
          <div class="column medium-6">
            <div class="titulo_tabla">
              <h4>Sencilla o doble</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,300.00</li>
                <li>$1,500.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Hotel monterrey -->
      <div id="hmonterrey" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/hmonterrey.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Morelos 574 ote Colonia Centro Monterrey, Nuevo León CP 64000.</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Parques 2019.”</span></p>
              <p><span>Contacto: </span>T. 8380 6066<br>
                  WhatsApp: 818 253 8965<br>
                  a.lopez@hotelmonterreymacroplaza.com.mx</p>
              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-6">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>sencilla/doble</li>
                <li>triple</li>
                <li>cuádruple</li>
              </ul>
            </div>
          </div>
          <div class="column medium-6">
            <div class="titulo_tabla">
              <h4>Sencilla o doble</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,100.00</li>
                <li>$1,300.00</li>
                <li>$1,500.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="beneficios_hotel">
          <div class="row column">
            <h5>Beneficios y Condiciones</h5>
          </div>
          <div class="row column">
            <ul>
              <li><i class="fi-checkbox"></i> Desayuno Buffet Mexicano incluido</li>
              <li><i class="fi-checkbox"></i> Internet Inalámbrico sin costo.</li>
              <li><i class="fi-checkbox"></i> Botella de agua en habitación.</li>
              <li><i class="fi-checkbox"></i> Llamadas locales sin costo.</li>
              <li><i class="fi-checkbox"></i> Uso de Gimnasio, alberca y Businnes Center.</li>
              <li><i class="fi-checkbox"></i> Estacionamiento sin costo.</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Hotel Fourpoints 1 -->
      <div id="fourpoints1" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/fourpoints.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Av. Miguel Alemán 6064, Col. Torres de Linda Vista, Guadalupe, N.L. C.P. 67138</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Parques 2019.”</span></p>
              <p><span>Contacto: </span>T. 8380 6066<br>
                  WhatsApp: 818 253 8965<br>
                  a.lopez@fourpointsbysheratongaleriasmonterrey.com.mx</p>
              <a href="https://www.espanol.marriott.com/hotels/travel/mtyfp-four-points-galerias-monterrey?program=spg " class="btn_vermas">Sitio Web</a>
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-6">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>sencilla/doble</li>
                <li>triple</li>
                <li>cuádruple</li>
              </ul>
            </div>
          </div>
          <div class="column medium-6">
            <div class="titulo_tabla">
              <h4>Sencilla o doble</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,300.00</li>
                <li>$1,500.00</li>
                <li>$1,700.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="beneficios_hotel">
          <div class="row column">
            <h5>Beneficios y Condiciones</h5>
          </div>
          <div class="row column">
            <ul>
              <li><i class="fi-checkbox"></i> Desayuno Buffet.</li>
              <li><i class="fi-checkbox"></i> Internet Inalámbrico sin costo.</li>
              <li><i class="fi-checkbox"></i> Botella de agua en habitación.</li>
              <li><i class="fi-checkbox"></i> Llamadas locales sin costo.</li>
              <li><i class="fi-checkbox"></i> Uso de Gimnasio, alberca y Businnes Center.</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Hotel Fourpoints 2 -->
      <div id="fourpoints2" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/fourpoints2.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Av. Insurgentes 3961,Col. Vista hermosa, Cp. 64620, Monterrey, N.L. 01 800 5000 090</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Parques 2019.”</span></p>
              <p><span>Contacto: </span>T. 8380 6066<br>
                  WhatsApp: 818 253 8965<br>
                  a.lopez@fourpointsbysheratongaleriasmonterrey.com.mx</p>
              <a href="https://www.espanol.marriott.com/hotels/travel/mtyfp-four-points-galerias-monterrey?program=spg " class="btn_vermas">Sitio Web</a>
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-6">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>sencilla/doble</li>
                <li>triple</li>
                <li>cuádruple</li>
              </ul>
            </div>
          </div>
          <div class="column medium-6">
            <div class="titulo_tabla">
              <h4>Sencilla o doble</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,500.00</li>
                <li>$1,700.00</li>
                <li>$1,900.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="beneficios_hotel">
          <div class="row column">
            <h5>Beneficios y Condiciones</h5>
          </div>
          <div class="row column">
            <ul>
              <li><i class="fi-checkbox"></i> Desayuno Buffet.</li>
              <li><i class="fi-checkbox"></i> Internet Inalámbrico sin costo.</li>
              <li><i class="fi-checkbox"></i> Botella de agua en habitación.</li>
              <li><i class="fi-checkbox"></i> Llamadas locales sin costo.</li>
              <li><i class="fi-checkbox"></i> Uso de Gimnasio, alberca y Businnes Center.</li>
              <li><i class="fi-checkbox"></i> Estacionamiento sin costo.</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- Hotel holiday Inn -->
      <div id="holidayinn" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/holidayinn.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Retorno Fundidora #100 Col. Obrera, Monterrey, Nuevo León, México. CP 64010</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Congreso Parques 2019.”</span></p>
              <p><span>Contacto: </span>T. 01 800 772 7083<br>
                  cro.hipfmty@hotelesmilenium.com</p>
              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-5">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>superior / <span>Plan Europeo</span></li>
                <li>piso ejecutivo / <span>Incluye desayuno ejecutivo</span></li>
              </ul>
            </div>
          </div>
          <div class="column medium-3">
            <div class="titulo_tabla">
              <h4>Tarifa SGL/DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,291.00</li>
                <li>$2,529.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,529.00</li>
                <li>$2,767.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,767.00</li>
                <li>$3,005.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="titulo_hoteles "><br>
          <h3 class="subtitulo_verde">Con desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>superior</li>
                <li>piso ejecutivo</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa SGL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,475.00</li>
                <li>$2,713.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,660.00</li>
                <li>$2,898.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$3,077.00</li>
                <li>$3,315.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$3,495.00</li>
                <li>$3,736.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Hotel crowne -->
      <div id="crowne" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/crowne.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Ave. Constitución #300 Ote. Zona Centro Monterrey Histórico, Nuevo León, México. CP 64000</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Congreso Parques 2019.”</span></p>
              <p><span>Contacto: </span>T. 01 800 839 9300<br>
                  cro.cpmty@hotelesmilenium.com</p>
              <a href="https://www.ihg.com/crowneplaza/hotels/us/es/reservation" class="btn_vermas">Sitio Web</a>
            </div>
        </div>
        <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-5">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>Standart / <span>Plan Europeo</span></li>
                <li>Superior / <span>Plan Europeo</span></li>
                <li>Piso Ejecutivo / <span>Incluye desayuno ejecutivo</span></li>
              </ul>
            </div>
          </div>
          <div class="column medium-3">
            <div class="titulo_tabla">
              <h4>Tarifa SGL/DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,815.00</li>
                <li>$2,053.00</li>
                <li>$2,291.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,053.00</li>
                <li>$2,291.00</li>
                <li>$2,529.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,291.00</li>
                <li>$2,529.00</li>
                <li>$2,767.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="titulo_hoteles "><br>
          <h3 class="subtitulo_verde">Con desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>standart</li>
                <li>superior</li>
                <li>piso ejecutivo</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa SGL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,029.00</li>
                <li>$2,267.00</li>
                <li>$2,505.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,244.00</li>
                <li>$2,482.00</li>
                <li>$2,720.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,695.00</li>
                <li>$3,984.00</li>
                <li>$3,172.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$3,148.00</li>
                <li>$3,386.00</li>
                <li>$3,624.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Hotel iStay -->
      <div id="istay" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/hoteles-28.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>José María Morelos 191 Pte, Centro, 64000 Monterrey, N.L.</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Congreso Parques 2019.”</span></p>
              <p><span>Contacto: </span>T. 01 800 223 6870<br>
                  cro.istay@hotelesmilenium.com</p>
              <a href="https://www.istaymonterrey.com/default-es.html " class="btn_vermas">Sitio Web</a>
            </div>
        </div>
        <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-5">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe / <span>Plan Europeo</span></li>
                <li>Superior / <span>Plan Europeo</span></li>
              </ul>
            </div>
          </div>
          <div class="column medium-3">
            <div class="titulo_tabla">
              <h4>Tarifa SGL/DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,220.00</li>
                <li>$1,339.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,458.00</li>
                <li>$1,577.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,696.00</li>
                <li>$1,815.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="titulo_hoteles "><br>
          <h3 class="subtitulo_verde">Con desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe</li>
                <li>Superior</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa SGL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,344.00</li>
                <li>$1,463.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,463.00</li>
                <li>$1,582.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,820.00</li>
                <li>$1,939.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,177.00</li>
                <li>$2,296.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Hotel travoHotel -->
      <div id="travohotel" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/travo.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Padre Mier #194 Pte, Colonia Centro, CP 64000 Monterrey, Nuevo León. C.P. 64000</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Congreso Parques 2019.”</span></p>
              <p><span>Contacto: </span>01 800 018 7286<br>
                  cro.travohotelmty@hotelesmilenium.com</p>
              <a href="https://www.travohotel.com.mx/default-es.html " class="btn_vermas">Sitio Web</a>
            </div>
        </div>
        <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-5">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe / <span>Plan Europeo</span></li>
                <li>Superior / <span>Plan Europeo</span></li>
              </ul>
            </div>
          </div>
          <div class="column medium-3">
            <div class="titulo_tabla">
              <h4>Tarifa SGL/DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,066.00</li>
                <li>$1,304.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,304.00</li>
                <li>$1,542.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,542.00</li>
                <li>$1,780.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="titulo_hoteles "><br>
          <h3 class="subtitulo_verde">Con desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe</li>
                <li>Superior</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa SGL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,189.00</li>
                <li>$1,427.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,308.00</li>
                <li>$1,665.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,665.00</li>
                <li>$2,022.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,022.00</li>
                <li>$2,260.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Hotel Holida Inn Express 1 -->
      <div id="hgalerias" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/hgalerias.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Ave. San Jerónimo #1082 Pte. Col. San Jerónimo, Monterrey, Nuevo León, México. CP 64640</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Congreso Parques 2019.”</span></p>
              <p><span>Contacto: </span>01 800 711 9158<br>
                  cro.hiegal@hotelesmilenium.com</p>
              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-5">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe / <span>Plan Europeo</span></li>
                <li>Superior / <span>Plan Europeo</span></li>
              </ul>
            </div>
          </div>
          <div class="column medium-3">
            <div class="titulo_tabla">
              <h4>Tarifa SGL/DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,577.00</li>
                <li>$1,815.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,815.00</li>
                <li>$2,053.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,053.00</li>
                <li>$2,291.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="titulo_hoteles "><br>
          <h3 class="subtitulo_verde">Con desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe</li>
                <li>Superior</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa SGL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,577.00</li>
                <li>$1,815.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,577.00</li>
                <li>$1,815.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,815.00</li>
                <li>$2,053.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,053.00</li>
                <li>$2,291.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Hotel Holida Inn Express Tecnologico -->
      <div id="htec" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/htec.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Eugenio Garza Sada #3680 Sur, Col. Villa Los Pinos, Monterrey, Nuevo León, México. CP 64770</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Congreso Parques 2019.”</span></p>
              <p><span>Contacto: </span>01 800 710 2139<br>
                  cro.hietec@hotelesmilenium.com</p>
              <!-- <a href="#" class="btn_vermas">Sitio Web</a> -->
            </div>
        </div>
        <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-5">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe / <span>Plan Europeo</span></li>
                <li>Superior / <span>Plan Europeo</span></li>
              </ul>
            </div>
          </div>
          <div class="column medium-3">
            <div class="titulo_tabla">
              <h4>Tarifa SGL/DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,577.00</li>
                <li>$1,815.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,815.00</li>
                <li>$2,053.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,053.00</li>
                <li>$2,291.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="titulo_hoteles "><br>
          <h3 class="subtitulo_verde">Con desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe</li>
                <li>Superior</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa SGL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,577.00</li>
                <li>$1,815.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,577.00</li>
                <li>$1,815.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,815.00</li>
                <li>$2,053.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,053.00</li>
                <li>$2,291.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Hotel Milenium -->
      <div id="milenium" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/mileniumh.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Ave. José Vasconcelos No. 300 Ote., Residencial San Agustin, Garza García, N.L., México 66260</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">“Congreso Parques 2019.”</span></p>
              <p><span>Contacto: </span>T. 01 800 674 6835<br>
                  cro.msmilenium@hotelesmilenium.com</p>
              <a href="https://www.msmilenium.com/es/habitaciones " class="btn_vermas">Sitio Web</a>
            </div>
        </div>
        <div class="titulo_hoteles ">
          <h3 class="subtitulo_verde">Sin desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-5">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe / <span>Plan Europeo</span></li>
                <li>Superior / <span>Plan Europeo</span></li>
                <li>Jr. suite piso estándar / <span>Plan Europeo</span></li>
              </ul>
            </div>
          </div>
          <div class="column medium-3">
            <div class="titulo_tabla">
              <h4>Tarifa SGL/DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,172.00</li>
                <li>$2,470.00</li>
                <li>$2,767.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,470.00</li>
                <li>$2,767.00</li>
                <li>$3,065.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,767.00</li>
                <li>$3,065.00</li>
                <li>$3,362.00</li>
              </ul>
            </div>
          </div>
        </div>
        <div class="titulo_hoteles "><br>
          <h3 class="subtitulo_verde">Con desayuno buffet</h3>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-4">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>De luxe / <span>Plan Europeo</span></li>
                <li>Superior / <span>Plan Europeo</span></li>
                <li>Jr. suite piso estándar / <span>Plan Europeo</span></li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa SGL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,398.00</li>
                <li>$2,696.00</li>
                <li>$2,993.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa DBL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$2,617.00</li>
                <li>$2,915.00</li>
                <li>$3,212.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa TPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$3,136.00</li>
                <li>$3,434.00</li>
                <li>$3,731.00</li>
              </ul>
            </div>
          </div>
          <div class="column medium-2">
            <div class="titulo_tabla">
              <h4>Tarifa CPL</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$3,653.00</li>
                <li>$3,945.00</li>
                <li>$4,248.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <!-- Hotel antaris 2 -->
      <div id="antaris2" class="oculto">
        <div class="row">
            <div class="column medium-6">
              <figure>
                <img src="img/hoteles/logo_antaris.png" alt="">
              </figure>
            </div>
            <div class="column medium-6 datos_h">
              <p><span>Ubicación: </span>Hotel Antaris Galerías / Ave. Constitución esquina con Venustiano Carranza.</p>
              <p><span>Clave de reservación: </span><span class="clave_reservacion">Parques Urbanos</span></p>
              <p><span>Contacto: </span>T. (81) 81 30 18 18</p>
              <a href="https://hotelantaris.com/" class="btn_vermas">Sitio Web</a>
            </div>
        </div>
        <div class="row precios_hotel align-center">
          <div class="column medium-6">
            <div class="titulo_tabla ">
              <h4>Habitación</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>luxor suite</li>
                <li>Master Suite</li>
              </ul>
            </div>
          </div>
          <div class="column medium-6">
            <div class="titulo_tabla">
              <h4>Sencilla o doble</h4>
            </div>
            <div class="tabla">
              <ul>
                <li>$1,100.00</li>
                <li>$1,300.00</li>
              </ul>
            </div>
          </div>
        </div>
      </div>

    </div> <!-- fin de contenedor hoteles-->
    <br><br>
    <?php include('assets/menu_sede.php') ?>

  </section>

</main>

<?php include'assets/footer.php'; ?>
