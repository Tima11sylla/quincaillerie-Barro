<?php
    $serveur="localhost";
    $user="root";
    $pwd="";
    $dbname="projetphp";


    $connexion=mysqli_connect($serveur,$user,$pwd,$dbname);
    if(!$connexion){
        echo "Erreur de connexion ";
    }


?>