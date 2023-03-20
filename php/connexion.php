<?php 
    //Constantes connexion à la base de donnée
    $host = "localhost";
    $name = "sanobio";
    $login = "root";
    $password = "";

    //Connexion au serveur
    try {
        $connexion = new PDO("mysql:host=$host;dbname=$name",$login,$password);
        echo 'Connexion OK';
    } catch (Exception $e){
        die();
    }
?>