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

    $destino_foto = $_SERVER['DOCUMENT_ROOT'].'/congreso/reistro/fotos/';

    $sql = $this->conexion_db->query("INSERT INTO conferencista VALUES (null, '$nom', '$ap', '$em', '$emA',
                                    '$tel', '$car', '$emp', '$loc', '$dir', '$expo', '$ant', '$lug', '$nomf',
                                    '$tipf', '$tempf')");
  }

}



 ?>
