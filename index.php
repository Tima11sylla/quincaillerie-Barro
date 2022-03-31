<?php
     require_once("connexion.php");
 


     if(isset($_GET["page"])){
          require_once("menu.php");

          switch($_GET["page"]){
               case 'deconnexion':
                    header("location:index.php");
                    break;
               case 'ajouter':
                    require_once("ajout.php");
                    break;

               case 'delete':
                    $id=$_GET['id'];
                    $sql="DELETE FROM produit where id=$id";
                    mysqli_query($connexion,$sql);
                    header("location:index.php");
                    break;

               case 'editer':
                    $id=$_GET['id'];
                    $sql="SELECT * from produit where id=$id";
                    $liste=mysqli_query($connexion,$sql);
                    $res=mysqli_fetch_row($liste);
                    require_once("editer.php");
               case 'liste':
                        
                         require_once("liste.php");
               
     
          }
     
     }else{
          require_once("header.php");
          require_once("pageAcceuil.php");
     }
   
  
    
?>

