


<?php
include('/inc/Fonction.php');
$id = $_GET['id'];
$idDetails = $_GET['idDetails'];

$resultat = getAllId($id,$idDetails);

while ($data = $resultat->fetch(PDO::FETCH_ASSOC)) {
    ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">
		
		<title>Compass Starter by Ariona, Rian</title>

		<!-- Loading third party fonts -->
		<link href="http://fonts.googleapis.com/css?family=Roboto:300,400,700|" rel="stylesheet" type="text/css">
		<link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">


		<!-- Loading main css file -->
		<link rel="stylesheet" href="style.css">
		
		<!--[if lt IE 9]>
		<script src="js/ie-support/html5.js"></script>
		<script src="js/ie-support/respond.js"></script>
		<![endif]-->

	</head>


	<body>

	
		
		<div class="site-content">
			<div class="site-header">
				<div class="container">
					<a href="index.html" class="branding">
						<img src="images/logo.png" alt="" class="logo">
						<div class="logo-type">
							<h1 class="site-title">Rechauffement climatique</h1>
							<small class="site-description"> Admin </small>
						</div>
					</a>

					

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item current-menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item"><a href="deconnexion">Deconnexion</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

		

			<main class="main-content">
				

			<main class="main-content">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.html">Home</a>
						<span>Ajouter</span>
					</div>
				</div>

				<div class="fullwidth-block">
					<div class="container">
					
						<div class="col-md-12 col-md-offset-1">
							<h2 class="section-title">Modifier rechauffement climatique</h2>
							<form action="modifierAction" class="contact-form" method="post">
								<div class="row">
								
								<div class="col-md-6"><input type="text" value="<?php echo $data['facteur'] ?>"  name="facteur"></div>
								<div class="col-md-6"><input type="text" value="<?php echo $data['consequence'] ?>"  name="consequence"></div>
								<div class="col-md-6"><input type="text" value="<?php echo $data['url'] ?>"  name="url"></div>
								<div class="col-md-6"><input type="text" value="<?php echo $data['description'] ?>"  name="description"></div>
								<div class="col-md-6"><input type="hidden" value="<?php echo $id ?>" name="id"></div>

						</div>
								<div class="row">
									<div class="col-md-6"><input type="text" value="<?php echo $data['solution'] ?>"   name="solution"></div>
									<div class="col-md-6"><input type="hidden" value="<?php echo $idDetails ?>" name="idDetails"></div>
									<div class="col-md-6"><input type="file" name="image"></div>
								</div>
								<div class="text-right">
									<input type="submit" placeholder="Send message">
								</div>
							</form>
							
						</div>
					</div>
				</div>
		
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					

					<p class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>


<?php
}
?>