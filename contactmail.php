<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //SAnitize input
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = htmlspecialchars(trim($_POST['phone']));
    $inquiry = htmlspecialchars((trim($_POST['inquiry'])));
    $message = htmlspecialchars(trim($_POST['message']));
    $agree = isset($_POST['agree']) ? 'Yes' : 'No';


    //receiver email
    $to = "contact@vasptechnologies.com";
    $subject = "New Quote Request from Website";

    //email content
    $body = "You have received a new quote request from the website:\n\n
    Name : $name\n
    Email : $email\n
    Phone : $phone\n
    Inquiry Type: $inquiry\n\n
    Agreed to Privacy Policy: $agree
    ";

    //headers
    $headers = "From: noreply@vasptechnologies.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    //send mail
    if (mail($to, $subject . $body, $headers)) {
        echo "<script>alert('Thank you ! Your quote request has been sent successfully.'); window.history.back(); </scriptt>";
    } else {
        echo "<script>alert('Sorry, your request could not be sent. Please try again later.'); window.history.back(); </script>";
    }
} else {
    echo "Invalid Request.";
}


?>