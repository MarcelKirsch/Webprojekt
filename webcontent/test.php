<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- <meta http-equiv="refresh" content="5" /> -->
<!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen-->
<title>BKBuy - Artikel verkaufen</title>

<!-- CSS Daten -->
<link href="../css/bootstrap.css" rel="stylesheet">
<link href="../css/bkbuy.css" rel="stylesheet">
<link href="../css/fileinput.css" media="all" rel="stylesheet"
	type="text/css" />

<!-- Script Daten -->
<script src="../js/jquery.js"></script>
<script src="../js/bootstrap.js"></script>
<script src="../js/fileinput.js"></script>
<script src="../js/locales/de.js"></script>


<style>
#table-description {
	font-size: medium;
}
</style>


<!-- Bilder hochladen, daten auslagern(!) -->
<script>
 	$(document).on('ready', function() {
	    $("#upload-pictures").fileinput({
	    	initialPreviewAsData: true,
	        deleteUrl: "/site/file-delete",
	        overwriteInitial: false,
	        autoReplace: true,
	        maxFileCount: 10,
	        allowedFileExtensions: ["jpg", "png", "jpeg"],
	        maxFileSize: 5120,

	    });
	});
</script>


</head>

<body>

	<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
		<div class="container-fluid">


			<div class="navbar-header">
				<div class="container container-header">
					<!-- suchleiste mittig einfügen -->
					<!-- buttons zu den anderen seiten einfügen -->
					<!-- button profil mit diesem dropdown fertig stellen -->

					<!-- Logo -->
					<a class="navbar-brand" href="../webcontent/startseite.php"> <img
						src="../img/logo_trans.png" class="logo">
					</a>


					<!-- Suchleiste -->
					<form class="navbar-form navbar-left" role="search">
						<div class="form-group input-group-lg searchbar">
							<input type="text" style="width: 90%" class="form-control"
								placeholder="Suchen">
							<button type="submit" class="btn btn-default btn-lg">Los</button>
						</div>
					</form>


					<button type="button" class="btn btn-default button-anzeige">Artikel
						einstellen</button>


					<!-- Profilobjekt rechts -->
					<div class="profilbutton"></div>
				</div>
			</div>
		</div>
	</nav>


	<!-- Seiteninhalt -->
	<div class="container">



		<form action="../php/createarticle.php" method="post">
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
							<div>- anpassungen der attribute haben keine auswirkung</div>
							<div>- mehrere Bilder können mithilfe von STRG + LINKE_MAUSTASTE
								ausgewählt werden</div> <a
							href="http://plugins.krajee.com/file-krajee-explorer-demo#krajee-explorer-1"
							target="_blank">Quelle</a> <!-- <label class="control-label">Produktbild hochladen</label> -->
							<input id="upload-pictures" name="upload-pictures[]" type="file"
							class="file-loading" accept="image/*" multiple>
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
			<input type="submit" name=ok class="btn btn-success" value="Bestätigen"> <input
				type="submit" class="btn btn-warning" value="Löschen"> <a
				href="../webcontent/startseite.php"> <input type="submit"
				class="btn btn-danger" value="Abbrechen">
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
						<button type="button" name = "ok" class="btn btn-default" data-dismiss="modal">OK</button>
					</div>
				</div>
				<!-- /.modal-content -->
			</div>
			<!-- /.modal-dialog -->
		</div>
		<!-- /.modal -->



		<script> 
 		$(document).ready(function(){


			$('#modaldialog').dialog({
		        modal: true,
 		        autoOpen: false,
 			});
		            	
		 $('#ok').on('click', function() {
 		        var name = $('#productname').val();
		        var email = $('#productdescription').val();
		        var subject = $('#productprice').val();
		        $.ajax({
 		            success: function() {
		                $('#dmodaldialog').dialog('open');
// 		            }
// 		        });
// 		    });
// 		});

		</script>


	</div>

</body>

</html>