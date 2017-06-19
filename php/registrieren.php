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
	
 	$query = $conn->query ("SELECT * FROM benutzer WHERE Benutzername = '$username'");

 	if(empty($username) OR empty($password) OR empty($email) OR empty($prename) OR empty($afternamelol) OR empty($schoolclass))
 	{
 	print("Bitte Pflichtfelder (*) ausfüllen!");
	}
	
	elseif ($query->num_rows != 0){
		//Meldung für vergebenen Benutzer
		print("Benutzer schon vergeben!");
	}
	elseif(strlen($password) < 6){
		print("Passwort muss mindestens 5 Zeichen haben.");
	}
	else{
		//Passwort verschlüsseln wa
		$password = md5($password);
		
		$stmt = $conn->prepare("INSERT INTO benutzer (Benutzername,Email,Passwort,Vorname,Nachname,Klasse) VALUES (?,?,?,?,?,?)");
		
		$stmt->bind_param('ssssss', $username,$email,$password,$prename,$afternamelol,$schoolclass);

		$stmt->execute();
		
		$stmt->close();
	}
}

?>