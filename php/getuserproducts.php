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
	$i ++;
	if ($i <= 6) {
		
		
		
		echo '
				<div class="row suchergebnis">
					<div class="col-md-2 col-center">
						<img class="artikelsuchebild" src="data:image/jpeg;base64,'.base64_encode($zeile['Thumbnail']).'">
					</div>
					
					
					<div class="col-md-7" style="text-align: center;">
						<div><b>'.$zeile['Produktname'].'</b></div>
						<div>'.$zeile['Beschreibung'].'</div>
					</div>
					  
					
					<div class="col-md-3" style="text-align: center;">
						<h4>'.$_SESSION['klasse'].'</h4>
						<h4>'.$zeile['Preis'].'&#8364</h4>
					</div>
				</div>		
			 ';
	} else {
		break;
	}
	// print($i);
}


mysqli_free_result ( $db_erg );
?>