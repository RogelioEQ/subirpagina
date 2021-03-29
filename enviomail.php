<?php

// Import PHPMailer classes into the global namespace
// These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Load Composer's autoloader
require 'vendor/autoload.php';

// Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 0;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'rogerarkangel94@gmail.com';                     // SMTP username
    $mail->Password   = 'randyroger';                               // SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;  
    $mail->CharSet='UTF-8';                                  // TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
    $mail->setFrom($email,$nombre);
    $mail->addAddress('rogelio_edmundo@hotmail.com', 'Administrador Rubolmet');
    $mail->addAddress('rogerarkangel94@gmail.com', 'Administrador Rubolmet');
    $mail->addReplyTo($email,$nombre);     // Add a recipient
    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = $ccomment;

    $mail->Body    = '<h4 align=left>Nombre: '.$nombre.'<br>Email: '.$email.'<br>Teléfono: '.$tel.'<br>Mensaje: '.$ccomment.'</h4>';
    if ($mail->send()) {
        echo '<div class="alert success">
        <span class="closebtn">×</span>
        Gracias <b>'.$nombre.'</b> por enviarnos tu mensaje, nos pondremos en contácto lo mas antes posible
        </div>
        ';
    }
    


} catch (Exception $e) {
    echo '<div class="alert error">
    <span class="closebtn">×</span>
    <b>A ocurrido un error!</b> No se pudo enviar tu mensaje asegurate de llenar todo el formulario correctamente y de tener una conexión a internet.
    </div>';
}