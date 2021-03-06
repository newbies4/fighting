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
        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Full Name</label>
          </div>
          <div class="col-md-8 col-6">
            <p><?php echo $fetch_data->Name; ?></p>
          </div>
        </div>
        <hr />

        <div class="row">

          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Birth Date</label>
          </div>
          <div class="col-md-8 col-6">
            <p><?php echo $fetch_data->Birth_Date; ?></p>
          </div>
        </div>
        <hr />


        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Gender</label>
          </div>
          <div class="col-md-8 col-6">
            <p><?php echo $fetch_data->Gender; ?></p>
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Current Address</label>
          </div>
          <div class="col-md-8 col-6">
            <p><?php echo $fetch_data->current_address; ?></p>
          </div>
        </div>
        <hr /> 
        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Contact Number</label>
          </div>
          <div class="col-md-8 col-6">
            <p><?php echo $fetch_data->contact_no; ?></p>
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Email Address</label>
          </div>
          <div class="col-md-8 col-6">
            <p><?php echo $fetch_data->email; ?></p>
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">License Number</label>
          </div>
          <div class="col-md-8 col-6">
            <p><?php echo $fetch_data->license_no; ?></p>
          </div>
        </div>
        <hr />

        <a class="btn btn-primary pull pull-right" href="<?php echo base_url('customer_controller/edit_account/'.$_SESSION['username']); ?>">Edit</a> 
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
          <p><?php echo $fetch_data->username; ?></p>
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
        <!-- end login settings -->
      </div>
    </div>
  </div>

</div> <!-- col-md-9 -->




</div>
</div>

<br>


 