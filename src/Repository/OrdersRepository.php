<?php
require_once 'Db.php';
require_once __DIR__.'../../Entity/Orders.php';

// contient toutes les requêtes de la table product
class OrdersRepository extends Db{

    public function add(Entity\Orders $order){
        
        $query = $this->getDb()->prepare('INSERT INTO orders (product_id, client_id, order_date, quantity) VALUES (:product_id, :client_id, NOW(), :quantity)');
        $query->bindValue(':product_id', $order->getProduct_id(), PDO::PARAM_INIT)
            ->bindValue(':client_id', $order->getClient_id(), PDO::PARAM_INIT)
            ->bindValue(':order_date', $order->getOrder_date())
            ->bindValue(':quantity', $order->getQuantity(), PDO::PARAM_INIT);        

        // on retourne l'exécution, si l'insertion fonctionne ça renvoie true sinon false
        return $query->execute();
    }
    
}