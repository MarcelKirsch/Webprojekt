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
	<?php include '..\php\modals_meldungen.php';?>
	
	<!-- Seiteninhalt -->
	<div class="container">
		<div class="row container-body" style="padding-top: 10px;">
		
			<div class="col-md-3">
				<p class="lead">Kategorien</p>
				<div class="list-group">
					<?php include("../php/getcategories.php");?>
				</div>
			</div>


			<!-- Suchinhalte -->
			<div class="col-md-9">
					<div class="input-group" id="artikel-suche-suchleiste">
							<div class="input-group-btn">
								<input type="text" class="form-control" aria-label="..." style="max-width: 500px;">
								<button class="btn btn-default">Suchen</button>	
							</div>
					</div><br>
				
				
				<!-- Artikelansichten -->
				
					<?php include("../php/getuserproducts.php")?>		
				
				
			</div>
		</div>
	</div>
	<?php include '..\php\footer.php';?>
	
</body>
  
</html>