<?php
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['phone'])     ||
   empty($_POST['message'])   ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Brak wymaganych danych";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
$to = 'dsw40375@student.dsw.edu.pl';
$email_subject = "Kontakt z strony 57-513 Crew od:  $name";
$email_body = "Ktoś wysłał wiadomość za pomocą formularza kontaktowego.\n\n"."Oto infermocje na temat nadawcy oraz treść wiadomości:\n\nImię: $name\n\nEmail: $email_address\n\nTelefon: $phone\n\nTreść wiadomości:\n$message";
$headers = "Od: dsw40375@student.dsw.edu.pl\n";
$headers .= "Do: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>