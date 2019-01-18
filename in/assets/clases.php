<?php

//Clase conexion y consulta a base de datos
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

  public function conectar(){
    $mysql = mysqli_connect($this->serv, $this->us, $this->ps) or die ('Error en la conexión');
    mysqli_select_db($mysql, $this->bd) or die ('No se pudo seleccionar la Base de datos');
    mysqli_set_charset($mysql, "utf8");
    $this->mysql= $mysql;
    //$conexion = mysqli_set_charset($conectar, "utf8");
      return $this->mysql;
    }
    function insertar($consulta){
    if($resultado = mysqli_query($this->mysql, $consulta)){
      echo"<script language='JavaScript'>
                  alert('Registro realizado con éxito');
                  </script>";
      echo "<script>window.history.go(-1);</script>";
    }
    else{
      echo"<script language='JavaScript'>
                  alert('Error: No pudimos realizar el registro');
                  </script>";
      echo "<script>window.history.go(-1);</script>";
    }
  }

  function consultar($sql){
    $resultado = mysqli_query($this->mysql, $sql);
    $this->resultadoConsulta = $resultado;
    if ($numFilas = mysqli_num_rows($resultado) >0) {
      return $resultado;
    }
    else{
      echo "";
    }
  }
  function mostrar(){
      $resultado = mysqli_fetch_array($this->resultadoConsulta);
      return $resultado;
  }

  function desplegarExpositores($sql){

    $resultado = mysqli_query($this->mysql, $sql);
    $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);

    return $respuesta;
  }
}


//Clase Registro a base de datos de promotores
class Promotor{
  var $nombre;
  var $email;
  var $tel;
  var $ciudad;

  function Promotor($nombre, $email, $tel, $ciudad){
    $this->nombre = $nombre;
    $this->email = $email;
    $this->tel = $tel;
    $this->ciudad = $ciudad;

  }
  function nuevoPromotor($mysql){
    $sql="INSERT INTO promotores values (null, '$this->nombre', '$this->email', '$this->tel', '$this->ciudad' )";
    if($insert = mysqli_query($mysql, $sql)){
      echo"<script type='text/javascript'>
    		alert('El registro se realizó correctamente');
    		window.history.go(-1);
    		</script>";
    }
    else {
      echo "No pudimos registrarte";
    }
  }
}




 ?>
