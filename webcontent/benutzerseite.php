<!DOCTYPE html>
<html lang="de">
  <head>
	<?php include '..\php\meta-attributes.php';?>
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<title>BKBuy - Benutzerseite</title>
	<?php include '..\php\CSS_Skripte.php';?>
</head>
  
<body>
	
	<?php include '..\php\header.php';?>
	<?php include '..\php\modals_meldungen.php';?>
	
	<div class="container">
		<div class="container-body">

			<!-- Profilbild und Username, Klasse -->
			<div class="row" id="benutzerseite">

				<!-- Profilbild -->
				<div class="col-md-2">
					<img src="../img/Profilbild2.jpg" alt="Logo" id="profilbild-benutzer">

				</div>

				<!-- Username, Schulklasse -->
				<div class="col-md-10" style="text-align: center">
					<div>Username</div>
					<div>Klasse</div>
				</div>
			</div>

			<hr>

			<div class="row" id="verkauferartikel-benutzer">
			<h2>Artikel des Verkäufers</h2>
				
				
				<!-- Bilder Carousel -->
				<div class="col-md-8 carousel-artikel">
					<div id="carousel-02" class="carousel slide"
						data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carousel-02" data-slide-to="0"
								class="active"></li>
							<li data-target="#carousel-02" data-slide-to="1"></li>
							<li data-target="#carousel-02" data-slide-to="2"></li>
						</ol>
						<div class="carousel-inner">
							<div class="item active">
								<img class="slide-image" src="http://placehold.it/800x300" alt="">
							</div>
							<div class="item">
								<img class="slide-image" src="http://placehold.it/800x300" alt="">
							</div>
							<div class="item">
								<img class="slide-image" src="http://placehold.it/800x300" alt="">
							</div>
						</div>
							<a class="left carousel-control" href="#carousel-02"
								data-slide="prev"> <span
								class="glyphicon glyphicon-chevron-left"></span>
							</a> <a class="right carousel-control"
								href="#carousel-02" data-slide="next"> <span
								class="glyphicon glyphicon-chevron-right"></span>
							</a>
					</div>
				</div>
				
				
				<!-- Text zu den Bildern -->
				<div class="col-md-5">
					<div class="artikel-beschreibung">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
					labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et 
					ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
					Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
					labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et 
					ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum</div>
				</div>
			</div>
		</div>
	</div>
</body>
  
</html>