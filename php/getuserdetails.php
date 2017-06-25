<?php 
include ("connectdb.php");

$conn->set_charset ( 'utf8' );



$sql = "SELECT * FROM benutzer WHERE Benutzername = '$username'";

$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );
if (! $db_erg) {
	die ( 'Ungültige Abfrage...' );
}


$zeile = mysqli_fetch_array ( $db_erg );
	$vorname = $zeile['Vorname'];
	$nachname =$zeile['Nachname'];
?>