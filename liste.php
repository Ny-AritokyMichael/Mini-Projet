<?php
include ('/inc/Fonction.php');
$resultat = getAllListeActus();
?>
<!DOCTYPE html>
<html>

<head>
    <title>Resy italie</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>

<body>
    <section id="one">
        <div class="container">
            <h1>Liste actus</h1>
   <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Facteur</th>
		<th scope="col">Url</th>
		<th scope="col">Description</th>
		<th scope="col">Renouveller</th>
    </tr>
  </thead>
  <tbody>
    <?php
				while($data = $resultat->fetch(PDO::FETCH_ASSOC)) {
				?>
					<tr>
						<th scope="row"><?php echo $data['facteur']; ?></th>
						<th scope="row"><?php echo $data['url']; ?></th>
						<th scope="row"><?php echo $data['description']; ?></th>
						<td><a href="supprimer-id=<?php echo $data['id_rechauffement_climatique'] ;?>" class="btn btn-info"> Supprimer</a>
            <p></p>
            <a href="#" class="btn btn-info"> Modifier</a>
          </td>
					</tr>
				<?php }
                 ?>
    <tr>
      <a href="nouveau-actus.php">Nouveau Actus</a>
  </tbody>
</table>
           
           
        </div>
    </section>
</body>

</html>