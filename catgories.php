<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Listes des catégories </title>
</head>

<body>

    <h1>listes des categories</h1>
    <a href="ajouter_categorie.php" class="btn btn-primary">Ajouter des categories</a>
    <table class="table table-striped table-hover">
        <tr>
            <th>#ID</th>
            <th>Libelle</th>
            <th>Description</th>
            <th>Date de Création</th>
            <th>operations</th>
        </tr>
        <tbody>
        <?php
    require_once 'include/database.php';
    // fetch qui permet de retourner tous les donnes 
    $categories = $pdo->query('SELECT * FROM categorie')->fetchAll(PDO::FETCH_ASSOC);
    // affichage dans le tableau :
    foreach($categories as $categorie){
        ?>
         <tr>
            <th><?php echo $categorie['id'] ?></th>
            <th><?php echo $categorie['libele'] ?></th>
            <th><?php echo $categorie['description'] ?></th>
            <th><?php echo $categorie['date_creation'] ?></th>
            <th>
               <a href="modifier_categorie.php?id=<?php echo $categorie['id']?>" class="btn btn-primary">Modifier</a>
               <a href="supprimer_categorie.php?id=<?php echo $categorie['id']?>"  ondblclick="return confirm('Voulez vous vraimenet supprimer la categorie <?php echo $categorie['libele'] ?> ');" class="btn btn-danger">Supprimer</a>
            </th>
        </tr>
        <?php
    }
    ?>
        </tbody>
    </table>
</body>

</html>