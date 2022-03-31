<?php
  require_once("connexionC.php");
            if(isset($_POST["submit"])){
               /* $id=$_POST['id'];
                $lib=$_POST['libelle'];
                $qt=$_POST['quantite'];
                $prix=$_POST['prixunitaire'];*/
                extract($_POST);
                $sql="UPDATE categorie set libelle='$libelle',quantite='$quantite',prixunitaire='$prixunitaire' where id=$id";
                mysqli_query($connexionC,$sql);
                header("location:index.php");
            }

?>
<div class="container mt-5">
            <div class="card col-md-6 offset-3">
            <h5 class="card-header">Editer categorie</h5>
            <div class="card-body">

                <form method="POST" action="#">
                        <input type="text" class="form-control"name="id" value="<?= $res[0]?>"  hidden>
                        <div class="mb-3">
                        <label for="nom" class="form-label">Libelle</label>
                        <input type="text" class="form-control"name="libelle" value="<?= $res[1]?>" >
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Quantite</label>
                            <input type="number" class="form-control"  name="quantite" value="<?= $res[2]?>" >
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prixunitaire</label>
                            <input type="number" class="form-control" name="prixunitaire" value="<?= $res[3]?>">
                        </div>
                       
                        
                        <button type="submit" class="btn btn-danger" name="retour">Retour</button>
                        <button type="submit" class="btn btn-success" name="submit">Editer</button>

                </form>
            
            </div>
</div>