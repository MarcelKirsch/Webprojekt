<?php

// TODO: Ausgew�hltes Bild in die Datenbank hochladen
// TODO: Kategorie als ID im Fremdschl�ssel speichern...
// TODO: Bei erfolgreichem eintragen in die Datenbank eine Best�tigung hinzuf�gen
include ("connectdb.php");
$conn->set_charset ( 'utf8' );

if(isset($_POST["ok"])){
$productname = $_POST ["productname"];
$productdescription = $_POST ["productdescription"];
$productprice = $_POST ["productprice"];
$kategorie = $_POST ["kategorie"];


if(empty($productname) OR empty($productdescription) OR empty($productprice))
{
	print("Bitte alle Felder ausf�llen!");
}
else{

	$stmt = $conn->prepare("INSERT INTO produkte (Produktname, Preis,Beschreibung, KatID) VALUES (?,?,?,?)");
	$stmt->bind_param('ssss', $productname, $productprice, $productdescription, $kategorie);
	
	
	
	$stmt->execute();
	
	
	
	
	
	$stmt->close();
	
}

}
?>