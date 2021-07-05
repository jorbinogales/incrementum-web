<?php

   
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
    
if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){

    $body =  '<strong>Nombre: </strong>'.$_POST['nombreForm'].
            '<br><strong>Apellido: </strong>'.$_POST['apellidoForm'].
            '<br><strong>EMPRESA: </strong>'.$_POST['empresaForm'].
            '<br><strong>RUC: </strong>'.$_POST['rucForm'].
            '<br><strong>TELEFONO: </strong>'.$_POST['telefonoForm'].
            '<br><strong>EMAIL: </strong>'.$_POST['emailForm'].
            '<br><strong>MESSAGE: </strong>'.$_POST['message'];
    $address = 'jorbinogales@gmail.com';
    $title = 'Nuevo mensaje de Incrementum WebSite';
    try {
        sendEmail($address, $body, $title null);
    } catch (Exception $e ){
        return $e;
    }
    
    if(isset($_POST['service'])){
        $attachment = 'https://incrementum.pe/php/mailers/'.$_POST['service'].'.png'
        $body =  '<p>Hemos recibido tus datos exitosamente</p>
                  <img src="mailers/'.$_POST['service'].'.png" style="width:100%";>';
        $address = $_POST['emailForm'];
        $title = 'Contacto Equipo Incrementum';

        try {
            sendEmail($address, $body, $title);
        } catch (Exception $e ){
            return $e;
        }
    }

 }

 function sendEmail($address, $body, $title, attachment)
 {
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
    $mail->setFrom('admin@incrementum.pe');
    $mail->addReplyTo('admin@incrementum.pe');
    $mail->addAddress($address);
    $mail->Subject = $title;
    $mail->IsHTML(true);
    $mail->Body = $body;

    if($attachment != null){
    //Attach an image file
    $mail->addAttachment($attachment);
    }
    
    //send the message, check for errors
    if (!$mail->send()) {
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message sent!';
    }
 }


?>