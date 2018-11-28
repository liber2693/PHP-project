<?php
use  PHPMailer \ PHPMailer \ PHPMailer; 
use  PHPMailer \ PHPMailer \ Exception;

require '../libreria/PHPMailer/src/Exception.php';
require '../libreria/PHPMailer/src/PHPMailer.php';
require '../libreria/PHPMailer/src/SMTP.php';


	$mail = new PHPMailer(true);                              // Pasar `true` habilita excepciones


	try {
	    //Configuración del servidor
	    $mail->SMTPDebug = 2;                                 // Habilitar salida de depuración detallada
	    $mail->isSMTP();                                      // Configurar el correo para usar SMTP
	    $mail->Host = 'smtp.gmail.com';  				  // Especifique servidores SMTP principales y de respaldo
	    $mail->SMTPAuth = true;                               // Habilitar la autenticación SMTP
	    $mail->Username = 'jarondon07@gmail.com';              // Nombre de usuario SMTP
	    $mail->Password = 'jose7060411';                       // SMTP password
	    $mail->SMTPSecure = 'tls';                            // Habilitar el cifrado TLS, `ssl` también se acepta
	    $mail->Port = 587;                                    // Puerto TCP para conectarse a

	    //lenguaje
	   	//$mail->setLanguag('es','../libreria/PHPMailer/language/phpmailer.lang-es.php');

	    //Recipients
	    $mail->setFrom('jarondon07@gmail.com', 'Asunto');
	    $mail->addAddress('jarondon07@yahoo.com', 'Joe User');     // Añadir un destinatario
	    //$mail->addAddress('jarondon07@yahoo.com');               // Name is optional
	    //$mail->addReplyTo('info@example.com', 'Information');
	    //$mail->addCC('cc@example.com');
	    //$mail->addBCC('bcc@example.com');

	    //Attachments
	    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
	    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

	    //Content
	    $mail->isHTML(true);                                  // Set email format to HTML
	    $mail->Subject = 'Here is the subject';
	    $mail->Body    = 'JOSE This is the HTML message body <b>in bold!</b>';
	    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

	    $mail->send();
	    echo 'el mensaje ha sido enviado';
	} catch (Exception $e) {
	    echo 'No se pudo enviar el mensaje. Error de correo: ', $mail->ErrorInfo;
	}
?>