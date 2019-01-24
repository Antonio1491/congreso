<?php
require('conexion.php');
require "phpmailer/src/PHPMailer.php";
require "phpmailer/src/Exception.php";
require "phpmailer/src/SMTP.php";


class Registro extends Conexion{

  public function __construct(){

      parent::__construct();

  }

  public function desplegarTemas(){

    $sql = $this->conexion_db->query("SELECT * FROM temas WHERE id_tema > 1 AND id_tema < 7");

    $temas = $sql->fetch_all(MYSQLI_ASSOC);

    return $temas;
  }

  public function asignarId(){

    $resultado = $this->conexion_db->query('SELECT max(id_conferencia) AS max_idconfe FROM conferencia');

    $respuesta = $resultado->fetch_all(MYSQLI_ASSOC);

    foreach ($respuesta as $valor) {
      echo $id = $valor['max_idconfe'];
    }

    return $id;

  }

  public function registroConferencista($array, $nom, $ap, $em, $em2, $tel, $cargo, $emp, $loc, $dir, $exp, $ant, $lug,
                                         $nomf, $tipof, $tempf, $id_sesion){



     for ($i=0; $i < $array ; $i++)  {

     $sql = $this->conexion_db->query("INSERT  INTO conferencista (id_conferencista, nombre, apellidos, email, email2, tel,
                                     cargo, empresa, localidad, direccion, experiencia, ponencia_anterior, donde, id_conferencia, foto)
                                   VALUES (null, '$nom[$i]', '$ap[$i]', '$em[$i]', '$em2[$i]', '$tel[$i]', '$cargo[$i]',
                                   '$emp[$i]', '$loc[$i]', '$dir[$i]', '$exp[$i]', '$ant[$i]', '$lug[$i]', '$id_sesion', '$nomf[$i]')");

                                   $destino_foto = $_SERVER['DOCUMENT_ROOT'].'/congreso/registro/fotos/';

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

  public function registroSesionEducativa($sesion, $tema, $desc, $just, $obj, $mod, $adic){

      // $destino_archivo = $_SERVER['DOCUMENT_ROOT'].'/congreso/registro/archivos/';

      $sql = $this->conexion_db->query("INSERT INTO conferencia VALUES (null, '$sesion', '$tema', '$desc',
                                      '$just', '$obj', '$mod', '$adic')");

      return $sql;

  }

    public function correoAceptacionPropuesta($correo, $sesion){


      $mail = new PHPMailer\PHPMailer\PHPMailer();
      $mail->CharSet = 'UTF-8';

                        //Luego tenemos que iniciar la validación por SMTP:
              $mail->SMTPDebug = 2 ;
              $mail->IsSMTP();
              $mail->SMTPAuth = true;
              $mail->Host = "smtp.hostinger.com"; // A RELLENAR. Aquí pondremos el SMTP a utilizar. Por ej. mail.midominio.com
              $mail->Username = "contenido@anpr.org.mx"; // A RELLENAR. Email de la cuenta de correo. ej.info@midominio.com La cuenta de correo debe ser creada previamente.
              $mail->Password = "congreso-Cristina*"; // A RELLENAR. Aqui pondremos la contraseña de la cuenta de correo
              $mail->Port = 587; // Puerto de conexión al servidor de envio.
              $mail->SMTPSecure =  "tls"  ; // Habilitar el cifrado TLS

              $mail->setFrom("contenido@anpr.org.mx"); // A RELLENARDesde donde enviamos (Para mostrar). Puede ser el mismo que el email creado previamente.
              $mail->FromName = "Congreso Parques"; //A RELLENAR Nombre a mostrar del remitente.
              $mail->addAddress($correo[0]); // Esta es la dirección a donde enviamos

              $mail->IsHTML(true); // El correo se envía como HTML
              $mail->Subject = "Propuesta Registrada"; // Este es el titulo del email.
              $body = "<html><body>
                            <p>Gracias por enviar tu propuesta de sesión educativa para
                            el Congreso Parques 2019. Hemos recibido tu información
                            correctamente y se integrará a las sesiones que serán revisadas
                            por nuestro Consejo de Contenido y Educación.</p>
                            <p>Daremos los resultados de la convocatoria en las fechas
                            establecidas y nos comunicaremos previamente en caso de ser
                            necesario.</p>
                            <p>¡Saludos!</p>
                            <p>Cristina R. de León.<br>Dirección de Contenido y Educación. </p>
                        </body></html>";
              // $body .= "Aquí continuamos el mensaje";
              $mail->Body = $body;
              // Mensaje a enviar.
              $exito = $mail->Send(); // Envía el correo.

                // if($exito){ echo 'El correo fue enviado correctamente.'; }else{ echo 'Hubo un problema. Contacta a un administrador.'; }

    }

}



class Sesiones extends Conexion
{

  public function __construct(){

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

    public function __construct()

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
                                  LEFT JOIN conferencias
                                  ON usuarios.id_conferencia = conferencias.id_conferencia
                                  WHERE conferencias.id_tema !=7
                                  AND usuarios.nivel =2 AND conferencias.id_conferencia !=37
                                  ORDER BY usuarios.prioridad ASC");

        $array_conferencistas = $sql->fetch_all(MYSQLI_ASSOC);

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