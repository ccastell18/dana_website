<?php
  $name= $_POST['name'];
  $visitor_email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];

  $email_from = 'ccastell_1@hotmail.com';

  $email_subject = 'New form submission';

  $email_body = "User name: $name.\n". 
                "User email: $visitor_email.\n". 
                "User number: $number.\n". 
                "User message: $message.\n";
  $to= "c.castellano18@gmail.com";

  $headers = "From: $email_from \r\n";
  $headers .= "Reply-To: $visitor_email \r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location: index.html");

?>