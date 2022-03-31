<?php
    require_once("connexion.php");
    if(isset($_POST['submit'])){
       /* $lib=$_POST['libelle'];
        $qt=$_POST['qt'];
        $prix=$_POST['prix'];*/

        extract($_POST);
        
        $sql="INSERT INTO sous_categorie values(NULL,'$libelle')";
      
        mysqli_query($connexion,$sql);
        header('location:index.php');
    }

    $sql1="SELECT * FROM categorie";
    $categories=mysqli_query($connexion,$sql1);

?>
<div class="container mt-5">
            <div class="card col-md-6 offset-3">
            <h5 class="card-header">Formulaire sous_categorie</h5>
            <div class="card-body">

                <form method="POST" action="#">
                        <div class="mb-3">
                        <label for="nom" class="form-label">libelle</label>
                        <input type="text" class="form-control"name="libelle" >
                        </div>
                      
                        <div class="mb-3">
                            <label for="prenom" class="form-label">Categorie</label>
                            <select name="categorie" id="" class="form-control">
                            <?php  while($p=mysqli_fetch_row($categories) ) : ?>
                                    <option value="<?= $p[0] ?>"><?= $p[1] ?></option>
                            <?php endwhile?>
                            </select>
                        </div>


                       
                        
                        <button type="submit" class="btn btn-danger" name="retour">Retour</button>
                        <button type="submit" class="btn btn-success" name="submit">Ajouter</button>

                </form>
            
            </div>
</div>