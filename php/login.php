<?php 
session_start();
include ("connectdb.php");
include '..\php\modals_meldungen.php';
$conn->set_charset ( 'utf8' );

if(isset($_POST["login-submit"])){
	$username = $_POST ["username"];
	$password = $_POST ["password"];
	$vorname;
	$nachname;
	
	
	if(empty($username) OR empty($password))
	{
		echo '
				<script type="text/javascript">
					$("#modal_meldung_02").modal("show");
				</script>
				';
	}
	
	else{
		
		$query = $conn->query("SELECT * FROM benutzer WHERE Benutzername = '$username' AND Passwort = md5('$password')");
		
		if($query->num_rows == 0)
		{
			echo '
				<script type="text/javascript">
					$("#modal_meldung_03").modal("show");
				</script>
				';
		}
		else{
			$_SESSION['loggedin'] = True;
			$_SESSION['user'] = $username;
			
			
			
			
			echo '
				<script type="text/javascript">
					$("#modal_meldung_04").modal("show");
				</script>				
				';
			
			$sql = "SELECT * FROM benutzer WHERE Benutzername = '$username'";
			
			
			$db_erg = mysqli_query ( $conn, $sql ) or die ( mysqli_error ( $conn ) );
			if (! $db_erg) {
				die ( 'Ungültige Abfrage...' );
			}
			
			while ( $zeile = mysqli_fetch_array ( $db_erg ) ) {
				// print (" <option value="$zeile['KATID']"> $zeile[Katname] </option> ") ;
				
				$_SESSION['prename']= $zeile['Vorname'];
				$_SESSION['afternamelol']= $zeile['Nachname'];
				
		
	
			}
			
			
			
			mysqli_free_result ( $db_erg );
			
			
			//Hier SQL Abfrage von allen Benutzerdaten!
			
		}
}
}
?>