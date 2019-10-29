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
          <a class="nav-link" href="<?php echo base_url('User_controller/index');?>">HOME
                
              </a>
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
                <img src=<?php echo base_url("assets\Content-filter\img\koala.jpg" )?> id="profile-display" />
                    <!--<img src="" class="img-responsive" alt="">-->
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
                        <li >
                            <a href="<?php echo base_url('User_controller/user_profile');?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Profile Settings </a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('User_controller/user_account_settings');?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Account Settings </a>
                        </li>
                        <li class="active">
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
            <h4><center>Storeroom</center></h4>
            <div class="table-responsive table-bordered table table-hover table-bordered results">
               
               <table class="table table-bordered">
                          <!-- Table head -->
                          <thead>
                            <tr>
                              <th>Model</th>
                              <th>Picture</th>
                              <th>Quantity</th>
                              <th>Price</th>
                              <th>Driver</th>
                              <th>Subtotal</th>                              
                            </tr>
                          </thead>
                          <!-- Table head -->

                          <!-- Table body -->
                          <tbody>
                            <tr>
                              <th scope="row">
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2" checked>
                                  <label class="custom-control-label" for="tableDefaultCheck2">Check 2</label>
                                </div>
                              </th>
                              <td>Cell 1</td>
                              <td>Cell 2</td>
                              <td>Cell 3</td>
                              <td>Cell 4</td>
                              <td>Cell 5</td>
                              
                              
                            </tr>
                            <tr>
                              <th scope="row">
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="tableDefaultCheck3">
                                  <label class="custom-control-label" for="tableDefaultCheck3">Check 3</label>
                                </div>
                              </th>
                              <td>Cell 4</td>
                              <td>Cell 5</td>
                              <td>Cell 6</td>
                              <td>Cell 4</td>
                              <td>Cell 5</td>
                            </tr>
                            <tr>
                              <th scope="row">
                                <!-- Default unchecked -->
                                <div class="custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="tableDefaultCheck4">
                                  <label class="custom-control-label" for="tableDefaultCheck4">Check 4</label>
                                </div>
                              </th>
                              <td>Cell 7</td>
                              <td>Cell 8</td>
                              <td>Cell 9</td>
                              <td>Cell 4</td>
                              <td>Cell 5</td>
                           
                            </tr>
                            <tr>
                                <td colspan="5" align ="right">Total</td>
                                <td align="right">0.00</td>
                          </tbody>
                          <!-- Table body -->
                        </table>                           
                </div>
              <a class="btn btn-primary modal-open pull pull-right" href="">Reserve</a>
            </div>
        </div>
    </div>
</div>

<br>

</body>

 