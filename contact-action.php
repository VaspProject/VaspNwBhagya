<?php

$to = "shilpee@vasptechnologies.com"; // Change this to your email

if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['enquiry'])) {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $phone = htmlspecialchars(strip_tags($_POST['phone']));
    $enquiry = htmlspecialchars(strip_tags($_POST['enquiry']));
    $message = isset($_POST['message']) ? htmlspecialchars(strip_tags($_POST['message'])) : '';

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid_email";
        exit;
    }

    // Prepare the email
    $email_subject = "New Enquiry: $enquiry";
    $email_body = "Name: $name<br/>Email: $email<br/>Phone: $phone<br/>Enquiry: $enquiry<br/>Message: $message";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "mail_failed";
    }
} else {
    echo "missing_fields";
}
?>
