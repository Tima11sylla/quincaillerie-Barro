s<?php
     require_once("connexionCom.php");
 

     require_once("menuCom.php");
     if(isset($_GET["page"])){
          require_once("menu.php");

          switch($_GET["page"]){
               case 'deconnexion':
                    header("location:index.php");
                    break;
               case 'ajouter':
                    require_once("ajoutCom.php");
                    break;

               case 'delete':
                    $id=$_GET['id'];
                    $sql="DELETE FROM commande where id=$id";
                    mysqli_query($connexionC,$sql);
                    header("location:commande.php");
                    break;

               case 'editer':
                    $id=$_GET['id'];
                    $sql="SELECT * from commande where id=$id";
                    $liste=mysqli_query($connexionC,$sql);
                    $res=mysqli_fetch_row($liste);
                    require_once("editCom.php");
              
                        
                         
               
     
          }
     
     }else{
          
          require_once("listeCom.php");
     }
   
  
    
?>

