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
    <header class="header_registro_voluntarios">
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
            <div class="encabezado_voluntarios">
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


          <div class="encabezado_voluntarios">
              Horarios:
          </div>
          <div class="row column">
            <p class="nota">*<em>Recuera que únicamente puedes seleccionar <span> 2 opciones</span>
              de lo contrario tu participación no será tomada en cuenta</em>.</p>
          </div>
          <div class="row ">
            <div class="column">
              <h5 for="">14 de Mayo - Mañana</h5>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $dia = '2019-05-14';
                  $array = $horarios->horariosMatutinos($dia);
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="radio" name="dia_1_m" value="<?php echo $valor['id_turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
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

          <div class="row ">
            <div class="column">
              <h5 for="">14 de Mayo - Tarde</h5>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $dia = '2019-05-14';
                  $array = $horarios->horariosVespertinos($dia);
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="radio" name="dia_1_v" value="<?php echo $valor['id_turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
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

          <div class="row ">
            <div class="column">
              <h5 for="">15 de Mayo - Mañana</h5>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $dia = '2019-05-15';
                  $array = $horarios->horariosMatutinos($dia);
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="radio" name="dia_2_m" value="<?php echo $valor['id_turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
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

          <div class="row ">
            <div class="column">
              <h5 for="">15 de Mayo - Tarde</h5>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $dia = '2019-05-15';
                  $array = $horarios->horariosVespertinos($dia);
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="radio" name="dia_2_v" value="<?php echo $valor['id_turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
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

          <div class="row ">
            <div class="column">
              <h5 for="">16 de Mayo - Mañana</h5>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $dia = '2019-05-16';
                  $array = $horarios->horariosMatutinos($dia);
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="radio" name="dia_3_m" value="<?php echo $valor['id_turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
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

          <div class="row ">
            <div class="column">
              <h5 for="">16 de Mayo - Tarde</h5>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $dia = '2019-05-16';
                  $array = $horarios->horariosVespertinos($dia);
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="radio" name="dia_3_v" value="<?php echo $valor['id_turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
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

          <div class="row ">
            <div class="column">
              <h5 for="">17 de Mayo - Mañana</h5>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $dia = '2019-05-17';
                  $array = $horarios->horariosMatutinos($dia);
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="radio" name="dia_4_m" value="<?php echo $valor['id_turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
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

          <div class="row ">
            <div class="column">
              <h5 for="">17 de Mayo - Tarde</h5>
                <table class="horarios_voluntarios">
                  <th></th>
                  <th>Turno</th>
                  <th>Hora Inicio</th>
                  <th>Hora Fin</th>
                  <th>Total de Horas</th>
                  <th>Capacidad</th>
                  <?php
                  $horarios = new Voluntarios();
                  $dia = '2019-05-17';
                  $array = $horarios->horariosVespertinos($dia);
                  foreach ($array as $valor) {
                  ?>
                  <tr>
                    <td>
                      <input type="radio" name="dia_4_v" value="<?php echo $valor['id_turno'] ?>"></input>
                    </td>
                    <td><?php echo $valor['turno'] ?> </td>
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
