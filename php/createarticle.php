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


$stmt = $conn->prepare("INSERT INTO produkte (Produktname, Preis,Beschreibung) VALUES (?,?,?)");
$stmt->bind_param('sss', $productname, $productprice, $productdescription);



$stmt->execute();





$stmt->close();
}
?>