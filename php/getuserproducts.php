<?php 
include ("connectdb.php");

$conn->set_charset ( 'utf8' );

$sql = "SELECT * FROM produkte WHERE BenutzerID = '$_SESSION[benutzerid]'";

$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );
if (! $db_erg) {
	die ( 'Ungültige Abfrage...' );
}

$i = 0;
while ( $zeile = mysqli_fetch_array ( $db_erg ) ) {
	
		if($_SESSION['user'] == "timob"){
			
			echo'
				<div class="row suchergebnis">
					<div class="col-md-2 col-center">
						<img class="artikelsuchebild" src="../img/Artikelbild.jpg">
					</div>
					
					
					<div class="col-md-7" style="text-align: center;">
						<div><a href=#><b>'.$zeile['Produktname'].'</b></a></div>
						<div>'.$zeile['Beschreibung'].'</div>
					</div>
					  
					
					<div class="col-md-3">
						<table>
						<tr><th><h4>Klasse</h4></th><td><h5 id="tabelle_text">'.$_SESSION['klasse'].'</h5></td></tr>
						<tr><th><h4>Preis</h4></th><td><h5 id="tabelle_text">'.$zeile['Preis'].'&#8364</h5></td></tr>
						</table>					
					</div>
				</div>
			';
			
		}
			else{
				echo '
				<div class="row suchergebnis">
					<div class="col-md-2 col-center">
						<img class="artikelsuchebild" src="data:image/jpeg;base64,'.base64_encode($zeile['Thumbnail']).'">
					</div>
								
								
					<div class="col-md-7" style="text-align: center;">
						<div><a href=#><b>'.$zeile['Produktname'].'</b></a></div>
						<div>'.$zeile['Beschreibung'].'</div>
					</div>
								
								
					<div class="col-md-3">
						<table>
						<tr><th><h4>Klasse</h4></th><td><h5 id="tabelle_text">'.$_SESSION['klasse'].'</h5></td></tr>
						<tr><th><h4>Preis</h4></th><td><h5 id="tabelle_text">'.$zeile['Preis'].'&#8364</h5></td></tr>
						</table>
					</div>
				</div>
			 ';
			}

	
		
	
	// print($i);
}


mysqli_free_result ( $db_erg );
?>