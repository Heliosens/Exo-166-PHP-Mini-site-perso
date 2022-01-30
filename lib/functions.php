<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent() {
	if(!isset($_GET['page']) || (isset($_GET['page']) && $_GET['page'] == "home")){
		include __DIR__.'/../pages/home.php';
	}
	elseif(isset($_GET['page']) && $_GET['page'] == "bio") {

        include __DIR__.'/../pages/bio.php';
    }
	elseif(isset($_GET['page']) && $_GET['page'] == "contact") {

        include __DIR__.'/../pages/contact.php';
    }
    elseif(isset($_GET['page']) && $_GET['page'] == "admin") {

        include __DIR__.'/../pages/admin.php';
    }
	elseif (isset($_GET['page']) && $_GET['page'] == "checkStatus"){
	    include __DIR__.'/../pages/checkStatus.php';
    }
}

function getPart($name) {
	include __DIR__ . '/../parts/'. $name . '.php';
}

function getUserData () {
    return json_decode(file_get_contents("../data/user.json"), true);
}

