<?php
$name = $_POST['name'];
$phone = $_POST['phone'];

$email_from = 'info@carepoint.pro';
$email_subject = "Новая заявка на обучение в Carepoint.pro";
$email_body = "Имя: $name\n Телефон: $phone";

$to = $email_from;
$headers = "From: $email_from \r\n";
$headers .= "Reply-To: $email_from \r\n";
mail($to,$email_subject,$email_body,$headers);
?>
