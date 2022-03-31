<?php
     require_once("connexionC.php");
     require_once("menuCat.php");
     if(isset($_GET["page"])){
         
          switch($_GET["page"]){
               case 'ajouter':
                    require_once("ajoutC.php");
                    break;

               case 'delete':
                    $id=$_GET['id'];
                    $sql="DELETE FROM categorie where id=$id";
                    mysqli_query($connexionC,$sql);
                    header("location:indexC.php");
                    break;

               case 'editer':
                    $id=$_GET['id'];
                    $sql="SELECT * from categorie where id=$id";
                    $listeC=mysqli_query($connexionC,$sql);
                    $res=mysqli_fetch_row($listeC);
                    require_once("editer.php");
                        
                  
               
     
          }
     
     }else{
        require_once("listeC.php");
     }
   
  
    
?>

