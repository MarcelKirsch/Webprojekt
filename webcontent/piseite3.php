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
			
			<h1>Raspberry PI 3, 34€</h1>
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
									<img class="slide-image" src="../piimg/raspi3/Produktbild1.jpg"
										alt="">
								</div>
								<div class="item">
									<img class="slide-image" src="../piimg/raspi3/Produktbild2.jpg"
										alt="">
								</div>
								<div class="item">
									<img class="slide-image" src="../piimg/raspi3/Produktbild3.jpg"
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
						
						<h4>Verkäufer: Jonathan Huerkamp</h4>
						<h4>Schulklasse: DT21</h4>
						
					</div>
				</div>
			</div>
			
			
			<!-- Benutzerbeschreibung -->
			<div class="col-md-12">
				<h2>Benutzerbeschreibung</h2>
				<div class="artikel-beschreibung">Der Raspberrry Pi 3 Model B ist die dritte Generation vom Raspberry 3.
				Dieser leistungstarke, kreditkartengroße Mini-Computer kann für viele Anwenundungen und Projekte genutzt werden.
				Er übertrifft seine Vorgängermodelle Raspberry Pi 1 und Raspberry Pi 2.
				</div>
			</div>
		</div>
		
		
		
		
		
		
	</div>
	<?php include '..\php\footer.php';?>
</body>
  
</html>