<?php
if(isset($_POST["connection"], $_POST['password'])){
    if($_POST['password'] === "test"){
        $_SESSION['status'] = "admin";
        header('Location: /?page=admin');
    }
    else {
        $_SESSION['status'] = "errorPass";
    }
}

if(isset($_GET['co']) && $_GET['co'] === '0'){
    $_SESSION['status'] = "deco";
    header('Location: /');
}

