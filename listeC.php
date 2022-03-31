<?php
require_once("connexionC.php");
    $sql="SELECT * from categorie";
    $listeC=mysqli_query($connexionC,$sql);

?>
<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="bootstrap.css">
<a href="?page=ajouter" class="btn btn-primary">Ajout</a>
<div class="col-md-8 offset-2">
        <table class="table">
        <thead class="thead-dark">
            <tr>
            <th scope="col">Id</th>
            <th scope="col">libelle</th>
            <th scope="col">quantite</th>
            <th scope="col">prixunitaire</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody class="design">
            <?php  while($p=mysqli_fetch_row($listeC) ) : ?>
            <tr >
                    <th scope="row"><?= $p[0] ?></th>
                    <td><?= $p[1] ?></td>
                    <td><?= $p[2] ?></td>
                    <td><?= $p[3] ?></td>
                    <td>
                        <a class="btn btn-success" href="?page=editer&id=<?= $p[0] ?>">Editer </a>
                    </td>

                    <td>
                        <a class="btn btn-danger" href="?page=delete&id=<?= $p[0] ?>">Supprimer </a>
                    </td>
            </tr>
            <?php  endwhile ?>
        </tbody>
        </table>


</div>
