<header>

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
                        <li class="active">
                            <a href="<?php echo base_url('User_controller/user_profile');?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Profile Settings </a>
                        </li>
                        <li>
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
            <div class="profile-content">
              Profile Setting
            </div>
        </div>
    </div>
</div>

<br>

</body>

 