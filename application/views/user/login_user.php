<div class="col-md-6 col-md-offset-3 vertical-off-4">
	<div class="panel panel-default login-form">
	  	<div class="panel-body">
	  		<form method="post" action="<?php echo base_url('pages/login') ?>" id="loginForm">
		    	<fieldset>
		    		<legend>
		    			Login
		    		</legend>

		    		<div id="message"></div>

					<div class="form-group">
				    	<label for="username">Username</label>
				    	<input type="text" class="form-control" id="username" name="username" placeholder="Username" autofocus>
				  	</div>
				  	<div class="form-group">
				    	<label for="password">Password</label>
				    	<input type="password" class="form-control" id="password" name="password" placeholder="Password">
				  	</div>					  						 
				  	
					  <a href=<?php echo base_url('pages/view_dashboard') ?>	<button class="col-md-12 btn btn-primary btn-lg btn-block login-button" >Login</button></a>
					  						
		    	</fieldset>
		    </form>
	  	</div>
	</div>
</div>

<script type="text/javascript" src="<?php echo base_url('custom/js/login.js') ?>"></script>
