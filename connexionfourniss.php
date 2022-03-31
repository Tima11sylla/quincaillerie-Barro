<?php
    $serveur="localhost";
    $user="root";
    $pwd="";
    $dbname="projetphp";


    $connexionC=mysqli_connect($serveur,$user,$pwd,$dbname);
    if(!$connexionC){
        echo "Erreur de connexion ";
    }


?>