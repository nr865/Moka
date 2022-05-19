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
    <!-- Navigation bar -->	
	<nav class="navbar navbar-expand-md fixed-top navbar-dark bg-dark">
		<a class="navbar-brand text-uppercase fs-4">Moka</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mobile-menu" aria-controls="mobile-menu" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mobile-menu">
			<ul class="navbar-nav">
				<li class="dropdown">
					<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#">Nos produit</a>
					<div class="dropdown-menu">
						<a class="dropdown-item" href="/grain">Café moulu</a>
						<a class="dropdown-item" href="/poudre">Café dosette</a>
						<a class="dropdown-item" href="/soluble">Café capsule</a>
						<a class="dropdown-item" href="/dossette">Café en grains</a>
					</div>
				</li>
				<li><a class="nav-link" href="/contact">Nous contacter</a></li>				
			</ul>
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