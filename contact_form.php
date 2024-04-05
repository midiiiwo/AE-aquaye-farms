<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['Name'];
    $phone = $_POST['Phone_Number'];
    $email = $_POST['Email'];
    $message = $_POST['Message'];

    $to = "your-email@yourdomain.com"; // Change this to your email hosted on Hostinger
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us. We will get back to you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>