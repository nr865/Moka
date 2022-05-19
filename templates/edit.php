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
						<a class="dropdown-item" href="/grain">Café en grain</a>
						<a class="dropdown-item" href="/poudre">Café en poudre</a>
						<a class="dropdown-item" href="/soluble">Café en soluble</a>
						<a class="dropdown-item" href="/dossette">Café en dossette</a>
					</div>
				</li>
				<li><a class="nav-link" href="/contact">Nous contacter</a></li>				
			</ul>
		</div>
	</nav>

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