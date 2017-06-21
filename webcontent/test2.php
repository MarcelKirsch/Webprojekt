<!DOCTYPE html>
<html lang="de">
  <head>
	<?php include '..\php\meta-attributes.php';?>
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<title>BKBuy - Test</title>
	<?php include '..\php\CSS_Skripte.php';?>	
</head>

  
<body>

	<?php include '..\php\header.php';?>
	
	<div class="container"><br><br>
	
	
		<!-- Button, der das Modal aufruft -->
		<button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#modal_meldung_02">
		  Modal-Beispiel anzeigen
		</button>
		
		<!-- Modal -->
		<div class="modal fade" id="modal_meldung_01" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Schlieﬂen"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="meinModalLabel">Meldung von der Webseite</h4>
		      </div>
		      <div class="modal-body">
		        Bitte alle Felder ausf¸llen
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Schlieﬂen</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="modal_meldung_02" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Schlieﬂen"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="meinModalLabel">Meldung von der Webseite</h4>
		      </div>
		      <div class="modal-body">
		        Bitte geben Sie Benutzername und Passwort ein
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Schlieﬂen</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="modal_meldung_03" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Schlieﬂen"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="meinModalLabel">Meldung von der Webseite</h4>
		      </div>
		      <div class="modal-body">
		        Benutzername und/oder Passwort ist falsch.
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Schlieﬂen</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="modal_meldung_04" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Schlieﬂen"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="meinModalLabel">Meldung von der Webseite</h4>
		      </div>
		      <div class="modal-body">
		        Erfolgreich eingeloggt!
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Schlieﬂen</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="modal_meldung_05" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Schlieﬂen"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="meinModalLabel">Meldung von der Webseite</h4>
		      </div>
		      <div class="modal-body">
		        Bitte alle Felder ausf¸llen
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Schlieﬂen</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="modal_meldung_06" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Schlieﬂen"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="meinModalLabel">Meldung von der Webseite</h4>
		      </div>
		      <div class="modal-body">
		        Der Benutzer ist schon vergeben
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Schlieﬂen</button>
		      </div>
		    </div>
		  </div>
		</div>
		
		<div class="modal fade" id="modal_meldung_07" tabindex="-1" role="dialog" aria-labelledby="meinModalLabel">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-label="Schlieﬂen"><span aria-hidden="true">&times;</span></button>
		        <h4 class="modal-title" id="meinModalLabel">Meldung von der Webseite</h4>
		      </div>
		      <div class="modal-body">
		        Passwort muss mindestens 5 Zeichen lang sein
		      </div>
		      <div class="modal-footer">
		        <button type="button" class="btn btn-default" data-dismiss="modal">Schlieﬂen</button>
		      </div>
		    </div>
		  </div>
		</div>
				
	</div>
	

</body>
  
</html>