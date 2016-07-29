<?php

header('Location: index.php');


$date    = date("m.d.Y");
//$weekday = date("1");
$time    = date("h:i:sa");

//Email info
$admin_email    = "stephenritchiedesigns@gmail.com";
$client_email   = $_POST['email'];
$client_name    = $_POST['name'];
$client_message = $_POST['message'];
$headers        = "This email was submitted on stephen-ritchie.com by ".$client_name ." Timestamp: ".$date." ".$time;

echo $admin_email;
echo $client_email;
echo $client_subject;
echo $client_message;
echo $headers;

//Sending email
mail($admin_email, $client_name, $client_message, $headers);






?>