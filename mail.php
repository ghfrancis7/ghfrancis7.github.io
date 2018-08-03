<?php

if(isset( $_POST['name']))
  $name = $_POST['name'];
if(isset( $_POST['email']))
  $email = $_POST['email'];
if(isset( $_POST['message']))
  $message = $_POST['message'];
if(isset( $_POST['subject']))
  $subject = $_POST['subject'];

$content="From: $name \n Email: $email \n Message: $message";
$recipient = "ghfrancis7@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader); /*or die("Error!");*/
echo "Email sent!";

?>

<?php
/*
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

$mail=new PHPMailer();
$mail->CharSet = 'UTF-8';

$body = 'Cuerpo del correo de prueba';

$mail->IsSMTP();
$mail->Host       = 'smtp.gmail.com';
$mail->SMTPSecure = 'tls';
$mail->Port       = 587;
$mail->SMTPDebug  = 1;
$mail->SMTPAuth   = true;
$mail->Username   = 'tucorreo@gmail.com';
$mail->Password   = 'tuclave';
$mail->SetFrom('tucorreo@gmail.com', "juliocpiro");
$mail->AddReplyTo('no-reply@mycomp.com','no-reply');
$mail->Subject    = 'Correo de prueba PHPMailer';
$mail->MsgHTML($body);

$mail->AddAddress('gianni@gmail.com', 'Gianni');
$mail->send();
*/
?>