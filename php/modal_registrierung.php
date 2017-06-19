
<div class="modal fade" id="modal-registrieren">
<?php include '..\php\meta-attributes.php';?>
 <?php include '..\php\registrieren.php';?>
  <div class="modal-dialog" style="width: 100%;">
  <form method ="POST">
    <div class="modal-content" style="width: 100%;">
      <div class="modal-header" style="width: 100%;">
        <button type="button" class="close" data-dismiss="modal" aria-label="Schlieﬂen"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Registrieren</h4>
      </div>
      <div class="modal-body" style="width: 100%;">
			<div class="input-group col-centered" style="width: 100%; margin: 0 auto">

			      
			      	<div class="row">
			      	
			      		<div class="col-md-6">
							<h4>Benutzername</h4>
							<input type="text" class="form-control" name = "username" aria-describedby="groessen-addon2"><br><br>
							
							<h4>Passwort</h4>
							<input type="password" class="form-control" name = "password" aria-describedby="groessen-addon2"><br><br>
							
							<h4>EMail Adresse</h4>
							<input type="text" class="form-control" name = "email" aria-describedby="groessen-addon2"><br><br>
						</div>
						<div class="col-md-6">
							<h4>Vorname</h4>
							<input type="text" class="form-control" name = "prename"  aria-describedby="groessen-addon2"><br><br>
												
							<h4>Nachname</h4>
							<input type="text" class="form-control" name = "afternamelol" aria-describedby="groessen-addon2"><br><br>
							
							<h4>Klasse</h4>
							<input type="text" class="form-control" name = "schoolclass" aria-describedby="groessen-addon2"><br><br>
						</div>
					
					</div>
					<h4>Avatar</h4>
					<input id="upload-pictures" name="upload-pictures[]" type="file"
					class="file-loading" accept="image/*">
					
		</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Schlieﬂen</button>
        <input type="submit" name="ok" class="btn btn-success" value="Registrieren">
      
      </div>
    </div>
      </form>
  </div>
 
</div>