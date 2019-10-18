<?php
if(isset($_POST['submit'])){
  $name= $_POST['name'];
  $visitor_email = $_POST['email'];
  $number = $_POST['number'];
  $message = $_POST['message'];

  $to = "ccastell_1@hotmail.com";

  $email_subject = 'New form submission';

  $email_body = "User name: $name.\n". 
                "User email: $visitor_email.\n". 
                "User number: $number.\n". 
                "User message: $message.\n";
  

  $headers = "From: " .$name. " <".$visitor_email.">\r\n";
  $headers .= "Reply-To: ".$visitor_email." \r\n";
  $headers .= "Content-type: text/html; charset: utf-8\r\n";

  mail($to, $email_subject, $email_body, $headers);

  header("Location:index.html");
}
?>