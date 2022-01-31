<?php
$userName = strip_tags(trim($_POST['userName']));
$userEmail = strip_tags(trim($_POST['userEmail']));
$subject = strip_tags(trim($_POST['subject']));
$text = strip_tags(trim($_POST['userMessage']));

// get from, subject, text, username?
$dest = "heliosens59@gmail.com";
$headers = "From: $userEmail";
if (mail($dest, $subject, $text, $headers)) {
    echo "Email envoyé avec succès";
} else {
    echo "Échec de l'envoi de l'email";
}

$array = [];
if(file_exists("../data/last_message.json")){
    $array = json_decode(file_get_contents("../data/last_message.json"), true);
    $array[] = [$userName, $text];
}
else{
    $array[] = [$userName, $text];
}

$jsonMessage = file_put_contents("../data/last_message.json", json_encode($array));
header('Location: /public/?page=contact');