<?php
$jsonMessage = file_put_contents("../data/last_message.json", json_encode($_POST['userMessage']));
