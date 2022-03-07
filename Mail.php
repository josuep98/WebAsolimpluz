<?php

$asunto = $_GET['nombre'];
$emp = $_GET['empresa'];
$texto = $_GET['mensaje'];
$from = "form@asolimpluz.com";
$para      = 'asolimpluz@asolimpluz.com';
$titulo    = 'Contacto de ' . $asunto;
$email = $_GET['email'];
$telefono = $_GET['telefono'];

$mensaje   =
    'Hola Asolimpluz, ' . "\n\n" .
    'Te ha contactado: ' . $asunto . ' de la empresa: ' . $emp . '.' . "\n\n" .
    'Indica lo siguiente: "' .
    $texto . '"' . '.' . "\n\n" .
    'Datos para el contacto: ' . "\n\n" .
    'Correo electronico: ' . $email . "\n" .
    'Telefono: ' . $telefono;

$cabeceras = 'From: form@asolimpluz.com' . "\r\n" .
    'Reply-To: form@asolimpluz.com' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if ($asunto != null && $emp != null && $texto != null && $email != null && $telefono != null) {
    if (mail($para, $titulo, $mensaje, $cabeceras)) {
        echo '<script type="text/javascript">', 'alert("Se envio correctamente");', '</script>';
        echo '<script type="text/javascript">', 'window.location.assign("contacto.html");', '</script>';
    } else {
        echo '<script type="text/javascript">', 'alert("No se pudo enviar el mensaje");', '</script>';
        echo '<script type="text/javascript">', 'window.location.assign("contacto.html");', '</script>';
    };
} else {
    echo '<script type="text/javascript">', 'alert("No se pudo enviar el mensaje, por favor rellene los campos");', '</script>';
    echo '<script type="text/javascript">', 'window.location.assign("contacto.html");', '</script>';
}

?>
