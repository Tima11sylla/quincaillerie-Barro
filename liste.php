<?php

    $sql="SELECT p.id,p.code,p.designation,p.quantite,p.prixunitaire,c.libelle FROM produit p,categorie c where p.id_Categorie=c.id";
    $listes=mysqli_query($connexion,$sql);

?>
<link rel="stylesheet" href="style.css">
<a href="?page=ajouter" class="btn btn-primary">Ajout</a>
<div class="col-md-8 offset-2">
        <table class="table">
        <thead >
            <tr class=desig>
            <th scope="col">Id</th>
            <th scope="col">code</th>
            <th scope="col">designation</th>
            <th scope="col">quantite</th>
            <th scope="col">prixunitaire</th>
            <th scope="col">Categorie</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody class="dessin">
            <?php  while($p=mysqli_fetch_row($listes) ) : ?>
            <tr >
                    <th scope="row"><?= $p[0] ?></th>
                    <td><?= $p[1] ?></td>
                    <td><?= $p[2] ?></td>
                    <td><?= $p[3] ?></td>
                    <td><?= $p[4] ?></td>
                    <td><?= $p[5] ?></td>
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
