<?php
require('conexion.php');

class Registro extends Conexion{

  public function Registro(){

      parent::__construct();

  }

  public function desplegarTemas(){

    $sql = $this->conexion_db->query("SELECT * FROM temas WHERE id_tema > 1 AND id_tema < 7");

    $temas = $sql->fetch_all(MYSQLI_ASSOC);

    return $temas;
  }

  public function registroConferencista($array, $nom, $ap, $em, $em2, $tel, $cargo, $emp, $loc, $dir, $exp, $ant, $lug,
                                        $nomf, $tipof, $tempf, $sesion){



    for ($i=0; $i < $array ; $i++)  {

    $sql = $this->conexion_db->query("INSERT  INTO conferencista (id_conferencista, nombre, apellidos, email, email2, tel,
                                    cargo, empresa, localidad, direccion, experiencia, ponencia_anterior, donde, nombre_sesion, foto)
                                  VALUES (null, '$nom[$i]', '$ap[$i]', '$em[$i]', '$em2[$i]', '$tel[$i]', '$cargo[$i]',
                                  '$emp[$i]', '$loc[$i]', '$dir[$i]', '$exp[$i]', '$ant[$i]', '$lug[$i]', '$sesion', '$nomf[$i]' )");

                                  $destino_foto = $_SERVER['DOCUMENT_ROOT'].'/registro/fotos/';

                                  echo move_uploaded_file($tempf[$i], $destino_foto.$nomf[$i]);

    }/*for*/


    return $sql;

  }

  // public function registroConferencista($nom, $ap, $em, $emA, $tel, $car, $emp, $loc, $dir, $exp, $ant,
  //                                         $lug, $nomf, $tipf, $tempf){
  //
  //   $destino_foto = $_SERVER['DOCUMENT_ROOT'].'/congreso/registro/fotos/';
  //
  //   $sql = $this->conexion_db->query("INSERT INTO conferencista VALUES (null, '$nom', '$ap', '$em', '$emA',
  //                                   '$tel', '$car', '$emp', '$loc', '$dir', '$exp', '$ant', '$lug', '$nomf'
  //                                   )");
  //
  //   if($sql){
  //     // Mover el archivo de la carpeta temporal a la carpeta destino
  //     move_uploaded_file($tempf, $destino_foto.$nomf);
  //   }
  //   return $sql;
  // }

  public function registroSesionEducativa($sesion, $tema, $desc, $just, $obj, $mod, $nomDoc, $tipDoc, $temDoc,
                                          $adic){

      $destino_archivo = $_SERVER['DOCUMENT_ROOT'].'/congreso/registro/archivos/';

      $sql = $this->conexion_db->query("INSERT INTO conferencia VALUES (null, '$sesion', '$tema', '$desc',
                                      '$just', '$obj', '$mod', '$nomDoc', '$adic')");

      if($sql){
        move_uploaded_file($temDoc, $destino_archivo.$nomDoc);
      }

      return $sql;

  }

  // public function mostrarRegistros(){
  //
  //   $sql = $this->conexion_db->query("SELECT * FROM conferencista");
  //
  //   $respuesta = $sql->fetch_all(MYSQL_ASSOC);

    // si funciona muestra los elementos del array en cada registro (pero tienen el mismo id)
    // foreach ($respuesta as $valor) {
    //
    //    $array_nombres = explode("," ,$valor['nombre']);
    //    $array_apellidos = explode("," ,$valor['apellidos']);
    //    $array_email = explode("," ,$valor['email']);
    //
    //    $array = count($array_nombres);
    //
    //    for ($i=0; $i < $array ; $i++) {
    //      echo "<tr>";
    //       echo "<td>".$array_nombres[$i]."</td>";
    //       echo "<td>".$array_apellidos[$i]."</td>";
    //       echo "<td>".$array_email[$i]."</td>";
    //       echo "</tr>";
    //     }


  //   }
  //
  //   return ;
  //
  // } /*mostrarRegistros*/


}

class Sesiones extends Conexion
{

  public function Sesiones(){

      parent::__construct();

    }

  public function mostrarSesiones($tema){

    $sql = $this->conexion_db->query ("SELECT * FROM conferencias WHERE id_tema = $tema");

    $array_sesiones = $sql->fetch_all(MYSQL_ASSOC);

    return $array_sesiones;

  }
}

/**
 *
 */
class Conferencistas extends Conexion
{

    public function Conferencistas()

  {
      parent::__construct();
  }

    public function mostrarConfMagistrales(){

      $sql = $this->conexion_db->query("SELECT * FROM magistrales");

      $resultado = $sql->fetch_all(MYSQLI_ASSOC);

      return $resultado;

    }

    public function mostrarConferencistas(){

      $sql = $this->conexion_db->query("SELECT * FROM usuarios
                                  LEFT JOIN conferencias ON usuarios.id_conferencia = conferencias.id_conferencia
                                  WHERE conferencias.id_tema !=7
                                  AND usuarios.nivel =2 AND conferencias.id_conferencia !=37
                                  ORDER BY usuarios.prioridad ASC");

        $array_conferencistas = $sql->fetch_all(MYSQL_ASSOC);

        foreach ($array_conferencistas as $valor) {

          echo $resultado = "<div class='column small-12 medium-3 lista-conferencistas'>
                  <img src='http://www.congresoparques.com/sesiones/img/conferencistas/".$valor['foto']."'>
                </div>
                <div class='column small-12 medium-3 lista-conferencistas'>
                  <h5>".$valor['nombre']."</h5>
                  <h6 class='empresa'>".$valor['empresa']."</h6>
                  <span class='cargo'>".$valor['cargo']."</span><br>
                  <a href='conferencista.php?id=".$valor['id_usuario']."'> Más Información</a>
                  </div>";

        }

        return $resultado;

    }



}




 ?>
