<?php
include ('../inc/Fonction.php');

foreach($_POST as $p){
    if(empty($p)){
        header('Location:nouveau-actus.php');
        exit;
    }
}

$id = $_POST['id'];
$image = $_POST['image'];
$consequence = $_POST['consequence'];
$solution = $_POST['solution'];

saveDetails($id,$image,$consequence,$solution);

header('Location:acceuilAdmin');

?>