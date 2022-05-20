<?php

require_once __DIR__.'../../Repository/ClientsRepository.php';
require_once __DIR__.'../../Entity/Clients.php';

class ClientsController{
    
    public function contact()
    { 
        // var_dump($_POST);       

        if(!empty($_POST))
        { 
            // instancier l'entité client

            $entity = (new Clients())                  
                ->setLast_name(htmlspecialchars(strip_tags($_POST['lastName']))) 
                ->setFirst_name(htmlspecialchars(strip_tags($_POST['firstName'])))
                ->setAddress(htmlspecialchars(strip_tags($_POST['address'])))
                ->setZip_code(htmlspecialchars(strip_tags($_POST['zipCode'])))
                ->setTown(htmlspecialchars(strip_tags($_POST['town'])))
                ->setPhone(htmlspecialchars(strip_tags($_POST['phone'])));

            //insertion en bdd
            $clientsRepository = new ClientsRepository();
            $success = $clientsRepository->add($entity);
        }
        require_once  __DIR__.'../../../templates/contact.php';
    }
    
}