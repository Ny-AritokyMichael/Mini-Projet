<?php
include ('../inc/Fonction.php');

foreach($_POST as $p){
    if(empty($p)){
        header('Location:nouveau-actus.php');
        exit;
    }
}

$facteur = $_POST['facteur'];
$url = $_POST['url'];
$description = $_POST['description'];

saveActus($facteur,$url,$description);


header('Location:details');

?>