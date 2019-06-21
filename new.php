<?php
   $name = $_POST['name'];
   $visitor_email = $POST['email'];
   $message = $_POST['message'];

   $email_form = 'tasnim.cse@baiust.edu.bd';

   $email_subject = "New form submission";
   
   $email_body = "User Name: $name. \n".
                 "User Email: $visitor_email. \n".
                 "User Message: $message. \n";

   $to = "tasnimbhuiyan1700@gmail.com";
 
   $headers= "Form: $email_form \r\n";
 
   $headers .= "Replay-To: $visitor_email \r\n";

   mail($to,$email_subject,$smail_body,$headers);

   header("Location: new11.html");

?>