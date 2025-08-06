<?php

$to = "shilpee@vasptechnologies.com";

if (isset($_POST['full_name'], $_POST['email'], $_POST['phone'], $_POST['position'], $_FILES['resume'], $_POST['cover_letter'])) {
    $name = htmlspecialchars(strip_tags($_POST['full_name']));
    $email = htmlspecialchars(strip_tags($_POST['email']));
    $phone = htmlspecialchars(strip_tags($_POST['phone']));
    $position = htmlspecialchars(strip_tags($_POST['position']));
    $coverLetter = htmlspecialchars(strip_tags($_POST['cover_letter']));
    $resume = $_FILES['resume'];

    // Validate email address
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "invalid_email";
        exit;
    }

    // Validate resume upload
    $allowedFileTypes = ['application/pdf'];
    if (!in_array($resume['type'], $allowedFileTypes) || $resume['error'] !== UPLOAD_ERR_OK) {
        echo "invalid_resume";
        exit;
    }

    // Prepare the email
    $email_subject = "Job Application: $position";
    $email_message = "Name: $name<br/>Email: $email<br/>Phone: $phone<br/><br/>Position Applied For: $position<br/><br/>Cover Letter:<br/>$coverLetter";

    // Handle file attachment
    $fileContent = file_get_contents($resume['tmp_name']);
    $encodedResume = chunk_split(base64_encode($fileContent));
    $resumeName = $resume['name'];

    $boundary = md5(time());

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"{$boundary}\"\r\n";

    $email_body = "--{$boundary}\r\n";
    $email_body .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
    $email_body .= "Content-Transfer-Encoding: 7bit\r\n\r\n";
    $email_body .= $email_message . "\r\n\r\n";
    $email_body .= "--{$boundary}\r\n";
    $email_body .= "Content-Type: application/pdf; name=\"{$resumeName}\"\r\n";
    $email_body .= "Content-Transfer-Encoding: base64\r\n";
    $email_body .= "Content-Disposition: attachment; filename=\"{$resumeName}\"\r\n\r\n";
    $email_body .= $encodedResume . "\r\n\r\n";
    $email_body .= "--{$boundary}--";

    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "success";
    } else {
        echo "mail_failed";
    }
} else {
    echo "missing_fields";
}
?>
