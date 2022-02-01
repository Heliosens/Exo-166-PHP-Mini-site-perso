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
    <?php
    if(file_exists("../data/last_message.json")) {
        $data = json_decode(file_get_contents("../data/last_message.json"), true);
        $end = count($data) - 1;

        if (isset($_GET['btn']) && $_GET['btn'] === "1") {
            echo "Tous les messages :<br>";
            foreach ($data as $idx => $item) {
                echo "<br>";
                echo "<p>" . ($idx + 1) . " : \"" . $item['subject'] . "\" de : <strong>" . $item['name'] . "</strong> 
                (". $item['mail'] . ")</p>
                <p>message :</p>
                <p>" . $item['content'] . "</p>";
            }
            echo "<a href='/?page=admin&btn=0'>moins de messages</a>";
        }
        else {
            echo "<br>";
            echo "<p>Dernier message reçu : \"" . $data[$end]['subject'] . "\"</p>
              <p> de : <strong>" . $data[$end]['name'] . "</strong> (". $data[$end]['mail'] . ")</p>
              <p>message :</p>
              <p>" . $data[$end]['content'] . "</p>";
            echo "<a href='/?page=admin&btn=1'>plus de messages</a>";
        }
    }
    else {
        echo "Aucun message reçu";
    }
    ?>
</section>
