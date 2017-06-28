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
			<!-- Profilbild und Username, Klasse -->
			<div class="row" id="benutzerseite">
				
				<!-- Profilbild -->
				<div class="col-md-2">
					<img src="../img/Flash.jpg" alt="Logo" id="profilbild-benutzer">
				
				</div>
				
				<!-- Username, Schulklasse -->
				<div class="col-md-10" style="text-align: center">
					<div>'.$_SESSION['user'].'</div>
					<div>'.$_SESSION['prename'].','.$_SESSION['afternamelol'].'</div>
					<div>'.$_SESSION['klasse'].'</div>
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
					<div class="artikel-beschreibung">
					<b>'.$zeile['Produktname'].'</b>
					<br>
					<br>
					'.$zeile['Beschreibung'].'
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