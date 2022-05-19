<?php
require_once 'Db.php';
require_once __DIR__.'../../Entity/Quantities.php';

// contient toutes les requêtes de la table quantities
class QuantitiesRepository extends Db{

    public function show(){
        $query = $this->getDb()->query('SELECT * FROM quantities');
        $allQuantities = $query->fetchAll();
        foreach($allQuantities as $quantity){
            $quantityObject = (new Quantities())
                ->setId($quantity['id'])
                ->setName($quantity['name']);

            // stocke chaque objet avis dans un tableau
            $objects[] = $quantityObject;
        }
        return $objects ?? [];
    }

    public function showWhitId($id){
        $query = $this->getDb()->prepare('SELECT * FROM categories WHERE id=:id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $quantity = $query->fetch();
        if($quantity){
            $quantityObject = (new Quantities())
                ->setId($quantity['id'])
                ->setName($quantity['name']);
            
            $objects[] = $quantityObject;
        }
        return $quantityObject ?? false;
    }

}