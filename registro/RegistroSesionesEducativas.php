<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Registro Conferencias</title>
    <link rel="stylesheet" href="../css/foundation-flex.css">
    <link rel="stylesheet" href="registro.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <?php
    include('../assets/clases_2.php');
    ?>
  </head>
  <body>
    <header>
      <div class="logo-header">
        <img src="../img/logotipo/anpr-blanco.png" alt="">
      </div>
      <div class="">
        <h4 class="titulo">Congreso Internacional de Parques Urbanos </h4>
      </div>
    </header>
    <section class=" row container">
      <div class="item Instrucciones">
        <p><span>Registro de propuestas</span></p>
         <p>Gracias por llenar este formato para el registro de su propuesta. Le recordamos que:</p>
          <ul>
            <li>El envío del mismo no garantiza la aceptación de su contribución por parte del comité de contenido, ni su registro como asistente del congreso.</li>
            <li>Recibirá respuesta en las fechas establecidas en la convocatoria.</li>
            <li>En este registro se le solicitará que suba el documento de su contribución en extenso.</li>
            <li>Es importante registrar a todos los autores de la contribución, en caso de aplicar.</li>
          </ul>
          Si tiene dudas o inconvenientes para el llenado del formato escriba a contenido@anpr.org.mx</p>
          <p>Nota: Es necesario que incluya el documento de su contribución en extenso. </p>
      </div>
      <div class="item">
        <form class="" action="RegistroSesion.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="encabezado">
              Sobre el responsable de la propuesta:
            </div>
          </fieldset>
          <div class="row">
            <div class="column medium-6">
              <label for="">Nombre:</label>
              <input type="text" name="Nombre" value="">
            </div>
            <div class="column medium-6">
              <label for="">Apellidos:</label>
              <input type="text" name="Apellidos" value="">
            </div>
          </div>
          <div class="row">
            <div class="column medium-6">
              <label for="">E-mail:</label>
              <input type="text" name="Email" value="">
            </div>
            <div class="column medium-6">
              <label for="">E-mail (Asistente):</label>
              <input type="text" name="EmailAsistente" value="">
            </div>
          </div>
          <div class="row">
            <div class="column medium-6">
              <label for="">Teléfono:</label>
              <input type="text" name="Telefono" value="" placeholder="(Clave del País, Clave Nacional, Teléfono)">
            </div>
            <div class="column medium-6">
              <label for="">Puesto de Trabajo/Cargo:</label>
              <input type="text" name="Cargo" value="">
            </div>
          </div>
          <div class="row">
            <div class="column medium-6">
              <label for="">Empresa/Institución</label>
              <input type="text" name="Empresa" value="" >
            </div>
            <div class="column medium-6">
              <label for="">Localidad:</label>
              <input type="text" name="Localidad" value="" placeholder="(País, Ciudad, Estado)">
            </div>
          </div>
          <div class="row">
            <div class="column">
              <label for="">Dirección:</label>
              <input type="text" name="Direccion" value="" placeholder="">
            </div>
          </div>
          <div class="row column">
            <label for="">Describa la experiencia del ponente en relación a su propuesta:</label>
            <textarea name="Experiencia" rows="4" cols="80" placeholder="Incluya experiencia de trabajo, investigaciones, colaboraciones o información de relevancia. Esta descripción deberá ser una breve biografía."></textarea>
          </div>
          <div class="row">
            <div class="column ">
              <label for="">¿Ha presentado esta ponencia o similares anteriormente?</label>
              <input type="radio" name="Anteriormente" value="Sí"> Sí</inpu>
              <input type="radio" name="Anteriormente" value="Sí"> No</input>
              <label for="">¿Dónde?</label>
              <input type="text" name="Lugar" value=""></input>
            </div>
          </div>
          <div class="row column">
            <label for="">Fotografía:</label>
            <input type="file" name="fotografia" value="" required>
          </div>

          <div class=" encabezado">
              Sobre la propuesta:
          </div>
          <div class="row column">
            <label for="">Nombre de la Sesión:</label>
            <input type="text" name="Sesion" value="">
          </div>
          <div class="row column">
            <label for="">Temática:</label>
            <select class="" name="Tema">
              <?php
              $temas = new Registro();
              $array_temas = $temas->desplegarTemas();

                foreach ($array_temas as $valor) {
                echo "<option value='".$valor['id_tema']."'>".$valor['nombre']."</option>";
                }
              ?>
            </select>
          </div>
          <div class="row column">
            <label for="">Descripción:</label>
            <textarea name="Descripcion" rows="4" cols="80" placeholder="(Esta información se utilizará con fines promocionales, por favor sea conciso y claro. )"></textarea>
          </div>
          <div class="row column">
            <label for="">Justificación:</label>
            <textarea name="Justificacion" rows="4" cols="80" placeholder="Justifique la importancia de su sesión educativa propuesta, identificando cómo su proyecto/iniciativa/investigación da solución a un problema relacionado con el espacio público y cómo se relaciona con las cinco temáticas del congreso."></textarea>
          </div>
          <div class="row column">
            <label for="">Objetivos (3):</label>
            <textarea name="Objetivos" rows="4" cols="80" placeholder="La sesión debe contar con objetivos de aprendizaje, claros y medibles. Enumere 3."></textarea>
          </div>
          <div class="row ">
            <div class="column">
              <label for="">Modalidad:</label>
              <input type="radio" name="Modalidad" value="Individual"> Individual</input>
              <input type="radio" name="Modalidad" value="Mesa Panel"> Mesa Panel</input>
            </div>
          </div>
          <div class="row column">
            <label for="">Agregar Documento:</label>
            <input type="file" name="archivo" value="">
          </div>
          <div class="nuevo">

          </div>
          <!-- <div class="row column">
            <button type="button" name="Autor" class="button" id="autor">Añadir Autor</button>
          </div> -->
          <div class="encabezado">
            Solicitudes adicionales para el ponente:
          </div>
          <div class="row column">
            <p>NOTA: Todos los salones contarán con: proyector, pantalla, computadora y sistema de sonido para la
presentación de la sesión educativa.</p>
            <label for="">Adicionales:</label>
            <textarea name="Adicionales" rows="4" cols="80" placeholder="Háganos saber sobre necesidades personales adicionales: rotafolios, pizarrón o plumones así como equipamiento especial para sillas de ruedas, entre otros."></textarea>
          </div>
          <input type="submit" name="" value="Registrar" class="button registro">
        </form>
      </div>
    </section>
    <!-- <script type="text/javascript">
      $('#autor').click(function(event){
        $('.nuevo').append('<div><h1>Toño</h1><h3> kike</h3</div>')
      });
    </script> -->
  </body>
</html>
