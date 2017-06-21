<!DOCTYPE html>
<html lang="de">
  <head>
	<?php include '..\php\meta-attributes.php';?>
	<!-- <meta http-equiv="refresh" content="5" /> -->
	<title>BKBuy - Startseite</title>
	<?php include '..\php\CSS_Skripte.php';?>
</head>

<body>

	<?php include '..\php\header.php';?>
	<?php include '..\php\modals_meldungen.php';?>

	<div class="container">
		<div class="container-body" id="container-body-startseite">
	
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
							<div id="carousel-example-generic" class="carousel slide"
								data-ride="carousel">
								<ol class="carousel-indicators">
									<li data-target="#carousel-example-generic" data-slide-to="0"
										class="active"></li>
									<li data-target="#carousel-example-generic" data-slide-to="1"></li>
									<li data-target="#carousel-example-generic" data-slide-to="2"></li>
								</ol>
								<div class="carousel-inner">
									<div class="item active">
										<img class="slide-image" src="http://placehold.it/800x300"
											alt="">
									</div>
									<div class="item">
										<img class="slide-image" src="http://placehold.it/800x300"
											alt="">
									</div>
									<div class="item">
										<img class="slide-image" src="http://placehold.it/800x300"
											alt="">
									</div>
								</div>
								<a class="left carousel-control" href="#carousel-example-generic"
									data-slide="prev"> <span
									class="glyphicon glyphicon-chevron-left"></span>
								</a> <a class="right carousel-control"
									href="#carousel-example-generic" data-slide="next"> <span
									class="glyphicon glyphicon-chevron-right"></span>
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
	</div>
</body>

</html>