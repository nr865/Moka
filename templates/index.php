<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>moka</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <script src="../js/caroussel.js" defer></script>
</head>
<body class="mx-auto pb-5">
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
	
    <!-- Carousel -->
    <div class="col-12 py-5">
      <div class="row d-flex align-items-center slider">
        <!-- Flèche de gauche -->
        <div class="col-lg-3 d-none d-lg-block text-end">                                
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"/>
        </svg>
        </div>
        <!-- Image du carousel -->
        <div class="col-12 col-lg-6 pt-4 pt-lg-0">
          <img src="../images/slide/slide01.jpg" alt="Image du slide" class="w-100 rounded carousel-img">
        </div>
        <!-- Flèche de droite -->
        <div class="col-lg-3 d-none d-lg-block text-start">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-right" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h11.793l-3.147-3.146a.5.5 0 0 1 .708-.708l4 4a.5.5 0 0 1 0 .708l-4 4a.5.5 0 0 1-.708-.708L13.293 8.5H1.5A.5.5 0 0 1 1 8z"/>
        </svg>                             
      </div>
    </div>
  </div>
      
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
						<li class="nav-item"><a class="nav-link active" href="/liste_order">Admin</a></li>
						<li class="nav-item"><a class="nav-link" href="/livraison">Livrasion</a></li>
						<li class="nav-item"><a class="nav-link" href="/cgv">Conditions General de Vente</a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
   
</body>
</html>