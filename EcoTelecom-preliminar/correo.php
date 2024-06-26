<?php

$errores = '';
$enviado = false;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if (isset($_POST["send"])) {

    $mail = new PHPMailer(true);

    $nombre = $_POST["nombre"];
    $empresa = $_POST["empresa"];
    $correo = $_POST["correo"];
    $mensaje = $_POST["mensaje"];
    //sistemas@ecoconsultorias.com
    $dst = "emm.chap.dom@gmail.com";
    $asunto = $_POST["asunto"];

    if (!empty($nombre)) {
        $nombre = trim($nombre);
        $nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un nombre <br />';
    }

    if (!empty($empresa)) {
        $empresa = trim($empresa);
        $empresa = filter_var($empresa, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa tu empresa <br />';
    }

    if (!empty($asunto)) {
        $asunto = trim($asunto);
        $asunto = filter_var($asunto, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingresa un asunto <br />';
    }

    if (!empty($correo)) {
        $correo = filter_var($correo, FILTER_SANITIZE_EMAIL);
        if (!filter_var($correo, FILTER_VALIDATE_EMAIL)) {
            $errores .= 'Por favor ingresa un correo válido <br />';
        }
    } else {
        $errores .= 'Por favor ingresa un correo <br />';
    }

    if (!empty($mensaje)) {
        $mensaje = htmlspecialchars($mensaje);
        $mensaje = trim($mensaje);
        $mensaje = stripslashes($mensaje);
    } else {
        $errores .= 'Por favor, ingresa tu mensaje para que podamos orientarte <br />';
    }

    if (!$errores) {
        try {

            $mail->SMTPDebug = 0;
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';

            $mail->SMTPAuth   = true;
            $mail->Username   = 'emm.chap.dom@gmail.com';
            $mail->Password   = 'pjbx ncdp lpqq yevq';
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

            $mail->Port       = 587;

            // Recipients
            $mail->setFrom($dst, 'EcoTelecom Web Page');
            $mail->addAddress($dst, 'EcoTelecom Request');
            $mail->addAddress($dst);
            $mail->addCC($correo);

            // Content
            $mail->isHTML(true);
            $mail->Subject = $asunto;
            $mail->Body    = "<strong>$nombre</strong> de la empresa <strong>$empresa</strong>, con correo electrónico: <strong>$correo</strong>, acaba de enviar el siguiente mensaje: <br><strong>$mensaje</strong>";

            $mail->send();

            echo "
		    	<script>
		    		alert('Gracias por contactar con Eco Telecom. Tu confianza es nuestra prioridad.');
		    		document.location.href = 'Formulario.php';
		    	</script>
		    ";

            echo 'Enviado correctamente';
        } catch (Exception $e) {
            echo "Error al enviar: {$mail->ErrorInfo}";
        }
    }
}

?>