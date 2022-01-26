<?php
$json = getUserData();
?>
<section>
    <h1>BIO</h1>
    <h2><?=$json["name"]?> <?=$json['first_name']?></h2>

</section>