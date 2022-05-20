<?php
require_once '../src/Controller/ProductsController.php';
require_once '../src/Controller/ErrorController.php';
require_once '../src/Controller/ClientsController.php';
require_once '../src/Controller/OrdersController.php';


switch ($uri){
    //Accueil
    case '/':
        $controller = new ProductsController();
        $controller ->list();
        break;
    // case '/add':
    //     $controller = new ProductsController();
    //     $controller ->insert();
    //     break;

    case '/contact';
        $controller = new ClientsController();
        $controller ->contact();
        break;
        
    case '/order';
        $controller = new OrdersController();
        $controller ->order();
        break;

    case '/admin';
        $controller = new AdminController();
        $controller ->listAdmin();
        break;

    case '/admin/delete';
        $controller = new AdminController();
        $controller ->deleteProduct();
        break;

    // case '/edit';
    //     $controller = new ProductsController();
    //     $controller ->edit();
    //     break;
        
    default:
    $controller = new ErrorController();
    $controller->notFound();
}