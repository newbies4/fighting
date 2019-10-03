<header>
    <center><h3>ADD Reservations </h3></center>
    <br>
</header>

<form>
  <div class="form-row">
    <div class="col-md-4 mb-3">
      <label for="validationDefault01"></label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Customer ID" value="" required>
    </div>  
    <div class="col-md-4 mb-3">
      <label for="validationDefault01"></label>
      <input type="text" class="form-control" id="validationDefault01" placeholder="Name" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Start Date" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="End Date" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Reservation Date" value="" required>
    </div>
    <div class="col-md-4 mb-3">
      <label for="validationDefault02"></label>
      <input type="text" class="form-control" id="validationDefault02" placeholder="Cars" value="" required>
    </div>
    <br>
    
        <br>
        <button class="btn btn-primary" type="submit">Save</button> 
        <a class="btn btn-primary" href="<?php echo base_url();?>index.php/home/reservation">Back</a>        
    
</form>