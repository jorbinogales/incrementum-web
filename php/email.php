<?php

   
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    require '../vendor/autoload.php';
    
    $mail = new PHPMailer();
    $mail->isSMTP();
    $mail->SMTPDebug = 2;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Host = 'mail.incrementum.pe';
    $mail->Port = 465;
    $mail->SMTPAuth = true;
    $mail->Username = 'admin@incrementum.pe';
    $mail->Password = 'Sumagro01$$';
    $mail->setFrom('consultas@incrementum.pe');
    $mail->addReplyTo('consultas@incrementum.pe');
    $mail->addAddress('consultas@incrementum.pe');
    $mail->Subject = 'Nuevo mensaje de Incrementum WebSite';
    $mail->Body = '<strong>Nombre: </strong>'.$_POST['nombreForm'].
                  '<br><strong>Apellido: </strong>'.$_POST['apellidoForm'].
                  '<br><strong>EMPRESA: </strong>'.$_POST['empresaForm'].
                  '<br><strong>RUC: </strong>'.$_POST['rucForm'].
                  '<br><strong>TELEFONO: </strong>'.$_POST['telefonoForm'].
                  '<br><strong>EMAIL: </strong>'.$_POST['emailForm'].
                  '<br><strong>MESSAGE: </strong>'.$_POST['message'];
    $mail->IsHTML(true);
                  
    
    //Attach an image file
    $mail->addAttachment('../dist/img/LogoColor.png');
    
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }

 }


?>