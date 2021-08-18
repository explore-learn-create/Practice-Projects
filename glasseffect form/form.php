<?php

$name = $_POST['name'];
$visitors_email = $_POST['email'];
$app_name = $_POST['app'];
$url = $_POST['url'];

$email_from = 'freemodsapp.xyz';

$email_subject = 'New Form Submission';

$email_body = "User Name: $name. \n".
              "User Email: $visitors_email. \n".
              "User App: $app_name. \n".
              "User Url: $url. \n";

$to = 'freemodsapp@gmail.com';

$headers = "From: $email_from \r\n";

$headers = "Reply-To: $visitors_email \r\n";

mail($to,$app_name,$email_body,$headers);
header("Location: form.html");
?>