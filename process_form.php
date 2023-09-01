<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

// Use the mail() function to send an email
mail('mailto:geobalies.datascience@gmail.com', 'New Contact Form Submission', $message, "From: $email");

// Redirect the user to a thank-you page
header('Location: thank_you.html');
?>
