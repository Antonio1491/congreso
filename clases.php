<?php
class Conexion {
  var $serv;
  var $us;
  var $ps;
  var $bd;

  var $mysql;
  var $resultadoConsulta;

  function Conexion($serv, $us, $ps, $bd){
    $this->serv = $serv;
    $this->us = $us;
    $this->ps = $ps;
    $this->bd = $bd;
  }

  function conectar(){
    $mysql = mysqli_connect($this->serv, $this->us, $this->ps) or die ('Error en la conexión');
    mysqli_select_db($mysql, $this->bd) or die ('No se pudo seleccionar la Base de datos');
    mysqli_set_charset($mysql, "utf8");
    $this->mysql= $mysql;
    //$conexion = mysqli_set_charset($conectar, "utf8");
      return $this->mysql;
    }

  function consultar($sql){
    $this->resultadoConsulta = mysqli_query($this->mysql, $sql);
  }

  function mostrar(){
      $resultado = mysqli_fetch_array($this->resultadoConsulta);
      return $resultado;
  }

}




 ?>
