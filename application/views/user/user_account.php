<header>
<link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">ZC Car Rental</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                <a class="nav-link" href="#">HOME
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">PRICING</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="#">SERVICES</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="">SIGN IN</a>    
                        <div class="dropdown-menu" role="menu">
                            <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/User_controller/user_account">Settings</a>
                            <a class="dropdown-item" role="presentation" href="#">Log Out</a>
                        </div> 
                </li>
            </ul>
            </div>
        </div>
    </nav> 
</header>
   <!-- <h1>USER ACCOUNT</h1> -->
   <!-- Sidebar  -->
   <br>
   <br>
   <br>
   <div class="container-fluid">
  <div class="row-fluid">
    <div class="span2">
      <!--Sidebar content-->
      
<div class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						Marcus Doe
					</div>
					
				</div>
				<!-- END SIDEBAR USER TITLE -->
		
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="active">
							<a href="#">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="#">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li>
							<a href="#" target="_blank">
							<i class="glyphicon glyphicon-ok"></i>
							Store Room </a>
						</li>
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
             
    <div class="row">
      <div class="form-group col-md-6">
        <label for="firstname">First Name</label>
        <input type="text" class="form-control <?= (form_error('firstname') == '' ? '':'is-invalid') ?>" name="firstname" id="firstname" placeholder="First Name" value="<?php echo set_value('firstname'); ?>">
        <?= form_error('firstname'); ?>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="middlename"></label>
        <input type="text" class="form-control <?= (form_error('middlename') == "" ? '':'is-invalid') ?>" name="middlename" id="middlename" placeholder="Middle Name" value="<?php echo set_value('middlename'); ?>">
        <?= form_error('middlename'); ?>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="lastname"></label>
        <input type="text" class="form-control <?= (form_error('lastname') == "" ? '':'is-invalid') ?>" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo set_value('lastname'); ?>">
        <?= form_error('lastname'); ?>
      </div>
    </div>

    <div class="row">
      <div class="form-group col-md-6">
        <label for="contactnumber"></label>
        <input type="text" class="form-control <?= (form_error('contactnumber') == "" ? '':'is-invalid') ?>" name="contactnumber" id="contactnumber" placeholder="Contact Number" value="<?php echo set_value('contactnumber'); ?>">
        <?= form_error('contactnumber'); ?>
      </div>
    </div>

    <button class="btn btn-success btn-sm" name="addemployeesubmit" type="submit">Save</button> 
        


    <?= form_close(); ?>








            </div>
		</div>
	</div>
</div>

<br>
<br>
    </div>
    
  </div>
</div>


