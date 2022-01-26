<?php
$json = getUserData();
?>
<section>
    <h1>BIO</h1>
    <h2><?=$json["name"]?> <?=$json['first_name']?></h2>
</section>
<section>
    <div>
        <p>Aujourd'hui je suis :</p>
        <p><strong><?=$json["occupation"]?></strong></p>
        <p>Mon parcours :</p>
        <div>
            <?php
            foreach ($json['experiences'] as $exp){
                echo "<p><strong>$exp[year]</strong> : $exp[company]</p>";
            }
            ?>
        </div>
    </div>
</section>