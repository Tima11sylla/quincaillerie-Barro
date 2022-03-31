<?php
require_once("connexionCom.php");
$sql="SELECT * from commande";
    $listes=mysqli_query($connexionC,$sql);

?>
<link rel="stylesheet" href="style.css">
<a href="?page=ajouter" class="btn btn-primary">Ajout</a>
<div class="col-md-8 offset-2">
        <table class="table">
        <thead >
            <tr class=desig>
            <th scope="col">Id</th>
            <th scope="col">montant</th>
            <th scope="col">date_prevu</th>
            <th scope="col">date_livrais</th>
            <th scope="col">adresse</th>
            <th scope="col">Modifier</th>
            <th scope="col">Supprimer</th>
            </tr>
        </thead>
        <tbody class="dess">
            <?php  while($p=mysqli_fetch_row($listes) ) : ?>
            <tr >
                    <th scope="row"><?= $p[0] ?></th>
                    <td><?= $p[1] ?></td>
                    <td><?= $p[2] ?></td>
                    <td><?= $p[3] ?></td>
                    <td><?= $p[4] ?></td>
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
