<?php
if(isset($_POST['submit'])) {
    $to = "aljovadackel@gmail.com"; // replace with your email address
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $headers = "From: $name <$email>";
    
    // validate form input
    if(empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        // send email
        if(mail($to, $subject, $message, $headers)) {
            echo "Thank you for your message!";
        } else {
            echo "Sorry, there was a problem sending your message. Please try again later.";
        }
    }
}
?>