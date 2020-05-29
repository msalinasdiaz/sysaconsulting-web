<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phone'];
$formcontent="De: $name \n Mensaje: $message \n Numero telefonico: $phone";
$recipient = "contacto@sysaconsulting.cl";
$subject = $_POST['subject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Muchas gracias, estaremos en contacto contigo lo mas pronto posible.";
?>