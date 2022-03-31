<?php
  require_once("connexion.php");
            if(isset($_POST["submit"])){
                $id=$_POST['id'];
                $lib=$_POST['libelle'];
                $qt=$_POST['qt'];
                $prix=$_POST['prix'];
                $sql="UPDATE fournisseur set nom_fourniss='$nom_fourniss',prenom_fourniss='$prenom_fourniss',ville='$ville',telephone='$telephone',code_postal='$code_postal',adresse='$adresse' where id=$id";
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
                        <label for="nom" class="form-label">nom_fourniss</label>
                        <input type="text" class="form-control"name="nom_fourniss" value="<?= $res[1]?>" >
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">prenom_fourniss</label>
                            <input type="text" class="form-control"  name="prenom_fourniss" value="<?= $res[2]?>" >
                        </div>

                        <div class="mb-3">
                            <label for="prenom" class="form-label">ville</label>
                            <input type="text" class="form-control" name="ville" value="<?= $res[3]?>">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">telephone</label>
                            <input type="text" class="form-control"  name="telephone" value="<?= $res[2]?>" >
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">code_postal</label>
                            <input type="text" class="form-control"  name="code_postal" value="<?= $res[2]?>" >
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">adresse</label>
                            <input type="text" class="form-control"  name="adresse" value="<?= $res[2]?>" >
                        </div>
                        
                        <button type="submit" class="btn btn-danger" name="retour">Retour</button>
                        <button type="submit" class="btn btn-success" name="submit">Editer</button>

                </form>
            
            </div>
</div>