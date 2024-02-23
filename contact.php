<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Include PHPMailer library

// PHPMailer configuration
$mail = new PHPMailer(true);

try {
    // SMTP configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'djbaishya007@gmail.com'; // Your Gmail email address
    $mail->Password = 'Dh@n2003'; // Your Gmail password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Sender and recipient details
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('djbaishya007@gmail.com'); // Your Gmail email address

    // Email content
    $mail->isHTML(true);
    $mail->Subject = 'New message from Contact Form';
    $mail->Body = "Name: {$_POST['name']}<br>Email: {$_POST['email']}<br>Message: {$_POST['message']}";

    // Send email
    $mail->send();
    echo 'Message has been sent successfully.';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}
?>