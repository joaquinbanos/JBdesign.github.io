<?php
$nombres = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$correo = $_POST['correo'];
$message = $_POST['message'];
$trabajo = $_POST['trabajo'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombres . $apellidos " \r\n";
$message .= "Su correo es: " . $correo . " \r\n";
$message .= "El trabajo es: " . $trabajo . " \r\n";
$message .= "Mensaje: " . $_POST['message'] . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'jbdesignsbusinessar@gmail.com';
$asunto = 'Formulario Trabajo';

mail($para, $asunto, utf8_decode($message), $header);

header("Location:index.html");
?>