<?php require_once 'header.php';?>
    <div class="container mt-5">
        <?php if(isset($_GET['delete'])&& $_GET['delete']):?>
            <div class="alert alert-success">Le produit <?= $_GET['delete'] ?> a bien été supprimé</div>
        <?php endif; ?>
        <?php if(isset($_GET['edit'])&& $_GET['edit']):?>
            <div class="alert alert-success">Le produit <?= $_GET['edit'] ?> a bien été mis à jour</div>
        <?php endif; ?>
        <a href="/admin/add">Ajouter un produit</a>
        <table class="table">
            <th scope="col">ID</th>
            <th scope="col">Produits</th>
            <th scope="col">Supprimer</th>
            <th scope="col">Editer</th>

            <?php foreach ($productsList as $product): ?>
                <tr>
                    <td><?= $product->getId() ?></td>
                    <td><?= $product->getName()?></td>
                    <td><a href="admin/delete?id=<?= $product->getId() ?>">Supprimer</a></td>
                    <td><a href="admin/edit?id=<?= $product->getId() ?>">Editer</a></td>
                </tr>
            <?php endforeach; ?>
        </table>
        <br>
    </div>
</body>
</html>