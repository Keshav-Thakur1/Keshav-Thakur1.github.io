<?php 
$name = $_POST['name'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "keshavthakur5103@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@https://keshav-thakur1.github.io/" . "\r\n" .
"CC: somebodyelse@example.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thanku.html");
?>