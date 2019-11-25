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
<?php if($this->session->flashdata('add_customer_success')): ?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('add_customer_success'); 
     ?></p>
  <?php endif; ?>
<?php // echo validation_errors('<div class="text-danger">','</div>'); ?>
<?= form_open('sign_up_controller/sign_up') ?>
  
	<div class="container">
		<section class="row">
			<div class="wrap">
	 			<h2><center>   <legend>Sign Up</legend> </center></h2>
				<hr/>
			
                    <div class="row">
                        <div class="col-xs-6 col-md-6">
							<label>First Name *</label>
                            <input type="text" name="cust_Fname" value="" class="form-control <?= (form_error('name') == '' ? '':'is-invalid') ?>" placeholder="Name" name="name" id="name"  value="<?php echo set_value('firstname'); ?>"
							required autofocus />                        </div>
							<div class="col-xs-6 col-md-6">
							<label>Last Name *</label>
                            <input type="text" name="cust_Fname" value="" class="form-control <?= (form_error('name') == '' ? '':'is-invalid') ?>" placeholder="Name" name="name" id="name"  value="<?php echo set_value('firstname'); ?>"
							required autofocus />                        </div>
                    </div>
				  <label>Current Address *</label>
                    <input type="text" name="address" value="" class="form-control <?= (form_error('address') == '' ? '':'is-invalid') ?>" id="address"placeholder=""  />value="<?php echo set_value('address'); ?>
				  <label>Contact Number *</label>
                    <input type="text" name="contactno" class="form-control <?= (form_error('contactno') == '' ? '':'is-invalid') ?>" name="contactno" value="<?php echo set_value('contactno'); ?>" placeholder=""  />
			      <label>Email Address *</label>
                    <input type="text" name="email" id="email" value="" class="form-control <?= (form_error('email') == '' ? '':'is-invalid') ?>" value="<?php echo set_value('license no.'); ?> placeholder=""  />
				  <div class="form-group">
                 	 
					
				   <span class="help-block">By clicking Continue, you certify that the above information provided are correct and true.</span>
				   <button class="btn btn-lg btn-primary-signup btn-block signup-btn"type="submit">
                        	Continue</button>
					
					<p><center> Already have an account? <a href="<?php echo base_url('user_controller/login');?>"><font color="#0000FF"> Log In </font> </a> </center></p>
				
				  </div>
                
				</div>	

              	
		 	
				</div>
			</div>            
		</section>
	</div>
	<?= form_close(); ?>
<!--</div>-->