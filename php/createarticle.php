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

$image = addslashes(file_get_contents($_FILES['datei']['tmp_name']));

if(empty($productname) OR empty($productdescription) OR empty($productprice))
{
	echo '
			<script type="text/javascript">
				$("#modal_meldung_01").modal("show");
			</script>
			';
}
else{

	$stmt = $conn->prepare("INSERT INTO produkte (Produktname, Preis,Beschreibung, KatID,Thumbnail) VALUES (?,?,?,?,?)");
	$stmt->bind_param('ssssb', $productname, $productprice, $productdescription, $kategorie,$image);

	$stmt->send_long_data(4,$image);
	$stmt->execute();

	$stmt->close();

}

}
?>