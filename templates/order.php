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

    <main class="w-50 mx-auto pb-5 justify-content-center">
        <h1>Placez vos commande</h1>

        <form action="" method="post" class="py-5">
            <div class="mb-3">
                <label for="firstName" class="form-label">Prénom</label>
                <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Prénom">            
            </div>
            <div class="mb-3">
                <label for="lastName" class="form-label">Nom</label>
                <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Nom">            
            </div>        
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" name="email" id="email" placeholder="Email">        
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Commande</label>
                <textarea type="text" name="text" class="form-control" id="text" placeholder="Nom">            
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