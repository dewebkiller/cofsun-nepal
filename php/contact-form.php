<?php
// Change 1: Check if the form was submitted via POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

  // Change 2: Safely get form data using the null coalescing operator (??)
  // This provides a default empty string '' if the key doesn't exist, preventing errors.
  $name    = $_POST['name'] ?? '';
  $email   = $_POST['email'] ?? '';
  $phone   = $_POST['phone'] ?? '';
  $website = $_POST['website'] ?? '';
  $message = $_POST['message'] ?? '';
  
  $from    = 'Contact form from Cofsun';
  $to      = 'dewebkiller@gmail.com'; // Recipient's email address
  $subject = 'Message from COFSUN';

  $body = "From: $name\n";
  $body .= "E-Mail: $email\n";
  $body .= "Phone: $phone\n";
  $body .= "Website: $website\n";
  $body .= "Message: $message\n";

  // init error message
  $errmsg = '';

  // Change 3: Validate the variables, not the $_POST array directly.
  // Using trim() removes whitespace, and empty() checks if the variable is empty.
  if (empty(trim($name))) {
    $errmsg .= 'Please enter your name.<br>';
  }

  // Check if email has been entered and is valid
  if (empty(trim($email)) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errmsg .= 'Please enter a valid email address.<br>';
  }

  // Check if message has been entered
  if (empty(trim($message))) {
    $errmsg .= 'Please enter your message.<br>';
  }

  $result = '';
  // If there are no errors, send the email
  if (!$errmsg) {
    // Note: The mail() function's success depends on your server configuration.
    // The 'From' header should be set properly for better deliverability.
    $headers = 'From: ' . $from;
    if (mail($to, $subject, $body, $headers)) {
      $result = '<div class="alert alert-success">Thank you for contacting us. Your message has been successfully sent. We will contact you very soon!</div>';
    } else {
      $result = '<div class="alert alert-danger">Sorry, there was an error sending your message. Please try again later.</div>';
    }
  } else {
    $result = '<div class="alert alert-danger">' . $errmsg . '</div>';
  }
  echo $result;
}
?>