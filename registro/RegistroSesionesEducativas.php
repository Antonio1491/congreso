<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Registro Conferencias</title>
    <link rel="stylesheet" href="../css/foundation-flex.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">
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
        <p class="text-center"><span>Convocatoria 2019 - Registro de propuestas</span></p>
         <p>¡Gracias por tu interés en formar parte del programa del 2do Congreso Internacional de
           Parques Urbanos! Por favor, llena este formulario para el registro de su propuesta. Te recordamos que:</p>
          <ul>
            <li>El envío de la propuesta no garantiza su aceptación, ni su registro como asistente del congreso.</li>
            <li>Recibirás los resultados de la convocatoria en las fechas establecidas.</li>
            <li>Si su propuesta es una “Mesa panel” más de una persona, es importante registrar a todas las personas.</li>
            <li>Fotografía: 
				Cargar una fotografía del ponente a color y con buena resolución.
			</li>
          </ul>
          Si tienes dudas o inconvenientes para llenar este formulario, comunícate con Cristina R. de León, Directora de Contenido y Educación a la dirección: contenido@anpr.org.mx</p>

      </div>
      <div class="item">
        <form class="" action="RegistroSesion.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="encabezado">
              Sobre el responsable de la propuesta:
            </div>
          </fieldset>
          <div class="form_autor">
            <div class="row">
              <div class="column medium-6">
                <label for="">Nombre:</label>
                <input type="text" name="Nombre[]" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">Apellidos:</label>
                <input type="text" name="Apellidos[]" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">E-mail:</label>
                <input type="text" name="Email[]" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">E-mail de Asistente:</label>
                <input type="text" name="EmailAsistente[]" value="" placeholder="(en caso de contar con uno)">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">Teléfono:</label>
                <input type="text" name="Telefono[]" value="" placeholder="(Clave del País, Clave Nacional, Teléfono)">
              </div>
              <div class="column medium-6">
                <label for="">Puesto de Trabajo/Cargo:</label>
                <input type="text" name="Cargo[]" value="">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">Empresa/Institución</label>
                <input type="text" name="Empresa[]" value="" >
              </div>
              <div class="column medium-6">
                <label for="">Localidad:</label>
                <input type="text" name="Localidad[]" value="" placeholder="(Ciudad, Estado)" required>
              </div>
            </div>
            <div class="row">
              <div class="column">
                <label for="">Dirección:</label>
                <input type="text" name="Direccion[]" value="" placeholder="">
              </div>
            </div>
            <div class="row column">
              <label for="">Describa la experiencia del ponente en relación a su propuesta:</label>
              <textarea name="Experiencia[]" rows="4" cols="80" placeholder="Incluya experiencia de trabajo, investigaciones, colaboraciones o información de relevancia. Esta descripción deberá ser una breve biografía."></textarea>
            </div>
            <div class="row">
              <div class="column ">
                <label for="">¿Ha presentado esta ponencia o similares anteriormente?</label>
                <input type="radio" name="Anteriormente[]" value="Sí" required> Sí</inpu>
                <input type="radio" name="Anteriormente[]" value="No" required> No</input>
                <label for="">¿Dónde?</label>
                <input type="text" name="Lugar[]" value=""></input>
              </div>
            </div>
            <div class="row column">
              <label for="">Fotografía:</label>
              <input type="file" name="fotografia[]" value="" required accept="image/png, .jpeg, .jpg">
            </div>
          </div>


          <div class=" encabezado">
              Sobre la propuesta:
          </div>
          <div class="row column">
            <label for="">Nombre de la Sesión (12 palabras máximo):</label>
            <input type="text" name="Sesion" value="" required>
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
            <label for="">Descripción (220 palabras máximo):</label>
            <textarea name="Descripcion" rows="4" cols="80" placeholder="(Esta información se utilizará con fines promocionales, por favor sea conciso y claro. )" required></textarea>
          </div>
          <div class="row column">
            <label for="">Justificación (No hay límites de palabras):</label>
            <textarea name="Justificacion" rows="4" cols="80" placeholder="Justifique la importancia de su sesión educativa propuesta, identificando cómo su proyecto/iniciativa/investigación da solución a un problema relacionado con el espacio público y cómo se relaciona con las cinco temáticas del congreso." required></textarea>
          </div>
          <div class="row column">
            <label for="">Objetivos (3):</label>
            <textarea name="Objetivos" rows="4" cols="80" placeholder="La sesión debe contar con objetivos de aprendizaje, claros y medibles. Enumere 3." required></textarea>
          </div>
          <!-- <div class="row column">
            <label for="">Agregar Documento:</label>
            <input type="file" name="archivo" value="" >
          </div> -->
          <div class="row ">
            <div class="column">
              <label for="">Modalidad:</label>
              <input type="radio" name="Modalidad" value="Individual"  id="individual" required> Individual</input>
              <input type="radio" name="Modalidad" value="Mesa Panel" id="mesaPanel" required> Mesa Panel (3 participantes máximo)</input>
            </div>
          </div>

          <div class="nuevo">
          </div>
          <div class="ocultar" id="btnAgregar">
            <div class="row column " id="">
              <button type="button" name="Autor" class="button addButton " id="autor"><i class="fi-plus"></i> Añadir Ponente</button>
            </div>
          </div>
          <div class="encabezado">
            Solicitudes adicionales para el ponente:
          </div>
          <div class="row column">
            <p>NOTA: Todos los salones contarán con: proyector, pantalla, computadora y sistema de sonido para la
              presentación de la sesión educativa.</p>
            <label for="">Adicionales:</label>
            <textarea name="Adicionales" rows="4" cols="80" placeholder="Háganos saber sobre necesidades personales adicionales: rotafolios, pizarrón o plumones así como equipamiento especial para sillas de ruedas, entre otros."></textarea>
          </div>
          <div class="text-center">
            <input type="submit" name="" value="Registrar" class="button registro">
          </div>
        </form>
      </div>
    </section>
    <script type="text/javascript">
      $(function(){
        var maxAutor = 3;
        var addBtn = $('.addButton');
        var nuevo = $('.nuevo');
        var titulo = '<div class="encabezado">Autor:</div>';
        var formAutor = titulo + $('.form_autor').html();

        var x = 1;

        $(addBtn).click(function(){
          if (x < maxAutor) {
            x++;

            $(nuevo).append(formAutor);
          }
        });
      });

      $(function(){
        $('#mesaPanel').mousedown(function(){
          $('#btnAgregar').slideDown(1000).removeClass('ocultar');
        })
        $('#individual').mousedown(function(){
          $('#btnAgregar').slideUp(1000).addClass('ocultar');
        })
      });
    </script>
  </body>
</html>
