<!DOCTYPE html>
<html lang="de">
  <head>
	<?php include '..\php\meta-attributes.php';?>
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<title>BKBuy - Produktseite</title>
	<?php include '..\php\CSS_Skripte.php';?>
</head>
  
<body>

	<?php include '..\php\header.php';?>
	<?php include '..\php\modals_meldungen.php';?>

	<div class="container">
		
		<div class="row container-body">
			
			<h1>Überschrift, Preis</h1>
			<div class="col-md-12">
				<div class="row">
				
					<div class="col-md-7" style="text-align: center">
						<div id="carousel-01" class="carousel slide"
							data-ride="carousel">
							<ol class="carousel-indicators">
								<li data-target="#carousel-01" data-slide-to="0"
									class="active"></li>
								<li data-target="#carousel-01" data-slide-to="1"></li>
								<li data-target="#carousel-01" data-slide-to="2"></li>
							</ol>
							<div class="carousel-inner">
								<div class="item active">
									<img class="slide-image" src="http://placehold.it/800x300"
										alt="">
								</div>
								<div class="item">
									<img class="slide-image" src="http://placehold.it/800x300"
										alt="">
								</div>
								<div class="item">
									<img class="slide-image" src="http://placehold.it/800x300"
										alt="">
								</div>
							</div>
							
							<a class="left carousel-control" href="#carousel-01"
								data-slide="prev"> <span
								class="glyphicon glyphicon-chevron-left"></span>
							</a> <a class="right carousel-control"
								href="#carousel-01" data-slide="next"> <span
								class="glyphicon glyphicon-chevron-right"></span>
							</a>
						</div>
					</div>
					
					
					<div class="col-md-5">
						<button class="btn">Email schreiben</button>
						
						<h4>Verkäufer:</h4>
						<h4>Schulklasse: </h4>
						<h4>Telefonnummer: </h4>
					</div>
				</div>
			</div>
			
			
			<!-- Benutzerbeschreibung -->
			<div class="col-md-12">
				<h2>Benutzerbeschreibung</h2>
				<div class="artikel-beschreibung">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
				labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et 
				ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum 
				dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore 
				magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. 
				Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</div>
			</div>
		</div>
		
		
		<!-- Andere Artikel des Verkäufers -->
		<div class="row container-body">
		<h2>Andere Artikel des Verkäufers</h2>
			
			
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
		
		
		<!-- Ähnliche Artikel -->
		<div class="row container-body ">
		<h2>Ähnliche Artikel</h2>
			<div class="col-md-8 carousel-artikel ">
			
			
				<!-- Bilder Carousel -->
				<div id="carousel-03" class="carousel slide"
					data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carousel-03" data-slide-to="0"
							class="active"></li>
						<li data-target="#carousel-03" data-slide-to="1"></li>
						<li data-target="#carousel-03" data-slide-to="2"></li>
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
					<a class="left carousel-control" href="#carousel-03"
						data-slide="prev"> <span
						class="glyphicon glyphicon-chevron-left"></span>
					</a> <a class="right carousel-control" href="#carousel-03"
						data-slide="next"> <span
						class="glyphicon glyphicon-chevron-right"></span>
					</a>
				</div>
			</div>
			
			
			<!-- Text zu den Bildern -->
			<div class="col-md-5 ">
				<div class="artikel-beschreibung">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
				labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et 
				ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut 
				labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et 
				ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum</div>
			</div>
		</div>		
	</div>
	<?php include '..\php\footer.php';?>
</body>
  
</html>