<?php
require './classes/mail.php';

$mail = new Mail();
mail($mail->getTo(), $mail->getSubject(), $mail->getMessage());