<?php 

// TODO: Ausgew�hltes Bild in die Datenbank hochladen
// TODO: Kategorie als ID im Fremdschl�ssel speichern...
// TODO: Bei erfolgreichem eintragen in die Datenbank eine Best�tigung hinzuf�gen

include ("connectdb.php");
$conn->set_charset ( 'utf8' );

$productname = $_POST["productname"];
$productdescription = $_POST["productdescription"];
$productprice= $_POST["productprice"];
$kategorie = $_POST["kategorie"];



$sql = "INSERT INTO produkte (Produktname, Preis, Beschreibung) VALUES ('$productname', '$productprice', '$productdescription')";


$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );
if (! $db_erg) {
	die ( 'Ung�ltige Abfrage...' );
}

?>