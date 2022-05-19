
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moka</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Bootstrap 5.2.0 -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
</head>
<body>

<!-- Contenu -->
<main class="p-5">
    <div class="container">
        <div class="row">
            <div class="col-12 d-flex">
                <div class="col-6 d-flex text-start">
                    <h2 class="fs-3 text-danger">Ajouter un produit</h2>
                </div>
                <div class="col-6 d-flex justify-content-end">
                    <a href="/list" class="btn btn-outline-success my-auto">Liste des des poduits</a>
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
                            <input type="text" class="form-control" id="productName" placeholder="Nom du produit" name="productName">
                            
                            <label class="form-label my-1" for="productDescription">Déscription</label>
                            <textarea class="form-control" placeholder="Intégrez une déscription" id="productDescription" rows="6" name="productDescription"></textarea>
                            
                            <label class="form-label my-1" for="productPrice">Prix</label>
                            <input type="text" class="form-control" id="productPrice" placeholder="Prix" name="productPrice">

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