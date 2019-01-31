<?php

require_once "vendor/autoload.php";

//PHPMailer Object
$mail = new PHPMailer;

//From email address and name
$mail->From = "muthushunmugesh@corpconnect.com";
$mail->FromName = "Full Name";

//To address and name
$mail->addAddress("sundarbala2796@gmail.com"); //Recipient name is optional

//Address to which recipient will reply

;

//Send HTML or Plain Text email
$mail->isHTML(true);

$mail->Subject = "Subject Text";
$mail->Body = "<i>Mail body in HTML</i>";
$mail->AltBody = "This is the plain text version of the email content";

if(!$mail->send()) 
{
    echo "Mailer Error: " . $mail->ErrorInfo;
} 
else 
{
    echo "Message has been sent successfully";
}