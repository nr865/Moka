<?php
require_once '../src/Controller/ProductsController.php';
require_once '../src/Controller/ErrorController.php';

switch ($uri){
    //Accueil
    case '/':
        $controller = new ProductsController();
        $controller ->insert();
        break;

    case '/contact';
        $controller = new ProductsController();
        $controller ->contact();
        break;

    case '/list';
        $controller = new ProductsController();
        $controller ->list();
        break;

    case '/delete';
        $controller = new ProductsController();
        $controller ->deleteProduct();
        break;

    case '/edit';
        $controller = new ProductsController();
        $controller ->edit();
        break;
        
    default:
    $controller = new ErrorController();
    $controller->notFound();
}