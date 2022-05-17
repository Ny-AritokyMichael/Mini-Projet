<?php
include ('database.php');


function logAdmin($email, $mdp){
    $condition = false;
    $connect = new PDO('pgsql:host=localhost;port=5432;dbname=rechauffement','admin','admin');
    $sql = "select count(*) verifier from admin where email = '".$email."' and mdp = '".$mdp."'";
    $query = $connect->query($sql);
    $query->setFetchMode(PDO::FETCH_OBJ);
    while($resultat = $query->fetch()){
        $temp = $resultat->verifier;
    }
    $query->closeCursor();
    if($temp== 1){
        $condition = true;
    }
    return $condition;
}

function getAllListeActus(){
    $sql = "select * from rechauffement_climatique";
    $resultat = dbconnect()->prepare($sql);
    $resultat->execute();
    // $data = mysqli_fetch_assoc($resultat);
    // mysqli_free_result($resultat);
    return $resultat;
}


function getAllId($id,$idDetails){
    $sql = "select * from v_rechauffement_climatique where id_rechauffement_climatique=%d and id_details_rechauffement_climatique=%d";
    $sql = sprintf($sql,$id,$idDetails);
    $resultat = dbconnect()->prepare($sql);
    $resultat->execute();
    // $data = mysqli_fetch_assoc($resultat);
    // mysqli_free_result($resultat);
    return $resultat;
}

function getAll(){
    $sql = "select * from v_rechauffement_climatique";
    $resultat = dbconnect()->prepare($sql);
    $resultat->execute();
    // $data = mysqli_fetch_assoc($resultat);
    // mysqli_free_result($resultat);
    return $resultat;
}

function findActusById($id){
    $sql = "select * from v_actus where id=$id";
    $resultat = mysqli_query(dbconnect(),$sql);
    return $resultat;
}

function slugify($text, $divider='-'){
    // replace non letter or digit by divider
    $text = preg_replace('~[^\pL\d]+~u',$divider,$text);

    // transliterate
    $text = iconv('utf-8','us-ascii//TRANSLIT',$text);

    //remove unwanted characters
    $text = preg_replace('~[^-\w]+~','',$text);

    //trim
    $text = trim($text,$divider);

    //remove duplicate divider
    $text = preg_replace('~-+~',$divider,$text);

    //lowercase
    $text = strtolower($text);
    if(empty($text)){
        return 'n-a';
    }
    return $text;
}

function saveActus($facteur,$url,$description){
    $sql = "INSERT INTO rechauffement_climatique values(default,'$facteur','$url', '$description')";
    dbconnect()->query($sql);
}


function saveDetails($id,$image,$consequence,$solution){
    $sql = "INSERT INTO details_rechauffement_climatique(id_rechauffement_climatique,image,consequence,solution) values('$id','$image','$consequence', '$solution')";
    dbconnect()->query($sql);
}


function modifierActus($id,$facteur,$url,$description){
    $sql = "update rechauffement_climatique set(facteur,url,description) = ('$facteur','$url', '$description') where id_rechauffement_climatique = $id";
    dbconnect()->query($sql);
}


function modifierDetails($idDetails,$id,$image,$consequence,$solution){
    $sql = "update details_rechauffement_climatique set(id_rechauffement_climatique,image,consequence,solution) = ('$id','$image','$consequence', '$solution') where id_details_rechauffement_climatique= $idDetails";
    dbconnect()->query($sql);
}


function supprimer($id){
    $sql = "delete from rechauffement_climatique where id_rechauffement_climatique = %d";
    $sql = sprintf($sql,$id);
    dbconnect()->query($sql);

}

?>