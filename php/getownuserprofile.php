<?php 
include ("connectdb.php");

$conn->set_charset ( 'utf8' );

$sql = "SELECT * FROM produkte";

$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );
if (! $db_erg) {
	die ( 'Ungültige Abfrage...' );
}

$i = 0;
while ( $zeile = mysqli_fetch_array ( $db_erg ) ) {
	
	if($i<1){
		echo'
				
		<div class="container">
			<div class="container-body">

			<!-- Profilbild und Username, Klasse -->
			<div class="row" id="benutzerseite">
				
				<!-- Profilbild -->
				<div class="col-md-2">
					<img src="../img/Flash.jpg" alt="Logo" id="profilbild-benutzer">
				
				</div>
				
				<!-- Username, Schulklasse -->
				<div class="col-md-10" style="text-align: left; padding-left: 35px; font-size: 22px">
					<table>
						<tr><th><b>Benutzername:</b></th><td id="tabelle_text">'.$_SESSION['user'].'</td></tr>
						<tr><th><b>Vorname:</b></th><td id="tabelle_text">'.$_SESSION['prename'].','.$_SESSION['afternamelol'].'</td></tr>
						<tr><th><b>Nachname:</b></th><td id="tabelle_text">'.$_SESSION['klasse'].'</td></tr>
					</table>
				</div>
			</div>
							
			<hr>
							
			<div class="row" id="verkauferartikel-benutzer">
			<h2>Ein Artikel von dir</h2>
							
							
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
							<div class="item active" style="max-height: 320px; max-width: 570px;">
								<img class="slide-image" src="../piimg/raspi2/Produktbild1.jpg" alt="">
							</div>
							<div class="item" style="max-height: 320px; max-width: 570px;">
								<img class="slide-image" src="../piimg/raspi2/Produktbild2.jpg" alt="">
							</div>
							<div class="item" style="max-height: 320px; max-width: 570px;">
								<img class="slide-image" src="../piimg/raspi2/Produktbild3.jpg" alt="">
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
					<div class="artikel-beschreibung">
					<b>'.$zeile['Produktname'].'</b>
					<br>
					<br>
					'.$zeile['Beschreibung'].'
					</div>
				</div>
			</div>
		</div>
	</div>
		';
		$i++;
	}
	else{
		break;
	}
	
	
	} 
	// print($i);



mysqli_free_result ( $db_erg );


?>