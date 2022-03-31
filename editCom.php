<?php
  require_once("connexionC.php");
            if(isset($_POST["submit"])){
               /* $id=$_POST['id'];
                $lib=$_POST['libelle'];
                $qt=$_POST['quantite'];
                $prix=$_POST['prixunitaire'];*/
                extract($_POST);
                $sql="UPDATE categorie set montant='$montant',date_prevu='$date_prevu',date_livrais='$date_livrais',adresse='$adresse' where id=$id";
                mysqli_query($connexionC,$sql);
                header("location:indexcom.php");
            }

?>
<div class="container mt-5">
            <div class="card col-md-6 offset-3">
            <h5 class="card-header">Editer commande</h5>
            <div class="card-body">

                <form method="POST" action="#">
                        <input type="text" class="form-control"name="id" value="<?= $res[0]?>"  hidden>
                        <div class="mb-3">
                        <label for="nom" class="form-label">montant</label>
                        <input type="text" class="form-control"name="montant" value="<?= $res[1]?>" >
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">date_prevu</label>
                            <input type="number" class="form-control"  name="date_prevu" value="<?= $res[2]?>" >
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">date_livrais</label>
                            <input type="number" class="form-control" name="date_livrais" value="<?= $res[3]?>">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">adresse</label>
                            <input type="number" class="form-control" name="adresse" value="<?= $res[3]?>">
                        </div>
                        
                        <button type="submit" class="btn btn-danger" name="retour">Retour</button>
                        <button type="submit" class="btn btn-success" name="submit">Editer</button>

                </form>
            
            </div>
</div>