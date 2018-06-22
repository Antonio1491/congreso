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
    <title>URBAN PARKS EXPO</title>
    <link rel="stylesheet" href="icons/foundation-icons.css">
    <link rel="stylesheet" href="css/foundation-flex.css">
    <link type="text/css" href="css/jquery-ui-1.8.13.custom.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/app.css">
</head>
<body onload="countdown('contador')">
<?php include'assets/menu.php'; ?>
<main class="back-2">
  <article class="">
    <div class="">
      <div class="row header header-7">
        <div class="column text-center">
          <h3 class="titulos">URBAN PARKS EXPO</h3>
        </div>
      </div>
    </div>
    <div class="action text-center">
     <a href="registro-expositores.php" class="button">Exhibitor request</a>
   </div>
   <div class="contenido expo">
     <div class="row">
       <div class="column">
         <p><span class="letra-capital">T</span>he Urban Parks Expo will bring together suppliers of parks and recreation equipment. It will take place in the city of Mérida, April 26 and 27, 2018.</p>
           <ul>
             <li>Display your products or services and reach your target audience.</li>
             <li>Share your research and disseminate relevant information about your products.</li>
             <li>Identify new clients and strengthen your relationships with current clients.</li>
             <li>Approach new markets.</li>
             <li>Make deals y close negotiations at the moment.</li>
             <li>Do networking.</li>
             <li>Know potential partners that can lead you to business alliances.</li>
           </ul>
         <h4>EXHIBITION FLOOR</h4>
         <p>This modality of contracting does not have furniture, carpet or electricity since it is destined for special designs contracted by the exhibitor with the supplier of its preference. In these cases, a special electrical outlet is usually required, which must be contracted by the exhibitor.</p>
         </p>
       </div>
     </div>
     <div class="row">
       <div class="column small-12 medium-6">
         <ul>
           <li>Marked area on the floor.</li>
           <li>General decoration & lighting of commercial exhibition.</li>
           <li>Security in common areas.</li>
         </ul>
       </div>
       <div class="column small-12 medium-6">
         <ul>
         <li>Cleaning services in halls and common areas.</li>
         <li>Advertising presence in commercial exhibitor catalog</li>
         <li>Diploma of participation</li>
         <li>Exhibitor’s badge (one per each 33 Square Feet).</li>
       </ul>
       </div>
     </div>
     <div class="row">
       <div class="column small-12 medium-6 large-7">
         <figure class="carga">
           <img data-src="img/expo-1.png" alt="Piso de exposición" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
         </figure>
       </div>
       <div class="column medium-6 large-5" >
         <figure>
            <img data-src="img/precio-espacio.png" alt="Precios piso de exposición" >
         </figure>
       </div>
     </div>
     <div class="row expo fila-espacio">
       <div class="column  small-12 medium-7">
         <h4>STANDARD BOOTH PACKAGE INCLUDES </h4>
         <ul>
           <li>Acrylic white screens.</li>
           <li>Expositor name in the top.</li>
           <li>Double electric contact of 110 volts for each 100 square feet.</li>
           <li>Lighting.</li>
           <li>1 Table.</li>
           <li>2 Chairs.</li>
           <li>1 Basquet.</li>
           <li>Security in common areas.</li>
           <li>Cleaning services in halls and common areas.</li>
           <li>Diploma of participation.</li>
           <li>Exhibitor’s badge (one per each 33 square feet).</li>
           <li>Mention in commercial exhibition catalog.</li>
         </ul>
       </div>
       <div class="column medium-5">
       <figure >
         <img data-src="img/precio-stand-2.png" alt="Precios Stand" class="precio" >
       </figure>
       <figure>
          <img data-src="img/stand.png" alt="Stand de 3x3" class="stand" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
       </figure>
       </div>
     </div>

     <div class="row text-center fila-espacio">
       <div class="column">
         <h4>MAP OF “URBAN PARKS EXPO”</h4>
       </div>
     </div>
     <div class="row">
       <figure class="carga">
         <a href="mapa/index.html" target="_blank">
           <img data-src="../img/mapa.jpg" alt="Croquis del recinto" class="croquis" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=idata:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mNkYAAAAAYAAjCB0C8AAAAASUVORK5CYII=">
         </a>
       </figure>
     </div>
 </article>
 <hr>
 <div class="row collapse barra-secciones align-center">
   <div class="column medium-2">
     <a href="conferencias.php"><img src="img/btn-conferencias.png" alt=""></a>
   </div>
   <div class="column medium-2">
     <a href="sesiones.php"><img src="img/btn-sesiones.png" alt=""></a>
   </div>
   <div class="column medium-2">
     <a href="expo.php"><img src="img/btn-expo.png" alt=""></a>
   </div>
   <div class="column medium-2">
     <a href="talleres.php"><img src="img/btn-talleres.png" alt=""></a>
   </div>
 </div>
</main>

<?php include'assets/footer.php'; ?>
