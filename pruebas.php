<!-- <?php
      include("clases.php");

      $conect = new Conexion("localhost", "root", "", "conferencistas"); /*Llamamos a la clase conexion*/
      $conect->conectar();

      $sql = "SELECT * FROM conferencia WHERE id_tema = 1";

      $conect->consultar($sql);

      while($fila = $conect->mostrar()){
        echo "<li class=".$fila['id_conferencia']." onclick='infoSesion(".$fila['id_conferencia'].")'>";
        echo $fila['nombre']. "</li>";
        echo "<div style='display:none;' id=".$fila['id_conferencia'].">";

              $conex = new Conexion("localhost", "root", "", "conferencistas");
              $conex->conectar();

              $sql2 = "SELECT * FROM ponentes WHERE id_conferencia = ".$fila['id_conferencia']." ";
              $conex->consultar($sql2);

              while ($row = $conex->mostrar()) {
                echo $row['nombre']. "<br>";
              }

        echo "</div>";


        ?>
        <script>
        $(document).ready(function(){
              $(".<?php echo $fila['id_conferencia']?>").click(function(){
                  $("#<?php echo $fila['id_conferencia'] ?>").fadeToggle();

              });
            });
        </script>

        <?php
          }
    ?> -->
