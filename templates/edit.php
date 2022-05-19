<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Moka</title>

    <!-- Bootstrap 5.2.0 -->
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    
</head>
<body>
    <div class="container mt-5">
        <?php if(isset($_GET['delete'])&& $_GET['delete']):?>
            <div class="alert alert-success">L'avis <?= $_GET['delete'] ?> a bien été supprimé</div>
        <?php endif; ?>
        <?php if(isset($_GET['edit'])&& $_GET['edit']):?>
            <div class="alert alert-success">L'avis <?= $_GET['edit'] ?> a bien été mis à jour</div>
        <?php endif; ?>
        <table class="table">
            <th scope="col">ID</th>
            <th scope="col">Produits</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Editer</th>
            <?php foreach ($liste as $avis): ?>
                <tr>
                    <td><?= $avis->getId() ?></td>
                    <td><?= $avis->getContent()?></td>
                    <td><a href="/delete?id=<?= $avis->getId() ?>">Supprimer</a></td>
                    <td><a href="/edit?id=<?= $avis->getId() ?>">Editer</a></td>
                </tr>
            <?php endforeach ?>
        </table>
        <br>
        <a href="/">Lien vers l'accueil</a>
    </div>
</body>
</body>
</html>