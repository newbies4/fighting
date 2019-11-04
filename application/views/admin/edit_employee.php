<div class="container">
  
  <header>
    <left><h3>EDIT EMPLOYEE </h3></left>
    <br>
  </header>  
  <?= form_open('Employee_controller/update_employee') ?>

  <input type="hidden" name="id" value="<?php echo $employee->id; ?>">
  

  <div class="row">
    <div class="form-group col-md-6">
      <label for="firstname">First Name</label>
      <input type="text" class="form-control <?= (form_error('firstname') == '' ? '':'is-invalid') ?>" name="firstname" id="firstname" placeholder="First Name" value="<?php echo $employee->first_name; ?>">
      <?= form_error('firstname'); ?>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="middlename"></label>
      <input type="text" class="form-control <?= (form_error('middlename') == "" ? '':'is-invalid') ?>" name="middlename" id="middlename" placeholder="Middle Name" value="<?php echo $employee->middle_name; ?>">
      <?= form_error('middlename'); ?>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="lastname"></label>
      <input type="text" class="form-control <?= (form_error('lastname') == "" ? '':'is-invalid') ?>" name="lastname" id="lastname" placeholder="Last Name" value="<?php echo $employee->last_name; ?>">
      <?= form_error('lastname'); ?>
    </div>
  </div>

  <div class="row">
    <div class="form-group col-md-6">
      <label for="contactnumber"></label>
      <input type="text" class="form-control <?= (form_error('contactnumber') == "" ? '':'is-invalid') ?>" name="contactnumber" id="contactnumber" placeholder="Contact Number" value="<?php echo $employee->contact; ?>">
      <?= form_error('contactnumber'); ?>
    </div>
  </div>

  <button class="btn btn-primary" name="addemployeesubmit" type="submit">Save</button> 
  <a class="btn btn-primary" href="<?php echo base_url();?>admin_controller/employee">Back</a>        


  <?= form_close(); ?>
</div> <!-- container -->