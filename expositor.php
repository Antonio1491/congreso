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
    <title>Expo Parques Urbanos</title>
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
          <h3 class="titulos">EXPO PARQUES URBANOS</h3>
        </div>
      </div>
    </div>
    <div class="action text-center">
     <a href="registro-expositores.php" class="button">Solicitud de expositor</a>
   </div>
   <div class="contenido expo">
     <div class="row">
       <div class="column">
         <p><span class="letra-capital">L</span>a "Expo Parques Urbanos" reune a proveedores de materiales
           y equipo de recreación, que se instalará el día 25 y se llevará a cabo los días 26 y 27 de Abril de 2018.  </p>
           <ul>
             <li>Exhibe tus productos o servicios y alcance tu público meta.</li>
             <li>Crea y refuerza visibilidad y aumenta  el interés sobre tu capacidad de suministro.</li>
             <li>Comparte tus investigaciones y difunde información relevante sobre sus productos.</li>
             <li>Identifica nuevos clientes potenciales y/o fortalece las relaciones con los existentes.</li>
             <li>Establece vínculos comerciales hacia nuevos mercados; identificar agentes y/o representantes.</li>
            <li>Negocia ofertas que pueden resultar en órdenes reales.</li>
            <li>Desarrolla una red de relaciones.</li>
            <li>Conoce a socios potenciales que lo pueden llevar a alianzas comerciales.</li>
           </ul>
         <h4>PISO DE EXPOSICIÓN</h4>
         <p>Esta modalidad de contratación no cuenta con mobiliario, alfombra
           ni electricidad ya que está destinado para diseños especiales contratados
           por el expositor con el proveedor de su preferencia. En estos casos, generalmente
           se requiere de una toma eléctrica especial la cual deberá ser contratada por el expositor.</p>
         </p>
       </div>
     </div>
     <div class="row">
       <div class="column small-12 medium-6">
         <ul>
           <li>Área marcada en piso.</li>
           <li>Decoración general e iluminación propia de la expo.</li>
           <li>Seguridad en áreas comunes.</li>
         </ul>
       </div>
       <div class="column small-12 medium-6">
         <ul>
         <li>Espacio en el "Directorio de Expositores". </li>
         <li>Diploma de participación.</li>
         <li>Gafetes de Expositor (uno por cada 3m<sup>2</sup> ).</li>
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
         <h4>STAND DE 3 X 3 CON MAMPARAS</h4>
         <ul>
           <li>Mamparas blancas posteriores y laterales de 1m de ancho x 2.50m de alto en sistema
           Octanorm y panel trovicel de 3mm.</li>
           <li>Antepecho con nombre del expositor en vinil con letra estánder.</li>
           <li>Contacto eléctrico doble de 110 volts por cada 9m<sup>2</sup>.</li>
           <li>Iluminación dicroica.</li>
           <li>1 Mesa.</li>
           <li>2 Sillas.</li>
           <li>1 Bote de basura.</li>
           <li>Seguridad en áreas comunes.</li>
           <li>Servicio de limpieza en pasillos y áreas comunes.</li>
           <li>Registro en el "Directorio de Expositores".</li>
           <li>Diploma de participación.</li>
           <li>Gafetes de Expositor (uno por cada 3m<sup>2</sup>).</li>
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
 </article>
</main>

<?php include'assets/footer.php'; ?>
