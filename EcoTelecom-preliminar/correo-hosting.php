<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$nombre = $_POST["nombre"];
$empresa = $_POST["empresa"];
$correo = $_POST["correo"];
$mensaje = $_POST["mensaje"];
$dst = "emm.chap.dom@gmail.com";
$asunto = $_POST["asunto"];

try {
    //Server settings
    $mail->SMTPDebug = 0;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';

    $mail->SMTPAuth   = true;
    $mail->Username   = 'emm.chap.dom@gmail.com';
    $mail->Password   = 'pjbx ncdp lpqq yevq';
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;

    $mail->Port       = 587;

    //Recipients
    $mail->setFrom($dst);
    $mail->addAddress($dst);
    $mail->addAddress($dst);
    
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $asunto;
    $mail->Body    = "Nombre: $nombre\nEmpresa: $empresa\nCorreo: $correo\nMensaje: $mensaje";
    
    $mail->send();
    echo 'Enviado correctamente';
} catch (Exception $e) {
    echo "Error al enviar: {$mail->ErrorInfo}";
}