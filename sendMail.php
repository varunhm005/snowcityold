<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/PHPMailer/src/Exception.php';
require './PHPMailer/PHPMailer/src/PHPMailer.php';
require './PHPMailer/PHPMailer/src/SMTP.php';


$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = 'varundemo493@gmail.com';
    $mail->Password   = 'sbzx bwpc yfqm hgtr';
    $mail->SMTPSecure = 'tls';
    $mail->Port       = 587;

    $name = $_POST['name_booking'];
    $email = $_POST['email_booking'];
    $phone = $_POST['phone_booking'];
    $message = $_POST['message_booking'];


    //Recipients
    $mail->setFrom('varundemo493@gmail.com', 'Varun');
    $mail->addAddress('varunhm005@gmail.com', 'Varun');

    // Content
    $mail->isHTML(true);
    $mail->Subject = 'New Order';
    $mail->Body    = "<html>
                       <head>
                         <title>HTML email</title>
                       </head>
                       <body>
                         <span style='font-size:15px' > Name: <span style='font-size:12px' >  $name </span> <br>
                          Email: <span style='font-size:12px' >$email</span> <br>
                          Phone: <span style='font-size:12px' >$phone</span> <br>
                          Message: <span style='font-size:12px' >$message</span> 
                          </span>
                       </body>
                    </html>";

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
