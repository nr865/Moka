<?php
require_once 'Db.php';
require_once __DIR__.'../../Entity/Categories.php';

// contient toutes les requêtes de la table categories
class CategoriesRepository extends Db{

    public function show(){
        $query = $this->getDb()->query('SELECT * FROM categories');
        $allPCategories = $query->fetchAll();
        foreach($allPCategories as $category){
            $categoryObject = (new Categories())
                ->setId($category['id'])
                ->setName($category['name']);

            // stocke chaque objet avis dans un tableau
            $objects[] = $categoryObject;
        }
        return $objects ?? [];
    }

    public function showWhitId($id){
        $query = $this->getDb()->prepare('SELECT * FROM categories WHERE id=:id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $category = $query->fetch();
        if($category){
            $categoryObject = (new Products())
                ->setId($category['id'])
                ->setName($category['name']);
            
            $objects[] = $categoryObject;
        }
        return $productObject ?? false;
    }

}