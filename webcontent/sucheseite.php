<!DOCTYPE html>
<html lang="de">
  <head>
	<?php include '..\php\meta-attributes.php';?>
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<title>BKBuy - Suche</title>
	<?php include '..\php\CSS_Skripte.php';?>
</head>
  
<body>

	<?php include '..\php\header.php';?>
	
	<!-- Seiteninhalt -->
	<div class="container">
		<div class="row container-body" style="padding-top: 10px;">
		
			<div class="col-md-3">
				<p class="lead">Kategorien</p>
				<div class="list-group">
					<a href="#" class="list-group-item">Category 1</a> 
					<a href="#" class="list-group-item">Category 2</a> 
					<a href="#"	class="list-group-item">Category 3</a>
				</div>
			</div>


			<!-- Suchinhalte -->
			<div class="col-md-9">
					<div class="input-group" id="artikel-suche-suchleiste">
							<input type="text" class="form-control" aria-label="..." style="max-width: 500px;">
							<div class="input-group-btn">
								<button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Suchen
									<span class="caret"></span>
								</button>
								<ul class="dropdown-menu dropdown-menu-right">
									<li><a href="#">Elektronik</a></li>
									<li><a href="#">Haushalt</a></li>
									<li><a href="#">Kleidung</a></li>
									<li><a href="#">Lebensmittel</a></li>
								</ul>
							</div>
						<button type="button" class="btn btn-default pull-right" id="sucheseite-sortieren">Sortieren</button>
					</div><br>
				
				
				<!-- Artikelansichten -->
				<div class="row suchergebnis">
					<div class="col-md-2 col-center">
						<img src="../img/artikelbild.jpg" alt="Artikelbild" id="suche-artikelbild">
					</div>
					
					
					<div class="col-md-7" style="text-align: center;">
						<div>Produktüberschrift</div>
						<div>Kurzbeschreibung</div>
					</div>
					
					
					<div class="col-md-3" style="text-align: center;">
						<h4>Schulklasse</h4>
						<h4>Preis</h4>
					</div>		
				</div>
				
			</div>
	</div>
	
</body>
  
</html>