<?php
require './classes/mail.php';
//form envoi mail

//
$mail = new Mail();
mail($mail->getTo(), $mail->getSubject(), $mail->getMessage());