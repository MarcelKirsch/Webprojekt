<?php 

include ("connectdb.php");
$conn->set_charset ( 'utf8' );
if(isset($_POST["ok"])){
	
	$username = $_POST ["username"];
	$password = $_POST ["password"];
	$email = $_POST ["email"];
	$prename = $_POST ["prename"];
	$afternamelol = $_POST ["afternamelol"];
	$schoolclass = $_POST ["schoolclass"];
	
	
	$image = addslashes(file_get_contents($_FILES['datei']['tmp_name']));
	
 	$query = $conn->query ("SELECT * FROM benutzer WHERE Benutzername = '$username'");

 	if(empty($username) OR empty($password) OR empty($email) OR empty($prename) OR empty($afternamelol) OR empty($schoolclass))
 	{
 	print("Bitte alles ausfüllen!");
	}
	
	elseif ($query->num_rows != 0){
		//Meldung f�r vergebenen Benutzer
		echo '
				<script type="text/javascript">
					$("#modal_meldung_06").modal("show");
				</script>
				';
	}
	elseif(strlen($password) < 6){
		echo '
				<script type="text/javascript">
					$("#modal_meldung_07").modal("show");
				</script>
				';
	}
	else{
		//Passwort verschlüsseln wa
		$password = md5($password);
		
		$stmt = $conn->prepare("INSERT INTO benutzer (Benutzername,Email,Passwort,Vorname,Nachname,Klasse,Avatar) VALUES (?,?,?,?,?,?,?)");
		
		$stmt->bind_param('sssssss', $username,$email,$password,$prename,$afternamelol,$schoolclass,$image);

		$stmt->execute();
		
		$stmt->close();
	}
}




?>