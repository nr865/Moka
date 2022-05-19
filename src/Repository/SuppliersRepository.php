<?php
require_once 'Db.php';
require_once __DIR__.'../../Entity/Suppliers.php';

// contient toutes les requêtes de la table suppliers
class SuppliersRepository extends Db{

    public function show(){
        $query = $this->getDb()->query('SELECT * FROM suppliers');
        $allSuppliers = $query->fetchAll();
        foreach($allSuppliers as $supplier){
            $supplierObject = (new Suppliers())
                ->setId($supplier['id'])
                ->setName($supplier['name']);

            // stocke chaque objet supplier dans un tableau
            $objects[] = $supplierObject;
        }
        return $objects ?? [];
    }

    public function showWhitId($id){
        $query = $this->getDb()->prepare('SELECT * FROM suppliers WHERE id=:id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $supplier = $query->fetch();
        if($supplier){
            $supplierObject = (new Suppliers())
                ->setId($supplier['id'])
                ->setName($supplier['name']);
            
            $objects[] = $supplierObject;
        }
        return $supplierObject ?? false;
    }

}