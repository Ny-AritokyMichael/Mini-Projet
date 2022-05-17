<?php
include('../inc/Fonction.php');

$id = $_GET['id'];
$resultat = findActusById($id);
$data = mysqli_fetch_assoc($resultat);
mysqli_free_result($resultat);

?>
<!DOCTYPE html>
<html>

<head>
    <title><?= $data['titre'] ?></title>
    <meta charset="utf-8">
</head>

<body>
    <section id="one">
        <div class="container">
            <h1><?= $data['nom'].': '. $data['titre'] ?></h1>
            <table class="table table-striped">
                <tr>
                    <th scope="col">Date</th>
                    <th scope="col">categorie</th>
                    <th scope="col">titre</th>
                </tr>
                <tr>
                    <th scope="row"><?php echo $data['daty']; ?></th>
                    <td><?php echo $data['nom']; ?></td>
                    <td><?php echo $data['titre']; ?></td>
                </tr>
            </table>
            <h4>Resume: </h4>
            <h2><?= $data['resum'] ?></h2>
            <h4>Contenu: </h4>
            <p><?= $data['contenu'] ?></p>
        </div>
    </section>
</body>

</html>