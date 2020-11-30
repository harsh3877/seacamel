<?php

require_once('PHPMailer\PHPMailerAutoload.php');
$mail= new PHPMailer();
$mail->isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure='ssl';
$mail->Host='smtp.gmail.com';
$mail->Port='465';
$mail->isHTML();
$mail->Username='harshsharma3877@gmail.com';
$mail->Password='sharma3877';
$mail->SetFrom('no-reply@seacamaels.com');
$mail->Subject='helloworld';
$mail->Body='somehing message';
$mail->AddAddress('desiboy1140@gmail.com');

$mail->Send(); 
 
?>