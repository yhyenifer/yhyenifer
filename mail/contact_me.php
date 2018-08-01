<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
 
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "Argumentos inválidos!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
   
// Create the email and send the message
$to = 'yhyenifer@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Hola soy $name";
$email_body = "Mi nombre es: $name por favor contáctame al correo electrónico $email_address ";
$headers = "From: yhyenifer@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>
