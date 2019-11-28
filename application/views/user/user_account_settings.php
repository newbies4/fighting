<?php $this->load->view('user/user_profile_sidebar'); ?>
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
                <!-- <?php if($fetch_data->num_rows() > 0):?> -->
                <!-- <?php foreach($fetch_data->result_array() as $row): ?> -->
             <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                      <label style="font-weight:bold;">Full Name</label>
                  </div>
                  <div class="col-md-8 col-6">
                  <p><?php echo $fetch_data->Name; ?> </p>
                  </div>
               </div>
               <hr />
              
              <div class="row">
                                              
                <div class="col-sm-3 col-md-2 col-5">
                   <label style="font-weight:bold;">Birth Date</label>
                  </div>
                <div class="col-md-8 col-6">
                <p><?php echo $fetch_data->age; ?> </p>
                </div>
               </div>
               <hr />
                                          
                                          
              <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                   <label style="font-weight:bold;">Gender</label>
                  </div>
                <div class="col-md-8 col-6">
                <p><?php echo $fetch_data->current_address; ?> </p>
                  </div>
              </div>
              <hr />

              <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                  <label style="font-weight:bold;">Email Address</label>
                </div>
                <div class="col-md-8 col-6">
                <p><?php echo $fetch_data->contact_no; ?> </p>
                </div>
              </div>
              <hr />

              <div class="row">
                <div class="col-sm-3 col-md-2 col-5">
                  <label style="font-weight:bold;">Current Address</label>
                </div>
                <div class="col-md-8 col-6">
                <p><?php echo $fetch_data->Birth_date; ?> </p>
                </div>
              </div>
               <hr /> 
               <a class="btn btn-primary modal-open pull pull-right" href="">Edit</a> 
              </div>
              <!-- <?php endforeach; ?> -->
      <!-- <?php endif; ?> -->
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

 