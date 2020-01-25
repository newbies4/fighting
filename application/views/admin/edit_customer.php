<div class="admin-content">
<header>
    <center><h3>EDIT CUSTOMER </h3></center>
    <br>
</header>

<?= form_open('Customer_controller/update_customer') ?>

<input type="hidden" name="id" value="<?php echo (isset($customer->customer_id)) ? $customer->customer_id : set_value('id'); ?>">


<div class="form-row">

<div class="col-md-4 mb-3">
  <label for="validationDefault01">Name *</label>
  <input type="text" class="form-control <?= (form_error('name') == '' ? '':'is-invalid') ?>"  placeholder="Name" name="name" id="name" value="<?php echo set_value('name'); ?>" required>
</div>
<div class="col-md-4 mb-3">
  <label for="validationDefault02">Address *</label>
  <input type="text" class="form-control <?= (form_error('address') == '' ? '':'is-invalid') ?>" name="address" id="address" placeholder="Address" value="<?php echo set_value('address'); ?>" required>
</div>
<div class="col-md-4 mb-3">
  <label for="validationDefault02">Contact Number *</label>
  <input type="text" class="form-control <?= (form_error('contactno') == '' ? '':'is-invalid') ?>" placeholder="Contact No." name="contactno" value="<?php echo set_value('contactno'); ?>" required>
</div>
<div class="col-md-4 mb-3">
  <label for="validationDefault02">Birth Date *</label>
  <input type="date" max="3000-12-31" min="1000-01-01" class="form-control <?= (form_error('date') == '' ? '':'is-invalid') ?>" placeholder="date" name="date" id="date" value="<?php echo set_value('date'); ?>">
</div>

<div class="form-group col-md-4">
  <label for="inputState">Gender *</label>
  <select name="gender" id="gender" class="form-control <?= (form_error('gender') == '' ? '':'is-invalid') ?>" value="<?php echo set_value('gender'); ?>" >
    <option <?php echo set_select('gender', 'male', TRUE); ?> value="male">Male</option>
    <option <?php echo set_select('gender', 'female'); ?> value="female">Female</option>     
  </select>
</div>
<div class="col-md-4 mb-3">
  <label for="validationDefault02">License No.</label>
  <input type="text" class="form-control <?= (form_error('licenseno') == '' ? '':'is-invalid') ?>" name="licenseno" id="license no." placeholder="License No." value="<?php echo set_value('licenseno'); ?>" required>
</div>
<div class="col-md-4 mb-3">
  <label for="validationDefault02">Email Address *</label>
  <input type="text" class="form-control <?= (form_error('email') == '' ? '':'is-invalid') ?>" name="email" id="email" placeholder="Email Address" value="<?php echo set_value('email'); ?>" required>
</div>




<div class="col-md-4 mb-3">
  <div class="form-group">
    <label for="exampleFormControlFile1">Front License ID</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  
</div>

<div class="col-md-4 mb-3">
  <div class="form-group">
    <label for="exampleFormControlFile1">Back License ID</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
</div>
<br>
<div class="">
      <button class="btn btn-primary center" name="addcustomersubmit" type="submit">Save</button> 
      <a class="btn btn-primary " href="<?php echo base_url();?>index.php/customer_controller/show"> Back </a> 
    </div>
</div>
<?= form_close(); ?>
</div> <!-- admin content -->