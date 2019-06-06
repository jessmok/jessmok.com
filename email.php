<?php
    if(!isset($_POST['']))
    {
        echo "ERROR: You need to submit the form!"
    }
    $name = $_POST["name"];
    $visitor_email = $_POST["email"];
    $message = $_POST["message"];

    if(empty($name) || empty($visitor_email))
    {
        echo "ERROR: Name and email are required fields!"
    }

    $email_from = 'jwmok@calpoly.edu';
    $email_subject = "WEBSITE: New Message";
    $email_body = "NEW MESSAGE FROM: $name.\n".
        "email address: $visitor_email\n".
        "\n$message".

    $to = "jwmok@calpoly.edu";
    $headers = "From: $email_from \r\n";

    mail($to, $email_subject, $email_body, $headers);

    echo "Thank you for contacting me! I'll be getting back to you as soon as possible."
?>.