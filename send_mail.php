<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

$mail = new PHPMailer(true);
$subject=$_POST['mail_subject'];
$mail_content=$_POST['mail_content'];

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

	$mail->isHTML(true);                                // Set email format to HTML
	$mail->CharSet = 'UTF-8';                           // Set the charset to UTF-8
	$mail->Subject = $subject;
	$mail->Body = $mail_content;
	$mail->send();
	echo json_encode(array('icon'=>'success','message'=>"Mail has been sent successfully"));
} catch (Exception $e) {
	echo json_encode(array('icon'=>'info','message'=>"Message could not be sent. Mailer Error: {$mail->ErrorInfo}"));
}
