<?php
require('conexion.php');

class Registro extends Conexion
{

  public function Registro(){

      parent::__construct();

  }

  public function desplegarTemas(){

    $sql = $this->conexion_db->query("SELECT * FROM temas WHERE id_tema > 1 AND id_tema < 7");

    $temas = $sql->fetch_all(MYSQLI_ASSOC);

    return $temas;
  }

  public function registroConferencista($nom, $ap, $em, $emA, $tel, $car, $emp, $loc, $dir, $exp, $ant,
                                          $lug, $nomf, $tipf, $tempf){

    $destino_foto = $_SERVER['DOCUMENT_ROOT'].'/congreso/registro/fotos/';

    $sql = $this->conexion_db->query("INSERT INTO conferencista VALUES (null, '$nom', '$ap', '$em', '$emA',
                                    '$tel', '$car', '$emp', '$loc', '$dir', '$exp', '$ant', '$lug', '$nomf'
                                    )");

    if($sql){
      // Mover el archivo de la carpeta temporal a la carpeta destino
      move_uploaded_file($tempf, $destino_foto.$nomf);
    }
    return $sql;
  }

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

}

/**
 *
 */
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



 ?>
