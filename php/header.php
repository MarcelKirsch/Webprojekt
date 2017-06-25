<?php include '..\php\modal_registrierung.php';?>
<?php include '..\php\modal_password_reset.php';?>

<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
	<div class="container-fluid">
                        
 			
			<div class="navbar-header">
			<div class="container container-header">
				    
				<!-- Logo -->
				<a class="navbar-brand" href="../webcontent/startseite.php">
					<img src="../img/logo_trans.png" class="logo">
				</a>


				<!-- Suchleiste -->
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group input-group-lg searchbar">
						<input type="text" style="width: 90%" class="form-control" placeholder="Suchen">
						<button type="submit" class="btn btn-default btn-lg">Los</button>	
					 </div>
				</form>
		     
				<a href="..\webcontent\artikel-verkaufen.php">
				<button type="button" class="btn btn-default button-anzeige">Artikel einstellen</button>
				</a>
		     
				
				<ul class="nav navbar-nav navbar-right" id="profilbutton-class">
					<li class="dropdown">
			                    <a href="#" class="profilbutton dropdown-toggle" data-toggle="dropdown"></a>
			                    
			                    <!-- ABFRAGE FÜR DROPDOWN: ANGEMELDET / NICHT ANGEMELDET -->
						</li>
					</ul>
			</div>
		</div>
	</div>
</nav>