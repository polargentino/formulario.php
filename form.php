<?php
$nombre = $_POST['name'];
$mail = $_POST['email'];
$mensaje = $_POST['textarea'];

//como va a llegar el cuerpo del mail a mi correo
$mensaje = 'Este mensaje fue enviado por'. $nombre . ",\r\n";
$mensaje.="Su e-mail es: " . $mail . "\r\n";
$mensaje.="Mensaje: ". $_POST['mensaje'] . "\r\n";
$mensaje.="Enviado el ".date('d/m/Y', time());

$para = 'pablitu2010@live.com.ar';
$asunto = 'Este mail fue enviado desde la web';

//funcion $mail, a quien le mando el mail
mail($para, $asunto, utf8_decode($mensaje), $header);

//Redirecciono al haber enviado el form
header('Location:exito.html');
?>