<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $message = $_POST['message'];
    $to = "kunal.webdev1@gmail.com";
    $subject = "Message from Website(hbd-p)";
    $body = "Name: $name\nMessage: $message";
    $headers = "From: kunal.webdev1+hbd@gmail.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for your message!";
    } else {
        echo "Sorry, there was an error. Please try again later.";
    }
}
?>
