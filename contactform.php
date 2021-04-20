<?php

if (isset($_POST['submit'])) {
    $errors = [];
    if (!empty($_POST)) {
        $name = $_POST['name'];
        $visitor_email = $_POST['email'];
        $message = $_POST['message'];

        if (empty($name)) {
            $errors[] = "Name is empty";
        }

        if (empty($email)) {
            $errors[] = "Email is empty";
        } else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 'Email is invalid';
        }

        if (empty($message)) {
            $errors[] = "Message is empty";
        }

        if (empty($errors)) {
            $toEmail = "rimante@rimanteraz.com";
            $emailSubject = "New email from your contact form";
            $headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=iso-8859-1'];

            $bodyParagraphs = ["Name: {$name}", "Email: {$email}", "Message:", $message];
            $body = join(PHP_EOL, $bodyParagraphs);

            if(mail($toEmail, $emailSubject, $body, $headers)) {
                header('Location: index.html?mailsent');
            } else {
                $errorMessage = "Oops, something went wrong. Please try again later";
            }
        } else {
            $allErrors = join('<br/>', $errors);
            $errorMessage = "<p style='color: red;'>{$allErrors}</p>";
        }
    }
}



// $name = $_POST['name'];
// $visitor_email = $_POST['email'];
// $message = $_POST['message'];

// $email_from = "rimante@rimanteraz.com";
// $email_subject = "New Form submission";
// $email_body = "You have received a new message from $name.\n".
//                 "Here is the message:\n $message";

// $to = "rimante@rimanteraz.com";
// $headers = "MIME-Version: 1.0" . "\r\n";
// $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// $headers .= "From: $email_from \r\n";
// $headers .= "Reply-To: $visitor_email \r\n";
// mail($to, $email_subject, $email_body, $headers);