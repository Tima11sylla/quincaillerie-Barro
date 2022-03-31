<?php
  require_once("connexion.php");
            if(isset($_POST["submit"])){
                $id=$_POST['id'];
                $lib=$_POST['libelle'];
                $qt=$_POST['qt'];
                $prix=$_POST['prix'];
                $sql="UPDATE sous_commande set libelle='$libelle' where id=$id";
                mysqli_query($connexion,$sql);
                header("location:index.php");
            }

?>
<div class="container mt-5">
            <div class="card col-md-6 offset-3">
            <h5 class="card-header">Editer Produit</h5>
            <div class="card-body">

                <form method="POST" action="#">
                        <input type="text" class="form-control"name="id" value="<?= $res[0]?>"  hidden>
                        <div class="mb-3">
                        <label for="nom" class="form-label">libelle</label>
                        <input type="text" class="form-control"name="libelle" value="<?= $res[1]?>" >
                        </div>
                      
                        
                        <button type="submit" class="btn btn-danger" name="retour">Retour</button>
                        <button type="submit" class="btn btn-success" name="submit">Editer</button>

                </form>
            
            </div>
</div>