<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data safely
    $user_email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $user_message = htmlspecialchars($_POST['message']);

    // Recipient email
    $to = "contact@vasptechnologies.com";

    // Email subject and body
    $subject = "New Query from Website Contact Form";
    $body = "
    You have received a new query from your website contact form.\n\n
    Email: $user_email\n
    Message:\n$user_message
    ";

    // Email headers
    $headers = "From: noreply@vasptechnologies.com\r\n";
    $headers .= "Reply-To: $user_email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Thank you! Your message has been sent successfully.'); window.history.back();</script>";
    } else {
        echo "<script>alert('Sorry, your message could not be sent. Please try again later.'); window.history.back();</script>";
    }
} else {
    echo "Invalid request.";
}
?>
