<header>
  
  <style type="text/css">
    body {
      background: #F1F3FA;
    }
  </style>
</header>
<body>
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
                <?php if($fetch_data->num_rows() > 0):?>
                <?php foreach($fetch_data->result_array() as $row): ?>
             <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                      <label style="font-weight:bold;">Full Name</label>
                  </div>
                  <div class="col-md-8 col-6">
                  <?php echo $row['Name'] ?> 
                  </div>
               </div>
               <hr />
              
              <div class="row">
                                              
                <div class="col-sm-3 col-md-2 col-5">
                   <label style="font-weight:bold;">Birth Date</label>
                  </div>
                <div class="col-md-8 col-6">
                <?php echo $row['age'] ?>
                </div>
               </div>
               <hr />
                                          
                                          
              <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                   <label style="font-weight:bold;">Gender</label>
                  </div>
                <div class="col-md-8 col-6">
                <?php echo $row['current_address'] ?>
                  </div>
              </div>
              <hr />

              <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                  <label style="font-weight:bold;">Email Address</label>
                </div>
                <div class="col-md-8 col-6">
                <?php echo $row['contact_no'] ?>
                </div>
              </div>
              <hr />

              <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                  <label style="font-weight:bold;">Current Address</label>
                </div>
                <div class="col-md-8 col-6">
                <?php echo $row['Birth_date'] ?>
                </div>
              </div>
               <hr /> 
               <a class="btn btn-primary modal-open pull pull-right" href="">Edit</a> 
              </div>
              <?php endforeach; ?>
      <?php endif; ?>
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

 