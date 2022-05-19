
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avis</title>

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.1/js/bootstrap.min.js" integrity="sha384-XEerZL0cuoUbHE4nZReLT7nx9gQrQreJekYhJD9WNWhH8nEW+0c5qq7aIo2Wl30J" crossorigin="anonymous"></script>
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
						<a class="dropdown-item" href="/category">Café moulu</a>
						<a class="dropdown-item" href="/category">Café dossette</a>
						<a class="dropdown-item" href="/category">Café capsule</a>
						<a class="dropdown-item" href="/category">Café en grain</a>
					</div>
				</li>
				<li><a class="nav-link" href="/contact">Nous contacter</a></li>				
			</ul>
		</div>
	</nav>
	
	<!-- Prémière row -->
	<section class="products pt-5">
		<div class="container-md">
			<div class="row">
				<div class="col-lg-12 py-5">
					<h2>Robusta</h2>
					<div class="row">
						<div class="col-sm-6 col-lg-4">
							<div class="card text-center">
								<div class="card-image">
									<img src="../public/images/cafe_bio.jpg" class="card-img-top">
								</div>
								<div class="card-body">
									<h5 class="card-title">Café bio</h5>
									<h5 class="card-title">Prix : 10 €</h5>
									<a href="/details" class="btn btn-light">Details du produit</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="card text-center">
								<div class="card-image">
									<img src="../public/images/italien_cafe.jpg" class="card-img-top">
								</div>
								<div class="card-body">
									<h5 class="card-title">Café italien</h5>
									<h5 class="card-title">Prix : 8 €</h5>
									<a href="/detail" class="btn btn-light">Details du produit</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="card text-center">
								<div class="card-image">
									<img src="../public/images/vietnam_cafe.jpg" class="card-img-top">
								</div>
								<div class="card-body">
									<h5 class="card-title">Café vietnamien</h5>
									<h5 class="card-title">Prix : 11 €</h5>
									<a href="/details" class="btn btn-light">Details du produit</a>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Deuxième row -->
	<section class="products pt-5">
		<div class="container-md">
			<div class="row">
				<div class="col-lg-12 py-5">
					<h2>Robusta</h2>
					<div class="row">
						<div class="col-sm-6 col-lg-4">
							<div class="card text-center">
								<div class="card-image">
									<img src="../public/images/cafe_bio.jpg" class="card-img-top">
								</div>
								<div class="card-body">
									<h5 class="card-title">Café bio</h5>
									<h5 class="card-title">Prix : 10 €</h5>
									<a href="/panier" class="btn btn-light">Details du produit</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="card text-center">
								<div class="card-image">
									<img src="../public/images/italien_cafe.jpg" class="card-img-top">
								</div>
								<div class="card-body">
									<h5 class="card-title">Café italien</h5>
									<h5 class="card-title">Prix : 8 €</h5>
									<a href="/detail" class="btn btn-light">Details du produit</a>
								</div>
							</div>
						</div>
						<div class="col-sm-6 col-lg-4">
							<div class="card text-center">
								<div class="card-image">
									<img src="../public/images/vietnam_cafe.jpg" class="card-img-top">
								</div>
								<div class="card-body">
									<h5 class="card-title">Café vietnamien</h5>
									<h5 class="card-title">Prix : 11 €</h5>
									<a href="/details" class="btn btn-light">Details du produit</a>
								</div>
							</div>
						</div>						
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<section class="shipping pt-5">
		<div class="container-md">
			<div class="row">
				<!-- 1 of 3 -->
				<div class="col-md-4 col-sm-12">					
					<div class="card p-3 mb-3 text-center">
						<div class="row">
							<div class="col-md-2 d-none d-lg-flex">
								<div class="card-image">
									<i class="fas fa-truck pt-4 pl-3"></i>
								</div>
							</div>
							<div class="col-md-8">
								<div class="card-body text-secondary">
									<h3 class="card-title text-secondary">Free shipping</h3>
									<p>à partir de 25 € d'achat</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 2 of 2 -->				
				<div class="col-md-4 col-sm-12">
					<div class="card p-3 mb-3 text-center">						
						<div class="row">
							<div class="col-md-2 d-none d-lg-flex">
								<div class="card-image">
									<i class="fas fa-truck pt-4 pl-3"></i>
								</div>
							</div>
							<div class="col-md-8 text-secondary">
								<div class="card-body text-secondary">
									<h3 class="card-title">24/7 support</h3>
									<p>08 25 99 00 00</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- 3 of 3 -->	
				<div class="col-md-4 col-sm-12">
					<div class="card p-3 mb-3 text-center">						
						<div class="row">
							<div class="col-md-2 d-none d-lg-flex">
								<div class="card-image">
									<i class="fas fa-truck pt-4 pl-3"></i>
								</div>
							</div>
							<div class="col-md-8 text-secondary">
								<h4 class="card-title">Contact us</h4>
								<p class="card-text">27 Avenue Victor Hugo</p>
								<p class="card-text">71000 Macôn</p>
								<a class="btn btn-link" href="info@moka.com">info@moka.com</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	
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