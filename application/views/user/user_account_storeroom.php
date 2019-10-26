<!DOCTYPE html>

<head>
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
    <link href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet">
     
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <style type="text/css"></style>
</head>
<body>
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
					<div class="profile-usertitle-job">
						Developer
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				<!-- SIDEBAR BUTTONS -->
			
				<!-- END SIDEBAR BUTTONS -->
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li >
							<a href="<?php echo base_url();?>index.php/User_controller/user_account">
							<i class="glyphicon glyphicon-home"></i>
							Overview </a>
						</li>
						<li>
							<a href="<?php echo base_url();?>index.php/User_controller/user_account_settings">
							<i class="glyphicon glyphicon-user"></i>
							Account Settings </a>
						</li>
						<li class="active">
							<a href="<?php echo base_url();?>index.php/User_controller/user_account_storeroom">
							<i class="glyphicon glyphicon-ok"></i>
							Storeroom </a>
						</li>
					
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9">
            <div class="profile-content">
			   Storeroom
            </div>
		</div>
	</div>
</div>

<br>
<br>
<script type="text/javascript">

</script>
</body>
</html>
