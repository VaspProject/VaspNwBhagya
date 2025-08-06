<?php

$to = "shilpee@vasptechnologies.com";

if (isset($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['inquiry'])) {
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $phone = htmlspecialchars(strip_tags($_POST['phone']));
    $inquiry = htmlspecialchars(strip_tags($_POST['inquiry']));
    $message = isset($_POST['message']) ? htmlspecialchars(strip_tags($_POST['message'])) : '';
    $agree = isset($_POST['agree']) ? "Yes" : "No";

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid_email";
        exit;
    }

    // Prepare the email
    $email_subject = "New Demo Request: $inquiry";
    $email_body = "Name: $name<br/>Email: $email<br/>Phone: $phone<br/>Inquiry Type: $inquiry<br/>Message: $message<br/>Agreed to receive updates: $agree";

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
