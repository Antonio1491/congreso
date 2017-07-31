<?php
require('clases.php');

$conexion = new Conexion("localhost", "anprorgm_admin", "Admin_*2016", "anprorgm_registros");
$conexion->conectar();
$sql="INSERT INTO datos_fiscales VALUES (null, '".$_POST['rs']."','".$_POST['rfc']."','".$_POST['calle']."', '".$_POST['num_ext']."','".$_POST['num_int']."',
      '".$_POST['colonia']."','".$_POST['ciudad']."','".$_POST['estado']."','".$_POST['pais']."','".$_POST['cp']."', '".$_POST['representante']."',
      '".$_POST['cargo']."', '".$_POST['email']."')";
 $conexion->consultar($sql);

$sql2="INSERT INTO directorio_expositores VALUES (null, '".$_POST['nom_comercial']."', '".$_POST['calle_2']."', '".$_POST['num_ext_2']."', '".$_POST['num_int_2']."',
        '".$_POST['colonia_2']."', '".$_POST['ciudad_2']."', '".$_POST['estado_2']."', '".$_POST['pais_2']."', '".$_POST['cp_2']."',
        '".$_POST['web']."', '".$_POST['tel']."', '".$_POST['ext']."')";
$conexion->consultar($sql2);

$sql3="INSERT INTO contactos_importantes VALUES (null,'".$_POST['contacto_evento']."', '".$_POST['cargo_evento']."', '".$_POST['email_evento']."', '".$_POST['contacto_pagos']."',
       '".$_POST['cargo_pagos']."', '".$_POST['email_pagos']."')";
 $conexion->consultar($sql3);

$sql4="INSERT INTO stands VALUES (null,'".$_POST['op_1']."','".$_POST['m_1']."', '".$_POST['op_2']."','".$_POST['m_2']."', '".$_POST['op_3']."','".$_POST['m_3']."')";
$conexion->consultar($sql4);

echo"<script language='JavaScript'>
                   alert('Hemos Registrado los datos');
                  </script>";
   echo "<script>window.history.go(-1);</script>";


 ?>
