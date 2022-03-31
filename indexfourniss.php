s<?php
     require_once("connexionfourniss.php");
 

     require_once("menufourniss.php");
     if(isset($_GET["page"])){
          require_once("menu.php");

          switch($_GET["page"]){
               case 'deconnexion':
                    header("location:index.php");
                    break;
               case 'ajouter':
                    require_once("ajoutfourniss.php");
                    break;

               case 'delete':
                    $id=$_GET['id'];
                    $sql="DELETE FROM fournisseur where id=$id";
                    mysqli_query($connexionC,$sql);
                    header("location:fourniss.php");
                    break;

               case 'editer':
                    $id=$_GET['id'];
                    $sql="SELECT * from fournisseur where id=$id";
                    $liste=mysqli_query($connexionC,$sql);
                    $res=mysqli_fetch_row($liste);
                    require_once("editfourniss.php");
              /* case 'liste':*/
                        
                         
               
     
          }
     
     }else{
          /*require_once("header.php");
          require_once("pageAcceuil.php");*/
          require_once("listeFournis.php");
     }
   
  
    
?>

