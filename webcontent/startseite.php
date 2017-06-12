<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <meta http-equiv="refresh" content="5" /> -->
    <!-- Die 3 Meta-Tags oben *müssen* zuerst im head stehen-->
    <title>BKBuy - Startseite</title>

    <!-- CSS Daten -->
	<link href="../css/bootstrap.css" rel="stylesheet">
	<link href="../css/bkbuy.css" rel="stylesheet">
	
	<!-- Script Dateien -->
	<script src="../js/jquery.js"></script>
    <script src="../js/bootstrap.js"></script>
    
    <!-- PHP Dateien -->
	
    
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
				     
				     
				     <button type="button" class="btn btn-default button-anzeige">Artikel einstellen</button>
				     
					
					<!-- Profilobjekt rechts -->
					<div class="profilbutton"></div>
				</div>
			</div>
        </div>
	</nav>

    <!-- Navigationsbar Links -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Kategorien</p>
                <div class="list-group">
                   <?php include("../php/getcategories.php");?>
                    <!--    <a href="#" class="list-group-item">Category 3</a> -->
                </div>
            </div>

			<!-- Seiten Inhalt -->
            <div class="col-md-9">

                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                                <div class="item">
                                    <img class="slide-image" src="http://placehold.it/800x300" alt="">
                                </div>
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

				<!-- Einzelprodukte -->
                <div class="row">

					<?php include("../php/getproductsstart.php");?>
<!--                     <div class="col-sm-4 col-lg-4 col-md-4"> -->
<!--                         <div class="thumbnail"> -->
<!--                             <img src="http://placehold.it/320x150" alt=""> -->
<!--                             <div class="caption"> -->
<!--                                 <h4 class="pull-right">$64.99</h4> -->
<!--                                 <h4><a href="#">Second Product</a> -->
<!--                                 </h4> -->
<!--                                 <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
<!--                             </div> -->
<!--                         </div> -->
<!--                     </div> -->

<!--                     <div class="col-sm-4 col-lg-4 col-md-4"> -->
<!--                         <div class="thumbnail"> -->
<!--                             <img src="http://placehold.it/320x150" alt=""> -->
<!--                             <div class="caption"> -->
<!--                                 <h4 class="pull-right">$74.99</h4> -->
<!--                                 <h4><a href="#">Third Product</a> -->
<!--                                 </h4> -->
<!--                                 <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
<!--                             </div> -->
<!--                         </div> -->
<!--                     </div> -->

<!--                     <div class="col-sm-4 col-lg-4 col-md-4"> -->
<!--                         <div class="thumbnail"> -->
<!--                             <img src="http://placehold.it/320x150" alt=""> -->
<!--                             <div class="caption"> -->
<!--                                 <h4 class="pull-right">$84.99</h4> -->
<!--                                 <h4><a href="#">Fourth Product</a> -->
<!--                                 </h4> -->
<!--                                 <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
<!--                             </div> -->
<!--                         </div> -->
<!--                     </div> -->

<!--                     <div class="col-sm-4 col-lg-4 col-md-4"> -->
<!--                         <div class="thumbnail"> -->
<!--                             <img src="http://placehold.it/320x150" alt=""> -->
<!--                             <div class="caption"> -->
<!--                                 <h4 class="pull-right">$94.99</h4> -->
<!--                                 <h4><a href="#">Fifth Product</a> -->
<!--                                 </h4> -->
<!--                                 <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
<!--                             </div> -->
<!--                         </div> -->
<!--                     </div> -->

<!--                     <div class="col-sm-4 col-lg-4 col-md-4"> -->
<!--                         <div class="thumbnail"> -->
<!--                             <img src="http://placehold.it/320x150" alt=""> -->
<!--                             <div class="caption"> -->
<!--                                 <h4 class="pull-right">$94.99</h4> -->
<!--                                 <h4><a href="#">Sixt Product</a> -->
<!--                                 </h4> -->
<!--                                 <p>This is a short description. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
<!--                             </div> -->
<!--                         </div> -->
<!--                     </div> -->

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; BKBuy 2017</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->


</body>
  
</html>