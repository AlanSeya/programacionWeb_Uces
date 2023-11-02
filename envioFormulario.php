<?php

$nombre = $_POST['nombre'];
$email = $_POST['email'];
$personas = $_POST['personas'];
$calendario = $_POST['calendario'];
$horario = $_POST['horario'];

$para = "@localhost";
$asunto = "ejemplo";
$mensaje = "Hola, se ha realizado una reserva. Detalles:\n\n";
$mensaje .= "Nombre: " . $nombre . "\n";
$mensaje .= "Email: " . $email . "\n";
$mensaje .= "Número de personas: " . $personas . "\n";
$mensaje .= "Fecha: " . $calendario . "\n";
$mensaje .= "Horario: " . $horario . "\n";

$headers = "From: " . $email . "\r\n";
$headers .= "Reply-To: " . $email . "\r\n";

mail($para, $asunto, $mensaje, $headers);

echo "La reserva se ha realizado con éxito";

?>
