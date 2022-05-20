<?php
require_once __DIR__.'../../Repository/ProductsRepository.php';
require_once __DIR__.'../../Repository/CategoriesRepository.php';
require_once __DIR__.'../../Repository/SuppliersRepository.php';
require_once __DIR__.'../../Repository/TypesRepository.php';
require_once __DIR__.'../../Repository/QuantitiesRepository.php';
require_once __DIR__.'../../Entity/Products.php';
require_once __DIR__.'../../Fonctions/fonctions_img.php';


class AdminController{

    public function listAdmin(){
        $ProductRepository = new ProductsRepository();
        $productsList = $ProductRepository->show();
        require_once __DIR__.'../../../templates/admin.php';
    }

        public function insert()
    { 
        $error = null;

        $CategoriesRepository = new CategoriesRepository;
        $categories = $CategoriesRepository->show();

        $SuppliersRepository = new SuppliersRepository;
        $suppliers = $SuppliersRepository->show();

        $TypesRepository = new TypesRepository;
        $types = $TypesRepository->show();

        $QuantitiesRepository = new QuantitiesRepository;
        $quantities = $QuantitiesRepository->show();

        if(!empty($_POST)){ 
            $suppliers = htmlspecialchars(strip_tags($_POST['suppliers']));
            $categories = htmlspecialchars(strip_tags($_POST['categories']));
            $quantities = htmlspecialchars(strip_tags($_POST['quantities']));
            $types = htmlspecialchars(strip_tags($_POST['types']));
            $name = htmlspecialchars(strip_tags($_POST['productName']));
            $description = htmlspecialchars(strip_tags($_POST['productDescription']));
            $image = htmlspecialchars(strip_tags($_FILES['productImage']['name']));
            $price = htmlspecialchars(strip_tags($_POST['productPrice']));



                echo "<pre>";
                print_r($_FILES['productImage']);
                echo "</pre>";

                if(!empty($_FILES['productImage'])&& $_FILES['productImage']['error']===0){
                    
                    $upload = uploadPicture($_FILES['productImage'], '../public/images/products-imgs', 1);
                   
                    $cover = $upload['filename'];
                    createThumb( "../public/images/products-imgs/$cover", // Source de l'image
                    "../public/images/miniatures/min_$cover", // Destination de la miniature
                    200);

                    $entity = (new Products())
                    ->setSupplier_id($suppliers) 
                    ->setCategory_id($categories) 
                    ->setQuantity_id($quantities) 
                    ->setType_id($types) 
                    ->setName($name)
                    ->setDescription($description)
                    ->setImage($image)
                    ->setPrice($price);

                    //insertion en bdd
                    $ProductRepository = new ProductsRepository();
                    $success = $ProductRepository->add($entity);

                    if(!empty($upload['error'])){
                        $error = $upload['error'];
                    }
                }


        }
        require_once  __DIR__.'../../../templates/add.php';
    }

    public function deleteProduct(){
        $ProductRepository = new ProductsRepository();
        $delete = $ProductRepository->delete($_GET['id']);
        header('Location:/admin?delete='.$_GET['id']);
    }

        public function edit(){
        $error = null;

        $CategoriesRepository = new CategoriesRepository;
        $ProductsRepository = new ProductsRepository;
        $categories = $CategoriesRepository->show();

        $SuppliersRepository = new SuppliersRepository;
        $suppliers = $SuppliersRepository->show();

        $TypesRepository = new TypesRepository;
        $types = $TypesRepository->show();

        $QuantitiesRepository = new QuantitiesRepository;
        $quantities = $QuantitiesRepository->show(); 


        $ProductRepository = new ProductsRepository();
        $editThisProduct = $ProductRepository->showWhitId($_GET['id']);


        if(!empty($_POST)){
            $suppliers = htmlspecialchars(strip_tags($_POST['suppliers']));
            $categories = htmlspecialchars(strip_tags($_POST['categories']));
            $quantities = htmlspecialchars(strip_tags($_POST['quantities']));
            $types = htmlspecialchars(strip_tags($_POST['types']));
            $name = htmlspecialchars(strip_tags($_POST['productName']));
            $description = htmlspecialchars(strip_tags($_POST['productDescription']));
            $image = htmlspecialchars(strip_tags($_FILES['productImage']['name']));
            $price = htmlspecialchars(strip_tags($_POST['productPrice']));
        
            echo "<pre>";
            print_r($_FILES);
            echo "</pre>";
            if(!empty($suppliers) && !empty($categories) && !empty($quantities)
            && !empty($types) && !empty($name) && !empty($description) && !empty($price)){

                if(!empty($_FILES['productImage'])&& $_FILES['productImage']['error']===0){
                    $upload = uploadPicture($_FILES['productImage'], '../Images/upload', 1);
                   
                    $cover = $upload['filename'];
                    createThumb( "../../public/images/products-imgs/$cover", // Source de l'image
                    "../../public/images/miniatures/min_$cover", // Destination de la miniature
                    200);
                    if(!empty($upload['error'])){
                        $error = $upload['error'];
                    }
                }
                if($error === null){
                    $editThisProduct->setSupplier_id($suppliers);
                    $editThisProduct->setCategory_id($categories) ;
                    $editThisProduct->setQuantity_id($quantities) ;
                    $editThisProduct->setType_id($types) ;
                    $editThisProduct->setName($name);
                    $editThisProduct->setDescription($description); 
                    $editThisProduct->setImage($image); 
                    $editThisProduct->setPrice($price); 
                    $success = $ProductRepository->update($editThisProduct);
                    // header('Location:/admin?edit='.$_GET['id']);
                }
            }
            else{
                $error = "Tous les champs sont obligatoires sauf l'image.";
            }
            }

        require_once __DIR__.'../../../templates/edit.php';
    }
    
}