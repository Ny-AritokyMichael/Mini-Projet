<?php
include ('../inc/Fonction.php');

foreach($_POST as $p){
    if(empty($p)){
        header('Location:acceuilAdmin');
        exit;
    }
}

$id = $_POST['id'];
$idDetails = $_POST['idDetails'];

echo $id;
echo $idDetails;



$facteur = $_POST['facteur'];
$url = $_POST['url'];
$description = $_POST['description'];

$consequence = $_POST['consequence'];
$solution = $_POST['solution'];
$image = $_POST['image'];


modifierActus($id,$facteur,$url,$description);

modifierDetails($idDetails,$id,$image,$consequence,$solution);

header('Location:acceuilAdmin');

?>