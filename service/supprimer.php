<?php
include ('../inc/Fonction.php');
$id = $_GET['id'];

echo $id;

foreach($_Get as $p){
    if(empty($p)){
        header('Location:nouveau-actus.php');
        exit;
    }
}

supprimer($id);

header('Location:acceuilAdmin.php');

?>

