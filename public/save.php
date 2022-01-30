<?php
$idx = strip_tags(trim($_POST['userName']));
$text = strip_tags(trim($_POST['userMessage']));
$array = [];

if(file_exists("../data/last_message.json")){
    $array = json_decode(file_get_contents("../data/last_message.json"), true);
    $array[$idx] = $text;
}
else{
    $array[$idx] = $text;
}

$jsonMessage = file_put_contents("../data/last_message.json", json_encode($array));
header('Location: /public/?page=contact');