<header>
    <center><h3>ADD CUSTOMER </h3></center>
    <br>
</header>

<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01"></label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Employee ID" value="" required>
    </div>  
    <div class="col-md-4 mb-3">
      <label for="validationDefault01"></label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="First name" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Middle name" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Last name" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Contact Number" value="" required>

    </div>
    <br>
    
        <br>
        <button class="btn btn-primary" type="submit">Save</button> 
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/home/employee">Back</a>        
    
</form>