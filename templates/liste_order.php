<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste avis</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
</head>
<body>
    <!-- Barre de navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-dark">
        <div class="container-fluid">
          <a class="navbar-brand text-secondary font-weight-bold text-uppercase px-3" href="#">Moka</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" aria-current="page" href="/">Accueil</a>
              </li>
              <li class="nav-item">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3" href="/contact">Contact</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link text-light font-weight-bold text-uppercase px-3 dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Nos produits
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
					<a class="dropdown-item" href="/category">Café moulu</a>
					<a class="dropdown-item" href="/category">Café dossette</a>
					<a class="dropdown-item" href="/category">Café capsule</a>
					<a class="dropdown-item" href="/category">Café en grain</a>
                </ul>
              </li>
          </div>
        </div>
    </nav>

    <main class="w-50 mx-auto py-5">
        <h1>Liste des commandes</h1>

        <!-- Message de confirmation de suppression -->
        <?php if(isset($_GET['delete']) && $_GET['delete']): ?>
            <div class="alert alert success mt-5">
                <span class="text-danger fs-4">La suppression à bien été effectuée</span>
            </div>
        <?php endif; ?>

        <?php if(isset($_GET['edit']) && $_GET['edit']): ?>
            <div class="alert alert-success mt-5">
                L'édition à bien été effectuée
            </div>
        <?php endif; ?>
            
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Image</th>
                    <th scope="col">Client</th>
                    <th scope="col">Product</th>
                    <th scope="col">Quantité</th>
                    <th scope="col">Price unité</th>
                    <th scope="col">Total Price</th>
                    <th scope="col">Date de commande</th>
                    <th colspan="2">Validation</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($productsList as $product): ?>
                    <tr>
                        <th scope="row"><?php echo $product->getImage(); ?></th>
                        <td><?php echo $product->getLast_name(); ?> </td>
                        <td><?php echo $product->getName(); ?> </td>
                        <td><?php echo $product->getQuantity(); ?> </td>
                        <td><?php echo $product->getPrice(); ?> </td>
                        <td><?php echo $product->getPrice() * $product->getQuantity(); ?> </td>
                        <td><?php echo $product->getOrder_date(); ?> </td>
                        <td>
                            <!-- http://moka.test/delete/list?id=1 -->
                            <a href="/delete/list?id=<?php echo $product->getId(); ?>" class="btn btn-outline-danger">Supprimer</a> 
                        </td>
                        <td>
                            <!-- http://moka.test/edit/list?id=1 -->
                            <a href="/edit/list?id=<?php echo $product->getId(); ?>" class="btn btn-outline-success">Editer</a> 
                        </td>
                    </tr>      
                <?php endforeach; ?>  
            </tbody>
        </table>

        <!-- Footer -->
        <footer class="footer p-2">
            <div class="container-md">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <p class="text-secondary">&#169; Moka 2022</p>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <ul class="nav justify-content-end">
                            <li class="nav-item"><a class="nav-link active" href="/liste_order">Admin</a></li>
                            <li class="nav-item"><a class="nav-link" href="/livraison">Livrasion</a></li>
                            <li class="nav-item"><a class="nav-link" href="/cgv">Conditions General de Vente</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </main>
</body>
</html>