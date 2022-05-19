<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste avis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
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
</html>