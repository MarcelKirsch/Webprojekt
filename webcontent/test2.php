<!DOCTYPE html>
<html lang="de">
  <head>
	<?php include '..\php\meta-attributes.php';?>
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<title>BKBuy - Test</title>
	<?php include '..\php\CSS_Skripte.php';?>	
</head>

  
<body>
<nav class="navbar navbar-fixed-top navbar-default" role="navigation">
	<div class="container-fluid">


		<div class="navbar-header">
			<div class="container container-header">

				<!-- Logo -->
				<a class="navbar-brand" href="../webcontent/startseite.php"> <img
					src="../img/logo_trans.png" class="logo">
				</a>
				
				<form class="navbar-form navbar-left"  method="post"  enctype="multipart/form-data">
					<div class="form-group input-group-lg searchbar">
						<input type="text" name="search" class="form-control"
							placeholder="Suchen">
						<button type="submit"  name="suchego" class="btn btn-default btn-lg">Los</button>
					</div>
				</form>
				
				<div class="navbar-nav border" style="margin: 22px 0 0 350px;">
					<a href="../artikel-verkaufen.php">
						<button type="button" class="btn btn-default" disabled>Artikel
						einstellen</button>
					</a>
				</div>

				<ul class="nav navbar-nav navbar-right" id="profilbutton-class">
					<li class="dropdown"><a href="#"
					class="profilbutton dropdown-toggle" data-toggle="dropdown"></a>                                      
						<ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu" style="width: 250px">
                            	<div class="text-center border" style="border: 1px solid #e3e3e3; margin: -7px 0 12px 0; background-color: #e3e3e3"><h4><b>Anmelden</b></h4></div>
                        	<div class="col-md-12">
                          
                            <form id="ajax-login-form" action="#" method="post" role="form" autocomplete="off">
                                <div class="form-group">
                                    <label for="username">Benutzername</label>
                                    <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Benutzername" value="" autocomplete="off">

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Password" autocomplete="off">
                                				                                	
                                </div>
								
	                                <div class="form-group" style="margin: 30px 0">
	                                    	<div class="col-md-12">
	                                            <input type="submit" name="login-submit" tabindex="3" class="form-control btn btn-success" value="Einloggen">
	                                        </div>
	                                	</div>    
	                                 
                            </form>
                    			<div style="text-align: center; margin-top: 70px" data-toggle="modal" data-target="#modal-registrieren">
                    			Neu hier? <a href="#">Tritt uns bei!</a></div>
	                        </div>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</div>
</nav>
	
	<div class="container">
		
		
	</div>

</body>
  
</html>