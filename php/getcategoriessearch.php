<?php 
include ("connectdb.php");

$conn->set_charset ( 'utf8' );

$sql = "SELECT * FROM kategorie";

$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );
if (! $db_erg) {
	die ( 'Ungültige Abfrage...' );
}

// <option value="' . $zeile ['KatID'] . '"> ' . $zeile ['Katname'] . ' </option>

while ( $zeile = mysqli_fetch_array ( $db_erg ) ) {
	
	echo '	
		<li><a value="'.$zeile ['KatID']. '"> '.$zeile ['Katname']. '</a></li>
	';
}

mysqli_free_result ( $db_erg );
?>