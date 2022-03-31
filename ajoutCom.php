<?php
    require_once("connexionC.php");
    if(isset($_POST['submit'])){
       /* $lib=$_POST['libelle'];
        $qt=$_POST['qt'];
        $prix=$_POST['prix'];*/

        extract($_POST);
        
        $sql="INSERT INTO commande values(NULL,'$montant','$date_prevu','$date_livrais','$adresse')";
      
        mysqli_query($connexionC,$sql);
        header('location:index.php');
    }

?>
<div class="container mt-5">
            <div class="card col-md-6 offset-3">
            <h5 class="card-header">Formulaire commande</h5>
            <div class="card-body">

                <form method="POST" action="#">
                        <div class="mb-3">
                        <label for="nom" class="form-label">montant</label>
                        <input type="text" class="form-control"name="montant" >
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">date_prevu</label>
                            <input type="number" class="form-control" name="date_prevu">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">date_livrais</label>
                            <input type="number" class="form-control" name="date_livrais">
                        </div>
                        <div class="mb-3">
                            <label for="prenom" class="form-label">adresse</label>
                            <input type="number" class="form-control" name="adresse">
                        </div>


                       
                        
                        <button type="submit" class="btn btn-danger" name="retour">Retour</button>
                        <button type="submit" class="btn btn-success" name="submit">Ajouter</button>

                </form>
            
            </div>
</div>