<?php
    $mailto = $_POST['mail_to'];
    $mailSub = $_POST['mail_sub'];
    $mailMsg = $_POST['mail_msg'];
   require './PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 25; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "nouhailanouss@gmail.com";
   $mail ->Password = "";
   $mail ->SetFrom("nouhailanouss@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
       echo "Mail Sent";
   }
   else
   {
       echo "Mail Sent";
   }
