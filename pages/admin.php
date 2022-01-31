<?php
    if(!isset($_SESSION['status']) || $_SESSION['status'] !== 'admin'){
        header('Location: /index.php?s=0');
    }
    $data = "";

?>
<section>
    <h1>Admin</h1>
</section>
<section>
    <p>Messages reçu : </p>

    <?php
    if(file_exists("../data/last_message.json")){
        $data = json_decode(file_get_contents("../data/last_message.json"), true);
        $end = count($data);
        var_dump($data);
        echo "<br>";
        var_dump($end);
        echo $data[$end];
    }?>
</section>
<!--//     foreach ($data as $item => $text){?>-->
<!--    //            <p>--><?//= $text ?><!-- - --><?//= $item ?><!--</p>--><?php
////        }