<div class="animation-area">
        <ul class="box-area">
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
</div>
<!--<div class="sign-up-bg">-->
	<div class="container">
		<section class="row">
			<div class="wrap">
	 			<h2><center>   <legend>Sign Up</legend> </center></h2>
				<hr/>
			
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
							<label>First Name *</label>
                            <input type="text" name="cust_Fname" value="" class="form-control <?= (form_error('username') == '' ? '':'is-invalid') ?>" placeholder="" required autofocus />                        </div>
                        <div class="col-xs-6 col-md-6">
							<label>Last Name *</label>
                            <input type="text" name="cust_Lname" value="" class="form-control input-lg" placeholder=""  />                        </div>
                    </div>
				  <label>Current Address *</label>
                    <input type="text" name="current_address" value="" class="form-control input-lg" placeholder=""  />
				  <label>Contact Number *</label>
                    <input type="text" name="contact_no" value="" class="form-control input-lg" placeholder=""  />
			      <label>Email Address *</label>
                    <input type="text" name="email_address" value="" class="form-control input-lg" placeholder=""  />
				  <div class="form-group">
                 	 <label >Birth Date</label>
                  		<input type="date" name="bday" max="3000-12-31" 
                          min="1000-01-01" class="form-control">
					
				   <span class="help-block">By clicking Continue, you certify that the above information provided are correct and true.</span>
				   <a href="<?php echo base_url('admin_controller/user_signup_credentials');?>"><button class="btn btn-lg btn-primary-signup btn-block signup-btn" type="submit">
                        	Continue</button></a>
					
					<p><center> Already have an account? <a href="<?php echo base_url('admin_controller/admin_login');?>"><font color="#0000FF"> Log In </font> </a> </center></p>
				
				  </div>
                
				</div>	

              	
		 	
				</div>
			</div>            
		</section>
	</div>
<!--</div>-->