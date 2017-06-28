<!DOCTYPE html>
<html lang="de">
<head>
	<?php include '..\php\meta-attributes.php';?>
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<title>BKBuy - Verkaufen</title>
	<?php include '..\php\CSS_Skripte.php';?>
</head>

<body>

	<?php include '..\php\header.php';?>
	<?php include '..\php\modals_meldungen.php';?>
	<?php include '..\php\createarticle.php';?>
	<!-- Seiteninhalt -->
	<div class="container">
		<div class="container-body">



			<form method="post" enctype="multipart/form-data">
				<h1>Artikel verkaufen</h1>

				<table class="table">
					<thead>
						<tr>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td id="table-description">Produktname</td>
							<td><input type="text" class="form-control" name="productname"
								id="product-name"></td>
						</tr>
						<tr>
							<td id="table-description">Produktbeschreibung</td>
							<td><textarea class="form-control" rows="3"
									name="productdescription" id="product-description"></textarea></td>
						</tr>
						<tr>
							<td id="table-description">Preis</td>
							<td>
								<div class="input-group">
									<input type="text" class="form-control" name="productprice"
										id="product-price"> <span class="input-group-addon">€</span>
								</div>
							</td>
						</tr>
						<tr>
							<td id="table-description">Produktbilder</td>
							<td>
							
						  		<label>
							    	<input name="datei" type="file" size="5120" accept="image/*" multiple> 
						  		</label>  
							</td>
						</tr>
						<tr>
							<td id="table-description">Kategorie</td>
							<td><select class="form-control" name="kategorie" id="sel1">
								<?php include ("../php/getcategoriesart.php");?>
							</select></td>
						</tr>
					</tbody>
				</table>	
				<input type="submit" name="ok" class="btn btn-success" value="Bestätigen">
				<input type="reset" class="btn btn-warning" value="Löschen"> 
				<a href="..\webcontent\startseite.php"> 
					<input type="button" class="btn btn-danger" value="Abbrechen">
				</a>
			</form>


			<div class="modal fade" name=modaldialog tabindex="-1" role="dialog">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal"
								aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<h4 class="modal-title">Modal title</h4>
						</div>
						<div class="modal-body">
							<p>One fine body&hellip;</p>
						</div>
						<div class="modal-footer">
							<button type="button" name="ok" class="btn btn-default"
								data-dismiss="modal">OK</button>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
	
	<?php include '..\php\footer.php';?>
</body>

</html>