<?php
include ('/inc/Fonction.php');
$resultat = getAllListeActus();
$result = getAll();
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
        <link rel="stylesheet" href="assets/css/style.css">
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
							<small class="site-description">Admin</small>
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
				

			<div class="hero" data-bg-image="images/image-facteur2.jpg">
				<div class="container">
					<form action="ajouter" method="post" >
						<input type="submit" value="Ajouter contenue">
					</form>

				</div>
			</div>

				<div class="fullwidth-block">

					<div class="container">

						<div class="row">
						<?php for ($i=0 ; $i<4 ;$i++) { 
                	while ($data = $resultat->fetch(PDO::FETCH_ASSOC)) {
                        while ($v = $result->fetch(PDO::FETCH_ASSOC)) {
                            ?>
							<div class="col-md-3 col-sm-6">
								
								<div class="live-camera">
									<h2 class="section-title"><?php echo $v['facteur']; ?></h2>
									<figure class="live-camera-cover"><img src="images/<?php echo $v['image'] ?>" alt=""></figure>
									<h3 class="location"><?php echo $v['consequence']; ?></h3>
									<small class="date">8 oct, 8:00AM</small>
									<a href="supprimer-id=<?php echo $v['id_rechauffement_climatique'] ;?>"><img src="images/2.png" height="25" width="25"></a>
									<a class="fa fa-refresh" href="modifier-id=<?php echo $v['id_rechauffement_climatique'] ;?>-idDetails=<?php echo $v['id_details_rechauffement_climatique'] ;?>"></a>
								</div>
							</div>
						<?php
                        }
                	}
						} ?>
							
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