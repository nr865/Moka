<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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

	<main class="w-50 mx-auto pb-5">
		<h1>Formulaire de contact</h1>

		<form action="" method="post" class="py-5">
			<div class="mb-3">
				<label for="firstName" class="form-label">Prénom</label>
				<input type="text" name="firstName" class="form-control" id="firstName" placeholder="Prénom">            
			</div>
			<div class="mb-3">
				<label for="lastName" class="form-label">Nom</label>
				<input type="text" name="lastName" class="form-control text-uppercase" id="lastName" placeholder="Nom">            
			</div>        
			<div class="mb-3">
				<label for="address" class="form-label">Adresse</label>
				<input type="text" name="address" class="form-control" id="address" placeholder="Adresse">            
			</div>
			<div class="row">
				<div class="col-4 mb-3">			
					<label for="zipCode" class="form-label">Code Postale</label>
					<input type="text" name="zipCode" class="form-control" id="zipCode" placeholder="Code Postale">            
				</div>
				<div class="col-8 mb-3">
					<label for="town" class="form-label">Ville</label>
					<input type="text" name="town" class="form-control text-uppercase" id="town" placeholder="Ville">            
				</div>		
			</div>
			
			<div class="row">
				<div class="col-4 mb-3">
					<label for="phone" class="form-label">Téléphone</label>
					<input type="text" name="phone" class="form-control" id="phone" placeholder="Nom">            
				</div> 
				<div class="col-8 mb-3">
					<label for="email" class="form-label">Email</label>
					<input class="form-control" name="email" id="email" placeholder="Email">        
				</div>			       
			</div>
			<button class="btn btn-outline-primary">Envoyer</button>
		</form>

		<footer class="footer p-2">
			<div class="container-md">
				<div class="row">
					<div class="col-md-4 col-sm-12">
						<p class="text-secondary">&#169; Moka 2022</p>
					</div>
					<div class="col-md-8 col-sm-12">
						<ul class="nav justify-content-end">
							<li class="nav-item"><a class="nav-link active" href="/liste_order">Admin</a></li>
							<li class="nav-item"><a class="nav-link" href="/cgv">Conditions General de Vente</a></li>
						</ul>
					</div>
				</div>
			</div>
		</footer>
	</main>
</body>
</html>