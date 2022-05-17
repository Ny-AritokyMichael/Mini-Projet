<?php
include ('/inc/Fonction.php');

$id = $_GET['id'];
$idDetails = $_GET['idDetails'];

$resultat = getAllId($id,$idDetails);
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
							<small class="site-description"> Client </small>
						</div>
					</a>

					<!-- Default snippet for navigation -->
					<div class="main-navigation">
						<button type="button" class="menu-toggle"><i class="fa fa-bars"></i></button>
						<ul class="menu">
							<li class="menu-item"><a href="index.html">Home</a></li>
							<li class="menu-item current-menu-item"><a href="news.html">News</a></li>
							<li class="menu-item"><a href="live-cameras.html">Live cameras</a></li>
							<li class="menu-item"><a href="photos.html">Photos</a></li>
							<li class="menu-item"><a href="contact.html">Contact</a></li>
						</ul> <!-- .menu -->
					</div> <!-- .main-navigation -->

					<div class="mobile-navigation"></div>

				</div>
			</div> <!-- .site-header -->

			<main class="main-content">
				<div class="container">
					<div class="breadcrumb">
						<a href="index.html">Home</a>
						<span>News</span>
					</div>
				</div>
				
		
			<?php	while ($data = $resultat->fetch(PDO::FETCH_ASSOC)) { ?>

				<div class="fullwidth-block">
					<div class="container">
						<div class="row">
							<div class="content col-md-8">
								<div class="post">
									<h2 class="entry-title"><?php echo $data['facteur'] ?></h2>
									<div class="featured-image"><img src="images/<?php echo $data['image'] ?>" alt=""></div>
									<p><h3> Description du catastrope : </h3><?php echo $data['description'] ?></p>
									<p><h3>Ses consequences en jeu :</h3> <?php echo $data['consequence'] ?></p>
									<p><h3>Les solutions a suggerer : </h3><?php echo $data['solution'] ?></p>
								</div>

								<?php } ?>

								
							</div>
							<div class="sidebar col-md-3 col-md-offset-1">
								
							

								<div class="widget top-rated">
									<h3 class="widget-title">Top rated posts</h3>
									<ul>
										<li><h3 class="entry-title"><a href="#">Doloremque laudantium lorem</a></h3><div class="rating"><strong>5.5</strong> (759 rates)</div></li>
										<li><h3 class="entry-title"><a href="#">Doloremque laudantium lorem</a></h3><div class="rating"><strong>5.5</strong> (759 rates)</div></li>
										<li><h3 class="entry-title"><a href="#">Doloremque laudantium lorem</a></h3><div class="rating"><strong>5.5</strong> (759 rates)</div></li>
										<li><h3 class="entry-title"><a href="#">Doloremque laudantium lorem</a></h3><div class="rating"><strong>5.5</strong> (759 rates)</div></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</main> <!-- .main-content -->

			<footer class="site-footer">
				<div class="container">
					<div class="row">
						<div class="col-md-8">
							<form action="#" class="subscribe-form">
								<input type="text" placeholder="Enter your email to subscribe...">
								<input type="submit" value="Subscribe">
							</form>
						</div>
						<div class="col-md-3 col-md-offset-1">
							<div class="social-links">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-google-plus"></i></a>
								<a href="#"><i class="fa fa-pinterest"></i></a>
							</div>
						</div>
					</div>

					<p class="colophon">Copyright 2014 Company name. Designed by Themezy. All rights reserved</p>
				</div>
			</footer> <!-- .site-footer -->
		</div>
		
		<script src="js/jquery-1.11.1.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/app.js"></script>
		
	</body>

</html>