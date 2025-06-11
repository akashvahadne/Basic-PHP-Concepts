<?php
$to_email = "abhawar646@gmail.com";
$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
if(mail($to_email, $subject, $body)) 
{
    echo "Email successfully sent to $to_email...";
} 
else 
{
    echo "Email sending failed...";
}
?>