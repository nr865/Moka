<?php
require_once 'Db.php';
require_once __DIR__.'../../Entity/Products.php';

// contient toutes les requêtes de la table avis
class ProductsRepository extends Db{

    public function add(Products $avis){
        try {
            $query = $this->getDb()->prepare('INSERT INTO avis (content) VALUES (:content)');
            $query->bindValue(':content',$avis->getContent());
        } catch (Exception $e) {
            die("Erreur lors de l'insertion:{$e->getMessage()}");
        }

        // on retourne l'exécution, si l'insertion fonctionne ça renvoie true sinon false
        return $query->execute();
    }

    public function show(){
        $query = $this->getDb()->query('SELECT * FROM avis');
        $allAvis = $query->fetchAll();
        foreach($allAvis as $avis){
            $avisObject = new Products();
            $avisObject->setContent($avis['content']);
            $avisObject->setId($avis['id']);

            // stocke chaque objet avis dans un tableau
            $objects[] = $avisObject;
        }
        return $objects ?? [];
    }
    public function delete($id){
        try {
            $query = $this->getDb()->prepare('DELETE FROM avis WHERE id=:id');
            $query->bindValue(':id', $id, PDO::PARAM_INT);
        } catch (Exception $e) {
            die("Erreur lors de la suppression:{$e->getMessage()}");
        }
        return $query->execute();
    }
    public function showId($id){
        $query = $this->getDb()->prepare('SELECT * FROM avis WHERE id=:id');
        $query->bindValue(':id', $id, PDO::PARAM_INT);
        $query->execute();
        $avis = $query->fetch();
        if($avis){
            $avisObject = (new Products())
            ->setContent($avis['content'])
            ->setId($avis['id']);
        }
        return $avisObject ?? false;
    }
 
    public function update($avis){
        try {
            $query = $this->getDb()->prepare('UPDATE avis SET content=:content WHERE id=:id');
            $query->bindValue(':id', $avis->getId(), PDO::PARAM_INT);
            $query->bindValue(':content', $avis->getContent());
        } catch (Exception $e) {
            die("Erreur lors de l'édition':{$e->getMessage()}");
        }
        return $query->execute();
    }
}