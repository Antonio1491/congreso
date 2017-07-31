<?php
require("assets/class.phpmailer.php");
$mail = new PHPMailer();

//Luego tenemos que iniciar la validación por SMTP:
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host = "mx1.hostinger.mx"; // SMTP a utilizar. Por ej. smtp.elserver.com
$mail->Username = "antonio@parquesdemexico.org"; // Correo completo a utilizar
$mail->Password = "Parques14"; // Contraseña
$mail->Port = 25; // Puerto a utilizar

//Con estas pocas líneas iniciamos una conexión con el SMTP. Lo que ahora deberíamos hacer, es configurar el mensaje a enviar, el //From, etc.
$mail->From = "antonio@parquesdemexico.org"; // Desde donde enviamos (Para mostrar)
$mail->FromName = "Antonio";

//Estas dos líneas, cumplirían la función de encabezado (En mail() usado de esta forma: “From: Nombre <correo@dominio.com>”) de //correo.
$mail->AddAddress("info.congreso@anpr.org.mx"); // Esta es la dirección a donde enviamos
$mail->IsHTML(true); // El correo se envía como HTML
$mail->Subject = "Test"; // Este es el titulo del email.
$body = "Hola mundo Esta es la primer línea<br />";
$body .= "Acá continuo el <strong>mensaje</strong>";
$mail->Body = $body; // Mensaje a enviar
$exito = $mail->Send(); // Envía el correo.

//También podríamos agregar simples verificaciones para saber si se envió:
if($exito){
echo "El correo fue enviado correctamente.";
}else{
echo "Hubo un inconveniente. Contacta a un administrador.";
}

?>
