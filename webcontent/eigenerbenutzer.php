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

			<?php include("../php/getownuserprofile.php")?>
		</div>
	</div>
	<?php include '..\php\footer.php';?>
</body>
  
</html>