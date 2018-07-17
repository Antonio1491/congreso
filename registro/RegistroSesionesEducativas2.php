<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Registro Conferencias</title>
    <link rel="stylesheet" href="../css/foundation-flex.css">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css">

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
        <h4 class="titulo">International Congress of Urban Parks</h4>
      </div>
    </header>
    <section class=" row container">
      <div class="item Instrucciones">
        <p class="text-center"><span>Call 2019 - Register of proposals</span></p>
         <p>Thank you for your interest in being part of the program of the 2nd International Congress
           of Urban Parks! Please fill out this form to register your proposal. We remind you that:</p>
          <ul>
            <li>The submission of the proposal does not guarantee its acceptance, nor its registration as assistant of the congress.</li>
            <li>You will receive the results on the established dates.</li>
            <li>If your proposal is a "Panel discussion", that is, that the presentation involves more than one person, it is important to register all of them.</li>
          </ul>
        <p>If you have any questions or problems to fill out this form, please contact Cristina R. de León, Director of Content and Education at: contenido@anpr.org.mx</p>
      </div>

      <div class="item">
        <form class="" action="RegistroSesion.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="encabezado">
              About the person responsible for the proposal:
            </div>
          </fieldset>
          <div class="form_autor">
            <div class="row">
              <div class="column medium-6">
                <label for="">Name:</label>
                <input type="text" name="Nombre[]" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">Last Name:</label>
                <input type="text" name="Apellidos[]" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">Mail:</label>
                <input type="text" name="Email[]" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">Assistant email:</label>
                <input type="text" name="EmailAsistente[]" value="" placeholder="(If you have one)">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">Telephone:</label>
                <input type="text" name="Telefono[]" value="" placeholder="">
              </div>
              <div class="column medium-6">
                <label for="">Position:</label>
                <input type="text" name="Cargo[]" value="">
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">Institution</label>
                <input type="text" name="Empresa[]" value="" >
              </div>
              <div class="column medium-6">
                <label for="">City :</label>
                <input type="text" name="Localidad[]" value="" placeholder="(City, Estate)" required>
              </div>
            </div>
            <div class="row">
              <div class="column">
                <label for="">Address:</label>
                <input type="text" name="Direccion[]" value="" placeholder="">
              </div>
            </div>
            <div class="row column">
              <label for="">Describe the experience of the speaker related to its proposal:</label>
              <textarea name="Experiencia[]" rows="4" cols="80" placeholder="Include work experience, researh, collaborations or relevant information."></textarea>
            </div>
            <div class="row">
              <div class="column ">
                <label for="">Have you presented this session or similar previously?</label>
                <input type="radio" name="Anteriormente[]" value="Sí" required> Yes</inpu>
                <input type="radio" name="Anteriormente[]" value="No" required> No</input>
                <label for="">Where?</label>
                <input type="text" name="Lugar[]" value=""></input>
              </div>
            </div>
            <div class="row column">
              <label for="">Photograph:</label>
              <input type="file" name="fotografia[]" value="" required>
            </div>
          </div>


          <div class=" encabezado">
              ABOUT THE PRESENTATION:
          </div>
          <div class="row column">
            <label for="">Name of the session (12 words or less):</label>
            <input type="text" name="Sesion" value="" required>
          </div>
          <div class="row column">
            <label for="">Select a theme:</label>
            <select class="" name="Tema">
              <?php
              $temas = new Registro();
              $array_temas = $temas->desplegarTemas();

                foreach ($array_temas as $valor) {
                echo "<option value='".$valor['id_tema']."'>".$valor['nombre_ing']."</option>";
                }
              ?>
            </select>
          </div>
          <div class="row column">
            <label for="">Session Description (220 words or less):</label>
            <textarea name="Descripcion" rows="4" cols="80" placeholder="(Esta información se utilizará con fines promocionales, por favor sea conciso y claro. )" required></textarea>
          </div>
          <div class="row column">
            <label for="">Justification:</label>
            <textarea name="Justificacion" rows="4" cols="80" placeholder="Justify the importance of your proposed educational session by identifying how your project / initiative
/ research provides a solution to a problem related to public space and how it relates to the five themes of the congress." required></textarea>
          </div>
          <div class="row column">
            <label for="">Objectives (3):</label>
            <textarea name="Objetivos" rows="4" cols="80" placeholder="The session should have clear and measurable learning objectives. List 3 of them." required></textarea>
          </div>
          <!-- <div class="row column">
            <label for="">Agregar Documento:</label>
            <input type="file" name="archivo" value="" >
          </div> -->
          <div class="row ">
            <div class="column">
              <label for="">Modality:</label>
              <input type="radio" name="Modalidad" value="Individual" checked> Individual</input>
              <input type="radio" name="Modalidad" value="Mesa Panel"> Panel discussion (3 participants maximum)</input>
            </div>
          </div>

          <div class="nuevo">
          </div>
          <div class="row column">
            <button type="button" name="Autor" class="button addButton" id="autor"><i class="fi-plus"></i> Add Speaker</button>
          </div>
          <div class="encabezado">
            Additional requests for the speaker:
          </div>
          <div class="row column">
            <p>NOTE: All classrooms will have: projector, screen, computer and sound system for the
              presentation of the educational session.</p>
            <label for="">Additional:</label>
            <textarea name="Adicionales" rows="4" cols="80" placeholder="Let us know about additional personal needs: flip chart, blackboard or markers as well as special equipment for wheelchairs, among others."></textarea>
          </div>
          <div class="text-center">
            <input type="submit" name="" value="Register your proposal here!" class="button registro">
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
    </script>
  </body>
</html>
