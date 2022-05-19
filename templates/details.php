<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edition d'avis</title>

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
	
	<main class="container pt-5">
		<div class="pb-4">
			
			
		</div>    
		<h2 class="fs-4 mb-3 category-name"></h2>

		<!-- Chargement en cours... -->
		<div class="text-center spinner-article py-5">
			<div class="spinner-border text-warning" role="status">
				<span class="visually-hidden">Loading...</span>
			</div>
		</div>
			
		<!-- Error fetch() -->            
		<div id="error" class="alert alert-danger d-none">
			<div class="row">
				
			</div>

		</div>
			
		<!-- Détail d'un article -->
		<div class="row">
			<div class="col-4">
				<img src="../public/images/italien_cafe.jpg" alt="details" id="details">
			</div>
			<div class="col-6">
				<h2>Nom du produit</h2>
				<p>Prix : €</p>
				<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus exercitationem maiores rerum sed autem unde quisquam ut id repellat sint, debitis repellendus inventore magnam veritatis nostrum, ipsa cum. Magnam, ut!</p>
			</div>			
		</div>        
	</main>

	<!-- Footer -->
    <footer class="footer p-2">
		<div class="container-md">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<p class="text-secondary">&#169; Moka 2022</p>
				</div>
				<div class="col-md-8 col-sm-12">
					<ul class="nav justify-content-end">
						<li class="nav-item"><a class="nav-link active" href="/admin">Admin</a></li>
						<li class="nav-item"><a class="nav-link" href="/livraison">Livrasion</a></li>
						<li class="nav-item"><a class="nav-link" href="/cgv">Conditions General de Vente</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>