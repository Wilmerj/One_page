<?php
/*
// Check for empty fields
echo '<script type="text/javascript>alert("Llene todos los campos");</script>"';
if(empty($_POST['Nombre'])  		||
   empty($_POST['email']) 		||
   empty($_POST['Inquietudes'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
      echo '<script type="text/javascript>alert("Llene todos los campos");</script>"';
      header('Location: ../index.html');
   }
   else{
    $name = $_POST['Nombre'];
    $email_address = $_POST['email'];
    $message = $_POST['Inquietudes'];
    // Create the email and send the message
    $para = 'wilmerj1996@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $e_mail = "Correo de:  ".$name;
    $cuerpo_msj = $Inquietudes;
    $headers = 'From: wilmerj1996@gmail.com' . "\r\n" .
        'Reply-To: wilmerj1996@gmail.com' . "\r\n" .
        'X-Mailer: PHP/' .phpversion(); // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    mail($para,$email_address,$cuerpo_msj,$headers);
    header('Location: ../index.html');
}	*/
/*
$destino = "wilmerj1996@gmail.com";
$asunto =  "Mensaje enviado desde pagina web";
$comentario = "
  Email: $_POST['email']
  Comentario: $_POST['Inquietudes']
";
$headers = 'From: '.$_POST['email']."\r\n".
            'Reply-To'.$_POST['email']."\r\n".
            'X-Mailer: PHP/'.phpversion();

  mail($destino, $asunto, $comentario,  $headers);
  echo "Mensaje enviado";*/
  header('Location: ../index.html')
?>