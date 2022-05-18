<?php
require_once '../src/Controller/AvisController.php';
require_once '../src/Controller/ErrorController.php';

switch ($uri){
    //Accueil
    case '/':
        $controller = new AvisController();
        $controller ->insert();
        break;
    case '/contact';
        $controller = new AvisController();
        $controller ->contact();
        break;
    case '/liste';
        $controller = new AvisController();
        $controller ->liste();
        break;
    case '/delete';
        $controller = new AvisController();
        $controller ->deleteAvis();
        break;
    case '/edit';
        $controller = new AvisController();
        $controller ->edit();
        break;
    default:
    $controller = new ErrorController();
    $controller->notFound();
}