<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "minatab253@gmail.com";
    $subject = "Message from your Portfolio Website";
    $body = "Name: " . $name . "\nEmail: " . $email . "\nMessage:\n\n" . $message;

    $headers = "From: " . $email . "\r\n";
    $headers .= "Reply-To: " . $email . "\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Email sent successfully!";
    } else {
        echo "Error: Unable to send email.";
    }
}
?>
