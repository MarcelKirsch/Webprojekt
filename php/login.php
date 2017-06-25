<?php 
session_start();
include ("connectdb.php");
$conn->set_charset ( 'utf8' );

if(isset($_POST["login-submit"])){
	$username = $_POST ["username"];
	$password = $_POST ["password"];
	
	
	
	if(empty($username) OR empty($password))
	{
		print("Bitte geben sie Benutzername & Password ein.");
	}
	
	else{
		
		$query = $conn->query("SELECT * FROM benutzer WHERE Benutzername = '$username' AND Passwort = md5('$password')");
		
		if($query->num_rows == 0)
		{
			print("Benutzername und/oder Kennwort ist falsch.");
		}
		else{
			$_SESSION['loggedin'] = True;
			$_SESSION['user'] = $username;
			
			echo ' "Wilkommen" '.$username .' ';
		}
}
	
}

if(!isset($_SESSION['loggedin'])){
	
}
else{
	
}

?>