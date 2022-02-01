<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no">
        <title>Sylvie Bataille</title>
        <link rel="stylesheet" href="/style.css">
    </head>
    <body>
        <header>
            <h1>Sylvie Bataille</h1>
            <div id="info">
            <?php

            if (isset($_GET['s']) && $_GET['s'] === '0') {
                echo "<p>Vous n'étes pas connecté</p>";
            }
            elseif (isset($_SESSION['status'])){
                switch ($_SESSION['status']){
                    case "admin" :
                        echo "<p>Vous étes connecté en tant qu'administrateur</p>";
                        echo "<a href='/checkStatus.php/?co=0'>Déconnexion</a>";
                        break;
                    case "errorPass" :
                        echo "erreur de mot de passe";
                        break;
                    case "deco" :
                        echo "<p>Vous étes déconnecté</p>";
                        $_SESSION = [];
                        $param = session_get_cookie_params();
                        setcookie(session_name(), '', time() - 36000, $param["path"], $param["domain"], $param["secure"], $param["httponly"]);
                        session_destroy();
                       break;
                }
            }?>
            </div>
            <?php getPart('menu') ?>
        </header>
