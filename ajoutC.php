<?php
    require_once("connexionC.php");
    if(isset($_POST['submit'])){
       /* $lib=$_POST['libelle'];
        $qt=$_POST['qt'];
        $prix=$_POST['prix'];*/

        extract($_POST);
        
        $sql="INSERT INTO categorie values(NULL,'$libelle','$quantite','$prixunitaire')";
      
        mysqli_query($connexionC,$sql);
        header('location:index.php');
    }

?>
<div class="container mt-5">
            <div class="card col-md-6 offset-3">
            <h5 class="card-header">Formulaire Produit</h5>
            <div class="card-body">

                <form method="POST" action="#">
                        <div class="mb-3">
                        <label for="nom" class="form-label">Libelle</label>
                        <input type="text" class="form-control"name="libelle" >
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Quantite</label>
                            <input type="number" class="form-control" name="quantite">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Prixunitaire</label>
                            <input type="number" class="form-control" name="prixunitaire">
                        </div>


                       
                        
                        <button type="submit" class="btn btn-danger" name="retour">Retour</button>
                        <button type="submit" class="btn btn-success" name="submit">Ajouter</button>

                </form>
            
            </div>
</div>