<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set your recipient email address
    $to = "info@morgancohistory.org";

    // Create email subject
    $subject = "Contact Form Submission from $name";

    // Compose the email message
    $email_message = "Name: $name\n";
    $email_message .= "Phone: $phone\n";
    $email_message .= "Email: $email\n";
    $email_message .= "Message:\n$message";

    // Additional headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $email_message, $headers)) {
    echo "Email sent successfully!";
} else {
    echo "Email could not be sent. Error: " . error_get_last()['message'];
}

} else {
    echo "Invalid request.";
}
?>

