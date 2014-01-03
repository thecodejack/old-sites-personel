<?php 
$to = "aadisrikanth@gmail.com"; 
$subject = "COMMENT RECEIVED"; 
$email = "webadmin@adisrikanth.x10.mx" ; 
//$message = "CHECK123" ; 
$headers = "From: $email";
$name = $_REQUEST['name']; 
$gemail1 = $_REQUEST['email']; 
$comment= $_REQUEST['comment'];
$message = "Dear Srikanth,\n\n$name posted\n\n$comment\n\nin your Webpage. His contact email-id provided is $gemail1\n\nWEB ADMIN\nX10 SITE";
$sent = mail($to, $subject, $message, $headers) ; 
if($sent) 
{
print "Your mail was sent successfully"; 
} 
else 
{
print "We encountered an error sending your mail"; 
} ?> 