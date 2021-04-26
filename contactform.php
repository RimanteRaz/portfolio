<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require './vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/../');
$dotenv->load();

if (array_key_exists('email', $_POST)) {
  $err = false;
  $msg = '';
  $error_msg = '';
  $success_msg = '';
  $email = '';
  $to = 'rimante@rimanteraz.com';
  if (array_key_exists('message', $_POST)) {
      //Limit length and strip HTML tags
      $message = substr(strip_tags($_POST['message']), 0, 16384);
  } else {
      $message = '';
      $msg = 'No message provided!';
      $err = true;
  }
  //Apply some basic validation and filtering to the name
  if (array_key_exists('name', $_POST)) {
      //Limit length and strip HTML tags
      $name = substr(strip_tags($_POST['name']), 0, 255);
  } else {
      $name = '';
  }
  
  //Make sure the address they provided is valid before trying to use it
  if (array_key_exists('email', $_POST) && PHPMailer::validateAddress($_POST['email'])) {
      $email = $_POST['email'];
  } else {
      $msg .= 'Invalid email address provided';
      $err = true;
  }
  if (!$err) {
      $mail = new PHPMailer();
      $mail->isSMTP();
    //   $mail->SMTPDebug = SMTP::DEBUG_SERVER;
      $mail->Host = $_ENV["HOST"];
      $mail->Port = $_ENV["PORT"];
      $mail->CharSet = PHPMailer::CHARSET_UTF8;
      $mail->SMTPAuth = true;
      $mail->Username = $_ENV["USERNAME"];
      $mail->Password = $_ENV["PASSWORD"];
      $mail->setFrom($_ENV["FROM_EMAIL"], (empty($name) ? 'Contact form' : $name));
      $mail->addAddress($to);
      $mail->addReplyTo($email, $name);
      $mail->Subject = (empty($name) ? 'A site visitor' : $name) . ' sent you a message | rimanteraz.com';
      $mail->Body = (empty($name) ? 'A site visitor' : $name) . " writes:\n\n" . $message;
      if (!$mail->send()) {
          if (empty($msg)) {
            $msg = "<b>Sorry, couldn’t send your message...</b></br>"
            ."Please try again later or contact me at rimante@rimanteraz.com.";
          }
          $error_msg = $msg;
      } else {
        $success_msg = "<b>Your message has been sent!</b><br>"
        ."I will reply to you shortly.";
        $_POST = array();
      }
      
  }
} 