<?php include '..\php\modal_registrierung.php';?>

<?php include '..\php\login.php'?>
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
							placeholder="Suchen" style="min-width: 400px">
						<button type="submit"  name="suchego" class="btn btn-default btn-lg">Los</button>
					</div>
				</form>

				<?php if(!isset($_SESSION['loggedin'])){
					echo '
							<div class="navbar-nav" style="margin: 23px 0 0 500px;">
								<a href="../artikel-verkaufen.php">
									<button type="button" disabled class="btn btn-default" disabled>Artikel
									einstellen</button>
								</a>
							</div>
						 ';
				}
				else{
					echo '
							<div class="navbar-nav" style="margin: 23px 0 0 500px;">
								<a href="../artikel-verkaufen.php">
									<button type="button" class="btn btn-default">Artikel
									einstellen</button>
								</a>
							</div>
						 ';
				}?>

				<ul class="nav navbar-nav navbar-right" id="profilbutton-class">
								 <?php
									if (! isset ( $_SESSION ['loggedin'] )) {
										echo '
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
										';
									} else {
									echo '
								<li class="dropdown"><a href="#"
									class="profilbutton dropdown-toggle" data-toggle="dropdown" style=background-image:url("../img/Flash.jpg"); background-position: center; background-size: cover;></a>
									<ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu" style="width: 250px">
										<div class="text-center border" id="dropdown-css"><h4><b>Kontrollzentrum</b></h4></div>
											<div class="col-md-12">
												<div class="form-group">
													<div class="row ">
														<div class="col-md-3" style="padding: 0; margin: 0;">
															<div class="profilbild" style=background-image:url("../img/Flash.jpg")></div>
															</div>
															<div class="col-md-9">
																<h5>'.$_SESSION['prename'].', '.$_SESSION['afternamelol'].'</h5>
																<a href="../webcontent/eigenerbenutzer.php"><h5>Mein Profil</h5></a>
															</div>
													</div>
													<hr>
												</div>
												<div class="form-group">
													<div class="row ">
														<div class="col-md-3">
															<span class="glyphicon glyphicon-list-alt" style="font-size: 4.2rem;" aria-hidden="true"></span>
														</div>
														<div class="col-md-9 pull-left">
															</h2><a href="..\webcontent\benutzerartikel.php"><h5>Meine Artikel</h5></a>
														</div>
													</div>
												</div> <hr>
											</div>
												<div class="text-center">
												<a href="../php/logout.php">												
													<div class="btn btn-danger" style="min-width: 140px; margin: 0 0 8px 0">
					                        		Abmelden </div>
												</a>
				                        	</div>
										</div>
									</ul>
									</li>'
						                                				                                			
                                   ;}
									?>
			                    
						
				</ul>
			</div>
		</div>
	</div>
</nav>