<?php
require_once 'Db.php';
require_once __DIR__.'../../Entity/Clients.php';

// contient toutes les requêtes de la table product
class ClientsRepository extends Db{

    public function add(Clients $client){
        
        $query = $this->getDb()->prepare('INSERT INTO clients (first_name, last_name, address, zip_code, town, mail, phone) VALUES (:first_name, :last_name, :address, :zip_code, :town, :mail, :phone)');
        $query->bindValue(':first_name', $client->getFirst_name())
            ->bindValue(':last_name', $client->getLast_name())
            ->bindValue(':address', $client->getAddress())
            ->bindValue(':zip_code', $client->getZip_code())
            ->bindValue(':town', $client->getTown())
            ->bindValue(':mail', $client->getMail())
            ->bindValue(':phone', $client->getPhone());
        

        // on retourne l'exécution, si l'insertion fonctionne ça renvoie true sinon false
        return $query->execute();
    }
    
}