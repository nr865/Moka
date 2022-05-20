<?php require_once 'header.php' ?>

<!-- Contenu -->
<main class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="col-6 d-flex text-start">
                    <h2 class="fs-3 text-danger">Ajouter un produit</h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="/admin" class="btn btn-outline-success my-auto">Liste des des poduits</a>
                </div>
            </div>
            <div class="col-12 d-block border-bottom my-3"></div>
            <?php

                if(isset($success) && $success) {
                    $messageSuccess =   '<div class="col-12">
                                            <div class="col-4 d-flex justify-content-center my-3 mx-auto alert alert-success" role="alert">
                                                Produit ajouté avec succès !
                                            </div>
                                        </div>';
                    echo $messageSuccess;
                }
                elseif(isset($success)) {
                    $messageError = '<div class="col-12">
                                        <div class="col-4 d-flex justify-content-center my-5 mx-auto alert alert-danger" role="alert">
                                            Erreur, veuillez recommencer.
                                        </div>
                                    </div>';
                    echo $messageError;
                }     

            ?>
            <div class="col-12 col-lg-4 m-auto">
                <form method="post" enctype="multipart/form-data">
                    <div class="pb-3">
                        <div class="pb-1">
                            <label class="form-label mb-1" for="productName">Nom du produit</label>
                            <input type="text" class="form-control" id="productName" placeholder="Nom du produit" name="productName" value="<?=  $editThisProduct->getName() ?>">
                            
                            <label class="form-label my-1" for="productDescription">Description</label>
                            <textarea class="form-control" id="productDescription" rows="6" name="productDescription"><?=  $editThisProduct->getDescription() ?></textarea>
                           
                            <label for="categories" class="form-label my-1">Catégorie</label>
                            <select name="categories" id="categories" class="form-control">
                                <?php foreach($categories as $category): ?>
                                    <option value="<?=  $category->getId() ?>"><?=  $category->getName() ?> </option>
                                <?php endforeach; ?>
                            </select>

                            <label for="suppliers" class="form-label my-1">Fournisseur</label>
                            <select name="suppliers" id="suppliers" class="form-control">

                                <?php foreach($suppliers as $supplier): ?>
                                    <option value="<?=  $supplier->getId() ?>"><?=  $supplier->getName() ?></option>
                                <?php endforeach; ?>
                            </select>

                            <label for="types" class="form-label my-1">Type</label>
                            <select name="types" id="types" class="form-control">
      
                                <?php foreach($types as $type): ?>
                                    <option value="<?=  $type->getId() ?>"><?=  $type->getName() ?></option>
                                <?php endforeach; ?>
                            </select>

                            <label for="quantities" class="form-label my-1">Quantité</label>
                            <select name="quantities" id="quantities" class="form-control">
         
                                <?php foreach($quantities as $quantity): ?>
                                    <option value="<?=  $quantity->getId() ?>"><?=  $quantity->getName() ?></option>
                                <?php endforeach; ?>
                            </select>

                            <label class="form-label my-1" for="productPrice">Prix</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="Prix" name="productPrice"  value="<?=  $editThisProduct->getPrice() ?>">

                            <label for="formFile" class="form-label my-1">Image du produit</label>
                            <input class="form-control" type="file" id="formFile" name="productImage">
                        </div>
                    <button type="submit" class="btn btn-outline-success mb-4 mt-2 w-100">Envoyer</button>
                </form>
            </div>
        </div>
    </div>
</main>
 
</body>
</html>