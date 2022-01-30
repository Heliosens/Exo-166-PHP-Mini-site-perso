<?php
    if(!isset($_SESSION['status']) || $_SESSION['status'] !== 'admin'){
        header('Location: /index.php?s=0');
    }
    $data = json_decode(file_get_contents("../data/last_message.json"), true);
?>
<section>
    <h1>Admin</h1>
</section>
<section>
    <?=$data?>
</section>
