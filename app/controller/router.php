<?php

include '../model/config.php';
require_once 'Controller.php';

// récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire une table de hachage (clé + valeur)
parse_str($query_string, $param);

// $action contient le nom de la méthode statique recherchée
$action = $param["action"];

if(isset($_POST['action'])) {
    $action = $_POST['action'];
}

switch ($action) {
    case "home" :
    case "signin":
    case "signinAction":
    case "signout":
    case "signup":
    case "signupAction":
    case "myProfile":
    case "updateUserInfo":
    case "adminSites":
    case "addSite":
    case "delSite":
        break;

    default:
        $action = "home";
}

echo ("Router : env = $env");
// appel de la méthode statique $action de ControllerVin2
Controller::$action();
