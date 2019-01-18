<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Formulario de Registro Voluntarios</title>
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
        <a href="https://congresoparques.com/"> <img src="../img/logotipo/logo_congreso_bc.png" alt=""></a>
      </div>
      <div class="">
        <h4 class="titulo">Congreso Internacional de Parques Urbanos </h4>
      </div>
    </header>
    <section class=" row container">
      <div class="item Instrucciones">
        <p class="text-center"><span>Convocatoria 2019 - Registro de voluntarios</span></p>
         <p>Al ser parte de este equipo y cumplir con 11 horas de voluntariado podrás obtener un pase de cortesía al congreso para ti.</p>
         <p>Instrucciones:</p>
          <ul>
            <li>Seleccionar 2 (dos) turnos disponibles que prefieras. Al seleccionar los turnos te comprometes a cumplirlos y no puede haber cambios.</li>
            <li>La suma de los horarios debe dar 11 horas.</li>
            <li>Dejar tus datos personales. Todos los campos son necesarios.</li>
            <li>Espera un correo de confirmación de tus turnos. </li>
            <li>Asistir a capacitación de voluntarios. El equipo de Congreso Parques se pondrá en contacto para hacerte saber el
              día y horarios disponibles para la capacitación. Asistir a la capacitación de voluntarios es indispensable. </li>
          </ul>

          <p class="resaltar">Condiciones:</p>
          <ul class="consejo">
            <li>Vivir en la ciudad de Monterrey.</li>
            <li>Hablar inglés - 85% de competencia.</li>
          </ul>

        Si tienes dudas o inconvenientes para llenar este formulario, comunícate con Cristina R. de León, Directora de Contenido y Educación a la dirección: contenido@anpr.org.mx</p>

      </div>
      <div class="item">
        <form class="" action="registrarVoluntario.php" method="post" enctype="multipart/form-data">
          <fieldset>
            <div class="encabezado">
              Datos personales:
            </div>
          </fieldset>
          <div class="form_autor">
            <div class="row">
              <div class="column medium-12">
                <label for="">*Nombre:</label>
                <input type="text" name="nombre" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">*Apellido Paterno:</label>
                <input type="text" name="apellidoPaterno" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">*Apellido Materno:</label>
                <input type="text" name="apellidoMaterno" value="" required>
              </div>
            </div>
            <div class="row">
              <div class="column medium-6">
                <label for="">*E-mail:</label>
                <input type="text" name="email" value="" required>
              </div>
              <div class="column medium-6">
                <label for="">*Celular:</label>
                <input type="text" name="celular" value="" placeholder="" required>
              </div>

            </div>
            <div class="row">
              <div class="column medium-3">
                <label for="">*Género</label>
                <select class="" name="genero">
                  <option value="Femenino">Femenino</option>
                  <option value="Masculino">Masculino</option>
                </select>
              </div>
              <div class="column medium-9">
                <label for="">*Universidad:</label>
                <input type="text" name="universidad" value="" >
              </div>

            </div>

          </div>


          <div class=" encabezado">
              Horarios:
          </div>
          <div class="row column">
            *Recuera que solamnte puedes seleccionar 2 opciones y que estas no deben de
            ser en las mismas horas, de lo contrario tu participación no sera tomada en cuenta.
          </div>
          <div class="row ">
            <div class="column">
              <label for="">Matutino</label>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Fecha</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $array = $horarios->horariosMatutinos();
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="checkbox" name="turno[]" value="<?php echo $valor['turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
                    <td><?php echo $valor['fecha'] ?></td>
                    <td><?php echo $valor['hora_inicio'] ?></td>
                    <td><?php echo $valor['hora_fin'] ?></td>
                    <td><?php echo $valor['total_horas'] ?></td>
                    <td><?php echo $valor['capacidad'] ?></td>
                  </tr>
                  <?php
                  }
                  ?>
                </table>
            </div>
          </div>
          <hr>


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
