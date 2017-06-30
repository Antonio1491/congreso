<?php
$conexion= mysqli_connect( "localhost", "root", "", "congreso");
mysqli_set_charset($conexion, "utf8");
if (!$conexion) {
  die("Error en la conexión");
}
else{
  $sql= "INSERT INTO datos_fiscales (rs, rfc, calle, num_ext, num_int, colonia, ciudad, estado, pais, cp, representante, cargo, email)
        VALUES ('".$_POST['rs']."','".$_POST['rfc']."','".$_POST['calle']."', '".$_POST['num_ext']."','".$_POST['num_int']."',
        '".$_POST['colonia']."','".$_POST['ciudad']."','".$_POST['estado']."','".$_POST['pais']."','".$_POST['cp']."', '".$_POST['representante']."',
         '".$_POST['cargo']."', '".$_POST['email']."')";
  mysqli_query($conexion, $sql);
  $sql="INSERT INTO directorio_expositores (nom_comercial, calle, num_ext, num_int, colonia, ciudad, estado, pais, cp, web, tel, extencion)
        VALUES ('".$_POST['nom_comercial']."', '".$_POST['calle_2']."', '".$_POST['num_ext_2']."', '".$_POST['num_int_2']."',
        '".$_POST['colonia_2']."', '".$_POST['ciudad_2']."', '".$_POST['estado_2']."', '".$_POST['pais_2']."', '".$_POST['cp_2']."',
        '".$_POST['web']."', '".$_POST['tel']."', '".$_POST['ext']."')";
  mysqli_query($conexion, $sql);
  $sql="INSERT INTO contactos_importantes (contacto_evento, cargo_evento, email_evento, contacto_pago, cargo_pago, email_pago)
        VALUES ('".$_POST['contacto_evento']."', '".$_POST['cargo_evento']."', '".$_POST['email_evento']."', '".$_POST['contacto_pagos']."',
        '".$_POST['cargo_pagos']."', '".$_POST['email_pagos']."')";
  mysqli_query($conexion, $sql);
  $sql="INSERT INTO stands (op_1, medidas_1, op_2, medidas_2, op_3, medidas_3)
        VALUES ('".$_POST['op_1']."','".$_POST['m_1']."', '".$_POST['op_2']."','".$_POST['m_2']."', '".$_POST['op_3']."','".$_POST['m_3']."')";
 mysqli_query($conexion, $sql);
  echo"<script language='JavaScript'>
                  alert('Hemos Registrado los datos');
                  </script>";
  echo "<script>window.history.go(-1);</script>";
}

 ?>
