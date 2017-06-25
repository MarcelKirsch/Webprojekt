<ul class="dropdown-menu dropdown-lr animated slideInRight" role="menu" style="width: 250px">
                            <div class="text-center border" style="border: 1px solid #e3e3e3; margin: -7px 0 12px 0; background-color: #e3e3e3"><h4><b>Anmelden</b></h4></div>
		                        <div class="col-md-12">
		                           <?php include '..\php\login.php';?> 
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