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
            <label for="fullname" style="font-weight:bold;">Full Name</label>
          </div>
          <div class="col-md-8 col-6">
            <input type="text" class="form-control name="fullname" id="fullname" placeholder="Full Name" value="<?php echo $fetch_data->Name; ?>">
          </div>
        </div>
        <hr />

        <div class="row">

          <div class="col-sm-3 col-md-2 col-5">
            <label for="birthdate" style="font-weight:bold;">Birth Date</label>
          </div>
          <div class="col-md-8 col-6">
            <input type="date" class="form-control" name="birthdate" id="birthdate" placeholder="Birth Date" value="<?php echo $fetch_data->Birth_Date; ?>">
          </div>
        </div>
        <hr />


        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Gender</label>
          </div>
          <div class="col-md-8 col-6">
        	<select id="gender" class="form-control" name="gender">
				<option <?php echo ($fetch_data->Gender == 'male') ? 'selected' : ''; ?> <?php echo set_select('gender', 'male', TRUE); ?> value="male">Male</option>
				<option <?php echo ($fetch_data->Gender == 'female') ? 'selected' : ''; ?> <?php echo set_select('gender', 'female'); ?> value="female">Female</option>  
			</select>
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Current Address</label>
          </div>
          <div class="col-md-8 col-6">
            <input type="text" class="form-control" name="address" id="address" placeholder="Address" value="<?php echo $fetch_data->current_address; ?>">
          </div>
        </div>
        <hr /> 
        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Contact Number</label>
          </div>
          <div class="col-md-8 col-6">
            <input type="text" class="form-control" name="contactno" id="contactno" placeholder="Contact Number" value="<?php echo $fetch_data->contact_no; ?>">
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">Email Address</label>
          </div>
          <div class="col-md-8 col-6">
            <p></p>
            <input type="email" class="form-control" name="email" id="email" placeholder="Email Address" value="<?php echo $fetch_data->email; ?>">
          </div>
        </div>
        <hr />

        <div class="row">
          <div class="col-sm-3 col-md-2 col-5">
            <label style="font-weight:bold;">License Number</label>
          </div>
          <div class="col-md-8 col-6">
            <input type="text" class="form-control" name="licenseno" id="licenseno" placeholder="License Number" value="<?php echo $fetch_data->license_no; ?>">
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