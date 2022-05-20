<?php
require_once __DIR__.'../../Repository/ProductsRepository.php';
require_once __DIR__.'../../Entity/Products.php';

class ProductsController{

    public function list(){
        $ProductRepository = new ProductsRepository();
        $productsList = $ProductRepository->show();
        require_once __DIR__.'../../../templates/index.php';
    }

    public function listByCategory(){
        $ProductRepository = new ProductsRepository();
        $productsList = $ProductRepository->showByCategoryId($_GET['id']);
        // require_once __DIR__.'../../../templates/list_products.php';
        header('Location:/list?category='.$_GET['id']);
    }
}