<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);

try {
	// $mail->SMTPDebug = 2; // show the send mail log									 
	$mail->isSMTP();										 
	$mail->Host	 = 'smtp.gmail.com';				 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'ramr65007@gmail.com';				 
	// $mail->Password = 'Kasi1964&';
    $mail->Password = 'ubgxdaottakxqxcn';					 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587; 

	$mail->setFrom('ramr65007@gmail.com', 'Ramajayam K');		 
	$mail->addAddress('ramajayamkasi62@gmail.com', 'Jagan K');
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Re: Folder shared with you: ‘Blume Fund III - KYC update’';
	$mail->Body = 'HTML message body in <b>bold</b> ';
	$mail->AltBody = 'Body in plain text for non-HTML mail clients';
	$mail->send();
	echo "Mail has been sent successfully!";
} catch (Exception $e) {
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

?>
