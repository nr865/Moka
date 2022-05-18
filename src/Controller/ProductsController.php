<?php
require_once __DIR__.'../../Repository/ProductsRepository.php';
require_once __DIR__.'../../Entity/Products.php';

class ProductsController{

    public function insert()
    {
        if(!empty($_POST)){ 
            // instancier l'entité avis

            $entity = (new Products())
                ->setSupplier_id(htmlspecialchars(strip_tags($_POST['avis']))) // Invalide -> methode $_POST à adapter
                ->setCategory_id(htmlspecialchars(strip_tags($_POST['avis']))) // Invalide -> methode $_POST à adapter
                ->setName(htmlspecialchars(strip_tags($_POST['avis']))) // Invalide -> methode $_POST à adapter
                ->setDescription(htmlspecialchars(strip_tags($_POST['avis']))) // Invalide -> methode $_POST à adapter
                ->setImage(htmlspecialchars(strip_tags($_POST['avis']))) // Invalide -> methode $_POST à adapter
                ->setPrice(htmlspecialchars(strip_tags($_POST['avis']))); // Invalide -> methode $_POST à adapter

            //insertion en bdd
            $ProductRepository = new ProductsRepository();
            $success = $ProductRepository->add($entity);
        }
        require_once  __DIR__.'../../../templates/index.php';
    }

    public function contact(){
        require_once __DIR__.'../../../templates/contact.php';
    }
    public function liste(){
        $ProductRepository = new ProductsRepository();
        $liste = $ProductRepository->show();
        require_once __DIR__.'../../../templates/liste_products.php';
    }
    public function deleteProduct(){
        $ProductRepository = new ProductsRepository();
        $delete = $ProductRepository->delete($_GET['id']);
        header('Location:/liste?delete='.$_GET['id']);
    }
    public function edit(){
        $ProductRepository = new ProductsRepository();
        $editThisProduct = $ProductRepository->showWithId($_GET['id']);

        if(!empty($_POST)){
            $editThisProduct->setSupplier_id(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
                ->setCategory_id(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
                ->setName(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
                ->setDescription(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
                ->setImage(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
                ->setPrice(htmlspecialchars(strip_tags($_POST['content']))); // Invalide -> methode $_POST à adapter
            $success = $ProductRepository->update($editThisProduct);
            header('Location:/liste?edit='.$_GET['id']);
        }

        require_once __DIR__.'../../../templates/edit.php';
    }

}