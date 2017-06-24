<?php 
include("connectdb.php");

$conn->set_charset ( 'utf8' );

$sql = "SELECT * FROM produkte";

$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );


// <img class="slide-image" src="data:image/jpeg;base64,'.base64_encode($zeile['Thumbnail']). '"/>

$i = 0;
while ( $zeile = mysqli_fetch_array ( $db_erg ) ) {
	$i ++;
	if ($i <= 3) {
		
		if ($i<2){
			echo'<div class="item active">
		     <img class="slide-image" src="data:image/jpeg;base64,'.base64_encode($zeile['Thumbnail']). '"/>
			 </div>';
		}
		else{
			echo'<div class="item">
		     <img class="slide-image" src="data:image/jpeg;base64,'.base64_encode($zeile['Thumbnail']). '"/>
			 </div>';
		}
		
	} else {
		break;
	}
	// print($i);
}

?>