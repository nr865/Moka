<?php
require_once '../src/Controller/ProductsController.php';
require_once '../src/Controller/AdminController.php';
require_once '../src/Controller/ErrorController.php';
require_once '../src/Controller/ContactController.php';



switch ($uri){
    //Accueil
    case '/':
        $controller = new ProductsController();
        $controller ->list();
        break;
    
    case '/admin/add':
        $controller = new AdminController();
        $controller ->insert();
        break;

    case '/contact';
        $controller = new ContactController();
        $controller ->contact();
        break;

    case '/admin';
        $controller = new AdminController();
        $controller ->listAdmin();
        break;

    case '/admin/delete';
        $controller = new AdminController();
        $controller ->deleteProduct();
        break;

    case '/admin/edit';
        $controller = new AdminController();
        $controller ->edit();
        break;

    // case '/edit';
    //     $controller = new ProductsController();
    //     $controller ->edit();
    //     break;
        
    default:
    $controller = new ErrorController();
    $controller->notFound();
}