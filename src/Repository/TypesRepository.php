<?php
require_once 'Db.php';
require_once __DIR__.'../../Entity/Types.php';

// contient toutes les requêtes de la table types
class TypesRepository extends Db{

    public function show(){
        $query = $this->getDb()->query('SELECT * FROM types');
        $allTypes = $query->fetchAll();
        foreach($allTypes as $type){
            $typeObject = (new Types())
                ->setId($type['id'])
                ->setName($type['name']);

            // stocke chaque objet avis dans un tableau
            $objects[] = $typeObject;
        }
        return $objects ?? [];
    }

    public function showWhitId($id){
        $query = $this->getDb()->prepare('SELECT * FROM types WHERE id=:id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $type = $query->fetch();
        if($type){
            $typeObject = (new Types())
                ->setId($type['id'])
                ->setName($type['name']);
            
            $objects[] = $typeObject;
        }
        return $typeObject ?? false;
    }

}