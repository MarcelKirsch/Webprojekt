<?php 
include ("connectdb.php");

$conn->set_charset('utf8');

$sql = "SELECT Katname FROM kategorie";

$db_erg = mysqli_query($conn, $sql) or die (mysqli_error($conn)); 
if ( ! $db_erg )
{
	die('Ungültige Abfrage...');
}


while ($zeile = mysqli_fetch_array( $db_erg))
{
	print($zeile['Katname']);
}


mysqli_free_result( $db_erg );

?>