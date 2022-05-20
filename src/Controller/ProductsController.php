<?php
require_once __DIR__.'../../Repository/ProductsRepository.php';
require_once __DIR__.'../../Entity/Products.php';

class ProductsController{

    public function insert()
    {
        if(!empty($_POST)){
            // instancier l'entité avis

            $entity = new Products();
            $entity->setContent(htmlspecialchars(strip_tags($_POST['avis'])));

            //insertion en bdd
            $avisRepository = new ProductsRepository();
            $success = $avisRepository->add($entity);
        }
        require_once  __DIR__.'../../../templates/index.php';
    }

    public function contact(){
        require_once __DIR__.'../../../templates/contact.php';
    }
    public function list(){
        $avisRepository = new ProductsRepository();
        $liste = $avisRepository->show();
        require_once __DIR__.'../../../templates/liste_avis.php';
    
    foreach($productslist as $product) {

    $productlist = $productrepository->show($_GET('image'));
    $productlist = $productlist->show($_GET('name'));

    

    }


    }
    public function deleteAvis(){
        $avisRepository = new ProductsRepository();
        $delete = $avisRepository->delete($_GET['id']);
        header('Location:/liste?delete='.$_GET['id']);
    }
    public function edit(){
        $avisRepository = new ProductsRepository();
        $avisAEditer = $avisRepository->showId($_GET['id']);

        if(!empty($_POST)){
            $avisAEditer->setContent(htmlspecialchars(strip_tags($_POST['content'])));
            $success = $avisRepository->update($avisAEditer);
            header('Location:/liste?edit='.$_GET['id']);
        }

        require_once __DIR__.'../../../templates/edit.php';
    }

}