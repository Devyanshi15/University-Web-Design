<?php

$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_form='devyanshim6@gmail.com';
$email_subject='new form submission';
$email_body="User name:$name.\n".
                "User email:$visitor_email.\n".
                    "Subject:$subject.\n".
                        "User Message:&message.\n";

$to='devyanshi@hotmail.com';
$headers="From:$email_from \r\n";
$headers.="Reply-To:$visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);
header("Location:contact.html");

?>