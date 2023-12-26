<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $representative = $_POST['representative'];
    $email = $_POST['email'];
    $looking = $_POST['looking'];
    $message = $_POST['message'];
   

    $to = 'shahzaibabidsaeed@gmail.com'; 
    $subject = 'New Contact Form Submission';
    $body .= "You have received a new message from the contact form.\n\n";
    $body .= "Name: " . $name . "\n";
    $body .= "Representative: " . $representative . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "looking: " . $looking. "\n";
    $body .= "Message: " . $message;

    $headers .= "From: " . $email;

    if (mail($to, $subject, $body, $headers)) {
        header("Location: ./thankyou.html");
    } else {
        echo "Message could not be sent";
    }
}
?>
