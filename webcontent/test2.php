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
	<?php include '..\php\modals_meldungen.php';?>
	<script>
	$('#openBtn').click(function(){
		$('01').modal({show:true})
	});
	</script>
	
	<div class="container"><br><br>
	
		<a data-toggle="modal" href="#01" class="btn btn-primary">Launch modal</a>

			<div class="modal border" id="01">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			          <h4 class="modal-title">Modal title</h4>
			        </div><div class="container"></div>
			        <div class="modal-body">
			          Content for the dialog / modal goes here.
			          <br>
			          <br>
			          <br>
			          <br>
			          <br>
			          <a data-toggle="modal" href="#02" class="btn btn-primary">Launch modal</a>
			        </div>
			        <div class="modal-footer">
			          <a href="#" data-dismiss="modal" class="btn">Close</a>
			          <a href="#" class="btn btn-primary">Save changes</a>
			        </div>
			</div>
			<div class="modal" id="02" data-backdrop="static">
			      <div class="modal-content">
			        <div class="modal-header">
			          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			          <h4 class="modal-title">Second Modal title</h4>
			        </div><div class="container"></div>
			        <div class="modal-body">
			          Content for the dialog / modal goes here.
			        </div>
			        <div class="modal-footer">
			          <a href="#" data-dismiss="modal" class="btn">Close</a>
			          <a href="#" class="btn btn-primary">Save changes</a>
			        </div>
			      </div>	
	      </div>		
	</div>
	

</body>
  
</html>