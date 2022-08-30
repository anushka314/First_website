<?php
    $name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $details = $_POST['details'];

    $email_from = '';
    $email_subject = 'New collaboration request';

    $email_body = "User Name: $name.\n".
                  "User email: $visitor_email.\n".
                  "User phone number: $phone_number.\n".
                  "User details: $details.\n";

    $to = 'rajnigupta08091986@gmail.com';
    $headers = "From: $email_from \r\n";
    $headers .= "reply-to: $visitor_email \r\n";

    mail($to,$email_subject,$email_body,$headers);
    header("Location: collaborate_page.html");
?>