<?php 

include ("connectdb.php");

$conn->set_charset('utf8');

$sql = "SELECT * FROM produkte";

$db_erg = mysqli_query($conn, $sql) or die (mysqli_error($conn));
if ( ! $db_erg )
{
	die('Ung�ltige Abfrage...');
}


$i = 0;
while ($zeile = mysqli_fetch_array( $db_erg))
{
	$i++;
	if($i <=6)
	{
    print(" <div class=\"col-sm-4 col-lg-4 col-md-4\"> ");
	print(" <div class=\"thumbnail\"> ");
	//print(" <img src=\"data:image/jpeg;base64\".base64_encode( $zeile[Thumbnail] ) alt=\"\"> ");
	print(" <div class=\"caption\"> ");
	print(" <h4 class=\"pull-right\"> $zeile[Preis] </h4> ");
	print(" <h4><a href=\"#\"> $zeile[Produktname] </a> ");
	print(" </h4> ");
	print(" <p> $zeile[Beschreibung] </p> ");
	print(" </div> ");
	print(" </div> ");
	print(" </div> ");
	}
	else{
		break;
	}
	//print($i);
}


mysqli_free_result( $db_erg );


?>