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
<body class="w-50 mx-auto pt-5 justify-content-center">
    <h1>Formulaire de contact</h1>

    <form action="" method="post">
        <div class="form-control mb-3">
            <label for="firstName" class="form-label">Prénom</label>
            <input type="text" name="firstName" class="form-control" id="firstName" placeholder="Prénom">            
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">Nom</label>
            <input type="text" name="lastName" class="form-control" id="lastName" placeholder="Nom">            
        </div>
        <div class="mb-3">
            <label for="adress" class="form-label">Adresse</label>
            <input class="form-control" name="adress" id="adress" placeholder="Adresse">
        </div>        
        <div class="mb-3">
            <label for="codePostal" class="form-label">Code postale</label>
            <input class="form-control" name="codePostal" id="codePostal" placeholder="Code Postale">
        </div>
        <div class="mb-3">
            <label for="city" class="form-label">Ville</label>
            <input type="text" name="city" class="form-control" id="city" placeholder="Ville">            
        </div>
        <div class="mb-3">
            <label for="phone" class="form-label">Téléphone</label>
            <input class="form-control" name="phone" id="phone" placeholder="Téléphone">           
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input class="form-control" name="email" id="email" placeholder="Email">        
        </div>
        <button class="btn btn-outline-primary">Envoyer</button>
    </form>
</body>
</html>