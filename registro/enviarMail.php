<?php
require 'src/PHPMailer.php';
require 'src/Exception.php';




$email = new PHPMailer();

//Server settings

 $mail->isSMTP();                                      // Set mailer to use SMTP
 $mail->Host = 'smtp.hostinger.com';  // Specify main and backup SMTP servers
 $mail->SMTPAuth = true;                               // Enable SMTP authentication
 $mail->Username = 'antonio.gongora1491@gmail.com';                 // SMTP username
 $mail->Password = 'parques1414';                           // SMTP password
 $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
 $mail->Port = 465;                                    // TCP port to connect to

 //Recipients
     $mail->setFrom('antonio.gongora1491@gmail.com', 'Antonio');
     $mail->addAddress('antonio@parquesdemexico.org', 'Antonio');     // Add a recipient

    $mail->isHTML(true);
    $email->Subjet ='Prueba';
    $email->Charset = 'utf-8';
    $mail->Body    = 'This is the HTML message body <b>in bold!</b>';

  // Enviar Correos
  $mail->send();
    echo 'Message has been sent';

    // if ($email->Send()) {
    //   echo "Hemos enviado el correo";
    // }
    // else{
    //   echo "No se pudo enviar el correo";
    // }



 ?>
