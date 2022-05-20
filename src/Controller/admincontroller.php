<?php
require_once __DIR__.'../../Repository/ProductsRepository.php';
require_once __DIR__.'../../Entity/Products.php';


class AdminController{
        // public function insert()
    // { 
    //     var_dump($_POST);
    //     var_dump($_FILES);

    //     if(!empty($_POST)){ 
    //         // instancier l'entité avis

    //         $entity = (new Products())
    //             ->setSupplier_id('1') // Invalide -> methode $_POST à adapter
    //             ->setCategory_id('1') // Invalide -> methode $_POST à adapter
    //             ->setQuantity_id('2') // Invalide -> methode $_POST à adapter
    //             ->setType_id('2') // Invalide -> methode $_POST à adapter
    //             ->setName(htmlspecialchars(strip_tags($_POST['productName'])))
    //             ->setDescription(htmlspecialchars(strip_tags($_POST['productDescription'])))
    //             ->setImage(htmlspecialchars($_FILES['productImage']['name']))
    //             ->setPrice(htmlspecialchars(strip_tags($_POST['productPrice'])));

    //         //insertion en bdd
    //         $ProductRepository = new ProductsRepository();
    //         $success = $ProductRepository->add($entity);
    //     }
    //     require_once  __DIR__.'../../../templates/add.php';
    // }
    public function deleteProduct(){
        $ProductRepository = new ProductsRepository();
        $delete = $ProductRepository->delete($_GET['id']);
        header('Location:/list?delete='.$_GET['id']);
    }
    public function listAdmin(){
        $ProductRepository = new ProductsRepository();
        $productsList = $ProductRepository->showAdmin();
        require_once __DIR__.'../../../templates/admin.php';
    }
        // public function edit(){
    //     $ProductRepository = new ProductsRepository();
    //     $editThisProduct = $ProductRepository->showWhitId($_GET['id']);

    //     if(!empty($_POST)){
    //         $editThisProduct->setSupplier_id(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
    //             ->setCategory_id(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
    //             ->setQuantity_id(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
    //             ->setType_id(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
    //             ->setName(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
    //             ->setDescription(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
    //             ->setImage(htmlspecialchars(strip_tags($_POST['content']))) // Invalide -> methode $_POST à adapter
    //             ->setPrice(htmlspecialchars(strip_tags($_POST['content']))); // Invalide -> methode $_POST à adapter
    //         $success = $ProductRepository->update($editThisProduct);
    //         header('Location:/list?edit='.$_GET['id']);
    //     }

    //     require_once __DIR__.'../../../templates/edit.php';
    // }
}