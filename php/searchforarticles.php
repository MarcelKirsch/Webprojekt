<?php 
include ("connectdb.php");
$conn->set_charset ( 'utf8' );


//select * from produkte where Produktname LIKE 'G%'
if(isset($_POST['suchego']))
{
	$search = $_POST ["search"];
	
	$sql = "SELECT * FROM produkte";
	
	$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );
	if (! $db_erg) {
		die ( 'Ungültige Abfrage...' );
	}

	while ( $zeile = mysqli_fetch_array ( $db_erg ) ) {
	
			$name = strtolower($zeile['Produktname']);
			$search = strtolower($search);
		
			
			if(strpos($name,$search)!==false){
			echo '
				<div class="row suchergebnis">
					<div class="col-md-2 col-center">
						<img class="artikelsuchebild" src="data:image/jpeg;base64,'.base64_encode($zeile['Thumbnail']).'">
					</div>
					
					
					<div class="col-md-7" style="text-align: center;">
						<div><b>'.$zeile['Produktname'].'</b></div>
						<div>'.$zeile['Beschreibung'].'</div>
					</div>
					  
					
					<div class="col-md-3">
						<table>
						<tr><th><h4>Verkäufer</h4></th><td><h5 id="tabelle_text">'.$_SESSION['prename'].',<br>'.$_SESSION['afternamelol'].'</h5></td></tr>
						<tr><th><h4>Klasse</h4></th><td><h5 id="tabelle_text">'.$_SESSION['klasse'].'</h5></td></tr>
						<tr><th><h4>Preis</h4></th><td><h5 id="tabelle_text">'.$zeile['Preis'].'&#8364</h5></td></tr>
						</table>					
					</div>
				</div>		
			 ';
			}
		

	}
	
	
	mysqli_free_result ( $db_erg );
	
	
}


?>