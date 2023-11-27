<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "plalic@tvz.hr"; // Replace with your email address
    $subject = $_POST['subject'];
    $message = "Name: " . $_POST['firstname'] . " " . $_POST['lastname'] . "\n";
    $message .= "Email: " . $_POST['email'] . "\n";
    $message .= "Country: " . $_POST['country'] . "\n";
    $message .= "Message:\n" . $_POST['subject'];

    // Simulate sending email (for testing purposes)
    $emailSent = true; // Set to false to simulate a failure

    if ($emailSent) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, something went wrong and we couldn't send your message.";
    }
} else {
    echo "Invalid request. Please submit the form.";
}
?>