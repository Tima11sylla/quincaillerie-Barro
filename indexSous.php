s<?php
     require_once("connexionSous.php");
 

     require_once("menuSous.php");
     if(isset($_GET["page"])){
          require_once("menu.php");

          switch($_GET["page"]){
               case 'deconnexion':
                    header("location:index.php");
                    break;
               case 'ajouter':
                    require_once("ajoutSous.php");
                    break;

               case 'delete':
                    $id=$_GET['id'];
                    $sql="DELETE FROM sous_categorie where id=$id";
                    mysqli_query($connexionC,$sql);
                    header("location:sous_categorie.php");
                    break;

               case 'editer':
                    $id=$_GET['id'];
                    $sql="SELECT * from sous_categorie where id=$id";
                    $liste=mysqli_query($connexionC,$sql);
                    $res=mysqli_fetch_row($liste);
                    require_once("editSous.php");
              
                        
                         
               
     
          }
     
     }else{
          
          require_once("listeSous.php");
     }
   
  
    
?>

