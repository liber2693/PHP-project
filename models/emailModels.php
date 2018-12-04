<?php 
use  PHPMailer \ PHPMailer \ PHPMailer; 
use  PHPMailer \ PHPMailer \ Exception;

require '../libreria/PHPMailer/src/Exception.php';
require '../libreria/PHPMailer/src/PHPMailer.php';
require '../libreria/PHPMailer/src/SMTP.php';
//require_once 'config.php';

/**
 * clase de eventos configuracion del administrador
 */
class Email
{
	//listar eventos activos
	public function sendEmail($emisor_email,$asunto,$marca,$modelo,$serial,$contenido){
		
		$serial_ipm = ($serial != null) ? $serial : "No especificado" ;

		$mail = new PHPMailer(true);                              // Pasar `true` habilita excepciones
		try {
		    //Configuración del servidor
		    $mail->SMTPDebug = 0;                                 // Habilitar salida de depuración detallada
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
		    $mail->setFrom($emisor_email, $emisor_email);
		    $mail->addAddress('liber2693@gmail.com', 'MaschinenWerk 2000 Solicitud');     // Añadir un destinatario
		    //$mail->addAddress('jarondon07@yahoo.com');               // Name is optional
		    //$mail->addReplyTo('info@example.com', 'Information');
		    //$mail->addCC('cc@example.com');
		    //$mail->addBCC('bcc@example.com');

		    //Attachments
		    //$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
		    //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name

		    //Content
		    $mail->isHTML(true);                                  // Set email format to HTML
		    $mail->Subject = $asunto;

		    $body_mail = '	<style type="text/css">
								table{
									max-width: 600px;
									padding: 10px;
									margin: 0 auto;
									border-collapse: collapse;
									font-family: "calibri light";
								}
								#correo{
									width: 70%;
									margin: auto;
								}
								#correo .encabezado{
									height: 100px;
									text-align: center;
								}
								#correo .cuerpo h3{
									text-align: center;
								}
								#correo .cuerpo p{
									text-align: justify;
								}
								#correo .pie{
									height: 50px;
									text-align: center;
								}
						</style>';
		    
		    $body_mail .= '<table id="correo" border="0">
								<tbody>
									<!-- encabezado -->
									<tr>
										<td class="encabezado">
											<img  src="../img/images/logo_correo.png" alt="MaschinenWerk 2000,C.A">
										</td>
									</tr>';

		    $body_mail.= '<tr>
							<td class="cuerpo">
								<h3>Titulo del Email</h3>
								<p>Marca: '.$marca.'</p>
								<p>Modelo: '.$modelo.'</p>
								<p>Serial: '.$serial_ipm.'</p>
								<p>Mensaje: '.$contenido.'</p>
							</td>
						</tr>';

		    $body_mail.= '<tr>
							<td class="pie">&copy; MaschinenWerk 2000,C.A 2018-2019 | Todos los derechos reservados <a href="http://designliber.iblogger.org/Regna/">LiberWEB</a></td>
						</tr>
					</tbody>
				</table>';
		    
		    $mail->Body    = $body_mail;
		    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients'; //alternativa sin HTML

		    $mail->send();
		    //echo 'el mensaje ha sido enviado';
		   	return 1;	   		    
		} catch (Exception $e) {
		    //echo 'No se pudo enviar el mensaje. Error de correo: ', $mail->ErrorInfo;
		    return 2;
		}

	}	
}
?>