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
<?= form_open('sign_up_controller/sign_up_credentials') ?>
<section class = "container-fluid">
    <section class="row justify-content-center">
        <section class="col 12 col-sm-6 col-lg-3">
			<div class="wrap-credentials">
	 		<h2><center><i class="fa fa-user"></i>   <legend>Set up your Account</legend> </center></h2>
            <hr/>

            <input type="hidden" name="customerid" value="<?php echo $customerid ?>" class="form-control" />

			<div class="form-group">
				<label>Username *</label>
                <input type="text" name="username" value="" class="form-control" placeholder=""  />
                <?= form_error('username'); ?>
			</div>

			<div class="form-group">
				<label>Password *</label>
				<input type="password" name="password" value="" class="form-control" placeholder=""  />
				<?= form_error('password'); ?>
			</div>

			<div class="form-group">
				<label>Confirm Password *</label>
				<input type="password" name="confirm_password" value="" class="form-control" placeholder=""  /> 
				<?= form_error('confirm_password'); ?>
			</div>
			<hr/>                 
            <button class="btn btn-lg btn-primary-signup btn-block signup-btn" type="submit">Create my account</button>
			</div>
			</section>
    </section>
</section>
<?= form_close(); ?>