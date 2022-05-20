<?php

require_once __DIR__.'../../Repository/OrdersRepository.php';
require_once __DIR__.'../../Repository/ClientsRepository.php';
require_once __DIR__.'../../Repository/ProductsRepository.php';
require_once __DIR__.'../../Entity/Orders.php';
require_once __DIR__.'../../Entity/Clients.php';
require_once __DIR__.'../../Entity/Products.php';

class OrdersController{
    
    public function order()
    { 
        // var_dump($_POST);       

        if(!empty($_POST))
        { 
            // instancier l'entité client

            $entity = (new Entity\Orders())  
                ->setOrdersId(htmlspecialchars('id')) 
                ->setOrdersProduct_id('product_id') 
                ->setOrdersClient_id('client_id')
                ->setOrders_date('order_date')
                ->setOrdersQuantity(htmlspecialchars(strip_tags($_POST['quantity'])));                

            //insertion en bdd
            $ordersRepository = new OrdersRepository();
            $success = $ordersRepository->add($entity);
        }
        require_once  __DIR__.'../../../templates/order.php';
    }
    
}