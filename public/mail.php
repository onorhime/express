<?php
require 'vendor/autoload.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

function sendmail($message, $receiver, $name, $subject){
  $mail = new PHPMailer(true);
  $mail->isSMTP();
  $mail->SMTPDebug = 0;
  $mail->Host = 'smtp.titan.email';
  $mail->Port = 587;
  $mail->SMTPAuth = true;
  $mail->isHTML(true);
  $mail->Username = 'team@dmgblockchain-invt.com';
  $mail->Password = '08076551684@';
  $mail->setFrom('team@dmgblockchain-invt.com', 'Dmg Blockchain');
  $mail->addReplyTo('team@dmgblockchain-invt.com', 'Dmg Blockchain');
  $mail->addAddress($receiver, $name);
  $mail->Subject = $subject;
  $mail->Body = $message;
  if (!$mail->send()) {
    return false;
 } else {
    return true;
     
            
 }

}
?>