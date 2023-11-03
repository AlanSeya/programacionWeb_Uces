<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$personas = $_POST['personas'];
$calendario = $_POST['calendario'];
$horario = $_POST['horario'];

$datos = "Nombre: $nombre | Email:  $email | Fecha: $calendario | Hora: $horario \n | Cant. de personas: $personas";
$file = 'reserva.txt';

file_put_contents($file, $datos, FILE_APPEND);

$para = "Admin@localhost";
$asunto = "Reserva en Bodegon";
$mensaje = "Hola, se ha realizado una reserva. Detalles:\n\n";
$mensaje .= "Nombre: " . $nombre . "\n";
$mensaje .= "Email: " . $email . "\n";
$mensaje .= "Número de personas: " . $personas . "\n";
$mensaje .= "Fecha: " . $calendario . "\n";
$mensaje .= "Horario: " . $horario . "\n";

$headers = "From: " . $email . "\r\n";

$test = mail($para, $asunto, $mensaje, $headers);
if($test){

    header("Location: correoEnviado.html");
    exit;
}

?>
