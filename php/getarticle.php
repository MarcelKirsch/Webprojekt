<?php 
include ("connectdb.php");
$conn->set_charset ( 'utf8' );


//select * from produkte where Produktname LIKE 'G%'

	
	$produktid = $_GET["id"];
	$sql = "SELECT * FROM produkte WHERE ProduktID = '$produktid'";
	
	$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );
	if (! $db_erg) {
		die ( 'Ungültige Abfrage...' );
	}
	
	while ( $zeile = mysqli_fetch_array ( $db_erg ) ) {
	
			
			echo '
				<div class="container">
		
		<div class="row container-body">
			
			<h1>'.$zeile['Produktname'].', '.$zeile['Preis'].'€</h1>
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
						
						<h4>Verkäufer: Jonathan Huerkamp</h4>
						<h4>Schulklasse: DT21 </h4>
						
					</div>
				</div>
			</div>
			
			
			<!-- Benutzerbeschreibung -->
			<div class="col-md-12">
				<h2>Benutzerbeschreibung</h2>
				<div class="artikel-beschreibung">'.$zeile['Beschreibung'].'</div>
			</div>
		</div>	
			 ';
		
			
		

	
	
	
	
	
	
}
mysqli_free_result ( $db_erg );

?>