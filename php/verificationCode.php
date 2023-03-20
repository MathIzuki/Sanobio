<?php    
    //connexion base de donnée
    include('connexion.php');

    $codeTherapeuteClient = $_POST['pass'];

    //requête sql
    $stmt = $connexion->prepare("SELECT Code FROM therapeute WHERE Code=?");
    $stmt ->execute([$codeTherapeuteClient]);
    
    
    $pass = $stmt->fetch();
    if ($pass) {
        header('Location: https:www.youtube.com');
    }
    else {
        header('Location: ../false.html');
    }
?>