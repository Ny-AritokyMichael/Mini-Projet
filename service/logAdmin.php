<?php
include ('../inc/Fonction.php');

foreach($_POST as $p){
    if(empty($p)){
        header('Location:nouveau-actus.php');
        exit;
    }
}

$email = $_POST['email'];
$mdp = $_POST['mdp'];

// var_dump(logAdmin($email,$mdp));

if(logAdmin($email,$mdp) == true){
    header('Location:acceuilAdmin');
}else{
    header('Location:erreur');
}




?>