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
					</div>
				</div>
	
				<div class="col-md-9">
					<div class="row">
			            <div class="col-md-9">
			                <h3>Aktuelle Artikel</h3>
			            </div>
			            <div class="col-md-3">
			                <!-- Controls -->
			                <div class="controls pull-right hidden-xs">
			                    <a class="left fa fa-chevron-left btn btn-primary" href="#carousel-example-generic"
			                        data-slide="prev"></a><a class="right fa fa-chevron-right btn btn-primary" href="#carousel-example-generic"
			                            data-slide="next"></a>
			                </div>
			            </div>
        			</div>
			        <div id="carousel-example-generic" class="carousel slide hidden-xs" data-ride="carousel" style="padding-bottom: 45px;">
			            <!-- Wrapper for slides -->
			            <div class="carousel-inner">
			                <div class="item active">
			                    <div class="row">
			                        <div class="col-sm-4">
			                            <div class="col-item">
			                                <div class="photo">
			                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
			                                </div>
			                                <div class="info">
			                                    <div class="row">
			                                        <div class="price col-md-6">
			                                            <h5>Product with Variants</h5>
			                                        </div>
			                                        <div class="price col-md-6">
			                                            <h5 class="price-text-color pull-right">149.99€</h5>
			                                        </div>
			                                    </div>
			                                    <div class="clearfix">
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-sm-4">
			                            <div class="col-item">
			                                <div class="photo">
			                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
			                                </div>
			                                <div class="info">
			                                    <div class="row">
			                                        <div class="price col-md-6">
			                                            <h5>Product with Variants</h5>
			                                        </div>
			                                        <div class="price col-md-6">
			                                            <h5 class="price-text-color pull-right">149.99€</h5>
			                                        </div>
			                                    </div>
			                                    <div class="clearfix">
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-sm-4">
			                            <div class="col-item">
			                                <div class="photo">
			                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
			                                </div>
			                                <div class="info">
			                                    <div class="row">
			                                        <div class="price col-md-6">
			                                            <h5>Product with Variants</h5>
			                                        </div>
			                                        <div class="price col-md-6">
			                                            <h5 class="price-text-color pull-right">149.99€</h5>
			                                        </div>
			                                    </div>
			                                    <div class="clearfix">
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			                <div class="item">
			                    <div class="row">
			                        <div class="col-sm-4">
			                            <div class="col-item">
			                                <div class="photo">
			                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
			                                </div>
			                                <div class="info">
			                                    <div class="row">
			                                        <div class="price col-md-6">
			                                            <h5>Product with Variants</h5>
			                                        </div>
			                                        <div class="price col-md-6">
			                                            <h5 class="price-text-color pull-right">149.99€</h5>
			                                        </div>
			                                    </div>
			                                    <div class="clearfix">
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-sm-4">
			                            <div class="col-item">
			                                <div class="photo">
			                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
			                                </div>
			                                <div class="info">
			                                    <div class="row">
			                                        <div class="price col-md-6">
			                                            <h5>Product with Variants</h5>
			                                        </div>
			                                        <div class="price col-md-6">
			                                            <h5 class="price-text-color pull-right">149.99€</h5>
			                                        </div>
			                                    </div>
			                                    <div class="clearfix">
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                        <div class="col-sm-4">
			                            <div class="col-item">
			                                <div class="photo">
			                                    <img src="http://placehold.it/350x260" class="img-responsive" alt="a" />
			                                </div>
			                                <div class="info">
			                                    <div class="row">
			                                        <div class="price col-md-6">
			                                            <h5>Product with Variants</h5>
			                                        </div>
			                                        <div class="price col-md-6">
			                                            <h5 class="price-text-color pull-right">149.99€</h5>
			                                        </div>
			                                    </div>
			                                    <div class="clearfix">
			                                    </div>
			                                </div>
			                            </div>
			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
	
					<!-- Einzelprodukte -->
					<div class="row">	
						<h3>Zufällige Produkte</h3>
						<?php include("../php/getproductsstart.php");?>	
					</div>	
				</div>	
			</div>	
		</div>
	</div>
	<?php include '..\php\footer.php';?>
</body>

</html>