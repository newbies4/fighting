<header>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url('User_controller/index');?>">ZC Car Rental</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="<?php echo base_url('User_controller/index');?>">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PRICING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo base_url('User_controller/team'); ?>">ABOUT US</a>
		</li>
		<li class="nav-item">
          <a class="nav-link" href="#">HELP</a>
        </li>
        <li class="nav-item dropdown">
            <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="">SIGN IN</a>    
                <div class="dropdown-menu" role="menu">
                    <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/User_controller/user_account">My Account</a>
                    <a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/User_controller/user_account_storeroom">My Reservation</a>
                    <a class="dropdown-item" role="presentation" href="#">Log Out</a>
                </div> 
        </li>
      </ul>
    </div>
  </div>
</nav>

    <style type="text/css">

body {
  background: #F1F3FA;
}

</style>
   
    
</header>
<body >
<br>
<br>
<br>
<div class="container" id="Body-useraccount">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                <img src=<?php echo base_url("assets\Content-filter\img\Profile_Photo.jpg" )?> id="profile-display" />
                    <!--<img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">-->
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Arczhar Mummuh
                    </div>
                    <div class="profile-usertitle-job">
                        VERIFIED
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
            
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="list-unstyled components">
                    <li >
                            <a href="<?php echo base_url('index.php/User_controller/user_overview');?>">
                            <i class="glyphicon glyphicon-home"></i>
                            Overview </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('User_controller/user_profile');?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Profile Settings </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('User_controller/user_account_settings');?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Account Settings </a>
                        </li>
                        <li >
                            <a href="<?php echo base_url('User_controller/user_account_storeroom');?>">
                            <i class="glyphicon glyphicon-ok"></i>
                            Storeroom </a>
                        </li>
                    
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
        <div class="col-md-9">
          <div class="user-nav">
          <ul class="nav nav-tabs">
            <li class="nav-item">
              <a href="#Information" class="nav-link active" role="tab" data-toggle="tab">Information</a>
            </li>
            <li class="nav-item">
              <a href="#Login" class="nav-link" role="tab" data-toggle="tab"> Login Settings</a>
            </li>
             
          </ul> 
        </div>
        <!--Information Settings -->
          <div class="profile-content">
            <div class="tab-content">
              <div role="tabpanel" class="tab-pane active" id="Information">
                <h4><center><i class="fa fa-user"></i> Personal Information </center> </h4>
                <hr />
           
           <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Full Name</label>
                </div>
                <div class="col-md-8 col-6">
                      Arczhar Mummuh
                </div>
             </div>
             <hr />
            
            <div class="row">
                                            
              <div class="col-sm-3 col-md-2 col-5">
                 <label style="font-weight:bold;">Birth Date</label>
                </div>
              <div class="col-md-8 col-6">
                  your Birthdate
              </div>
             </div>
             <hr />
                                        
                                        
            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                 <label style="font-weight:bold;">Gender</label>
                </div>
              <div class="col-md-8 col-6">
                  Male/Female
                </div>
            </div>
            <hr />

            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                <label style="font-weight:bold;">Email Address</label>
              </div>
              <div class="col-md-8 col-6">
                 myemail@email.com
              </div>
            </div>
            <hr />

            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                <label style="font-weight:bold;">Current Address</label>
              </div>
              <div class="col-md-8 col-6">
                My Current Address
              </div>
            </div>
             <hr /> 
             <a class="btn btn-primary modal-open pull pull-right" href="">Edit</a> 
            </div>
            
          <!-- end information settings-->

          <!-- Login Settings -->
          <div role="tabpanel" class="tab-pane" id="Login">
            <h4><center><i class="fa fa-key"></i> Login Details </center> </h4>
            <hr />

            <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Username</label>
                </div>
                <div class="col-md-8 col-6">
                      Your Username
                </div>
             </div>
             <hr />
             <div class="row">
              <div class="col-sm-3 col-md-2 col-5">
                    <label style="font-weight:bold;">Password</label>
                </div>
                <div class="col-md-8 col-6">
                <a class="btn btn-primary modal-open" href="">Change Password</a>    
                </div>
             </div>
             <hr />
             
          </div>
            <!-- end login settings --> 
              
          </div>
         
            </div>
             
        </div>
    </div>
</div>

<br>

</body>

 