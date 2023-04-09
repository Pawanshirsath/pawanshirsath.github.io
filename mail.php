<?php
//get data from form  

$name = $_POST['name'];
$email= $_POST['email'];
$subject= $_POST['subject'];
$message= $_POST['message'];
$to = "realpawanshirsath@gmail.com";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n  Subject = " . $subject . "\r\n Message =" . $message;
$headers = "From: pavanshirsath16@gmail.com" . "\r\n" .
"CC: pavanshirsath16@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("");
?>