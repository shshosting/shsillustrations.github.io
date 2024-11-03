<?php
// Define the recipient email address
$to = "shsillustrations@gmail.com";

// Get form data
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Set the email subject and headers
$subject = "New Contact Form Submission from SHS Illustrations";
$headers = "From: " . $email . "\r\n" .
           "Reply-To: " . $email . "\r\n" .
           "Content-Type: text/plain; charset=UTF-8";

// Format the email message
$email_body = "You have received a new message from the contact form on SHS Illustrations.\n\n";
$email_body .= "Name: $name\n";
$email_body .= "Email: $email\n\n";
$email_body .= "Message:\n$message\n";

// Send the email
if (mail($to, $subject, $email_body, $headers)) {
    // Redirect to a thank-you page or show a success message
    echo "Thank you for contacting us! Your message has been sent successfully.";
} else {
    // Show an error message if the email fails
    echo "Sorry, something went wrong. Please try again later.";
}
?>