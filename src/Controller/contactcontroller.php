<?php
class ContactController{
    public function contact()
    {
    /* if(!empty($_POST)) {
    
    $entity = new Entity\Avis();
    $entity->setContent(htmlspecialchars(strip_tags($_POST['avis'])));   

    $avisRepository = new AvisRepository();
    $success = $avisRepository->add($entity);
     
    

} */

    require_once __DIR__.'../../../templates/contact.php';
    
    }
}