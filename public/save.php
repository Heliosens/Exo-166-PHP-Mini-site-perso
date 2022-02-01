<?php
session_start();
$userName = strip_tags(trim($_POST['userName']));
$userEmail = strip_tags(trim($_POST['userEmail']));
$subject = strip_tags(trim($_POST['subject']));
$text = strip_tags(trim($_POST['userMessage']));

// get from, subject, text, username?
$dest = "heliosens59@gmail.com";
$headers = "From: $userEmail";
if (mail($dest, $subject, $text, $headers)) {
    $_SESSION['send'] = "success";
}
else {
    $_SESSION['send'] = "fail";
}

$array = [];
if(file_exists("../data/last_message.json")){
    $array = json_decode(file_get_contents("../data/last_message.json"), true);
    $array[] = ['name' => $userName, 'mail' => $userEmail, 'subject' => $subject, 'content' => $text];
}
else{
    $array[] = ['name' => $userName, 'mail' => $userEmail, 'subject' => $subject, 'content' => $text];
}

file_put_contents("../data/last_message.json", json_encode($array));

header('Location: /public/?page=contact');
