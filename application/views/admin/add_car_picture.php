<div class="admin-content">
<!--breadcrumb -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('admin_controller/add_car');?>">1) Car Information</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">2) Add Car Photos</a></li>
	<li class="breadcrumb-item"><a href="<?php echo base_url('admin_controller/add_car_finalize');?>">3) Review</a></li>
  </ol>
</nav>


<!--end of breadcrumb -->


<h1>Car Pictures</h1>
<?php if(isset($error)): ?>
	<?php echo $error; ?>      
<?php endif; ?>
<?php echo form_open_multipart('car_controller/add_pictures');?>
<div class="col-lg-4">
			<!-- <div class="form-group">
				<input type="file" id="input-file-now-custom-2" class="form-control" name="carpics" class="file-upload" multiple data-height="500" />
				<label for="">Car Pictures *</label>
			</div>  -->
			<div class="form-group">
				<input type="text" class="form-control" id="carid" name="carid" value="<?php echo $this->session->flashdata('car_id') ?>">
			</div>
			<div class="form-group">
				<div class="input-group">
				  <div class="custom-file">
				    <input type="file" name="front" class="custom-file-input" id="front"
				      aria-describedby="frontPicture">
				    <label class="custom-file-label" for="front">Choose file</label>
				  </div>
				</div>
				<label for="">Front View</label>
			</div>

			<div class="form-group">
				<div class="input-group">
				  <div class="custom-file">
				    <input type="file" name="back" class="custom-file-input" id="back"
				      aria-describedby="backPicture">
				    <label class="custom-file-label" for="back">Choose file</label>
				  </div>
				</div>
				<label for="">Back View</label>	
			</div>
			<div class="form-group">
				<div class="input-group">
				  <div class="custom-file">
				    <input type="file" name="interior" class="custom-file-input" id="interior"
				      aria-describedby="interiorPicture">
				    <label class="custom-file-label" for="interior">Choose file</label>
				  </div>
				</div>
				<label for="">Interior View</label>	
			</div>

			<button class="btn btn-primary" name="addcarpicubmit" value="addcarpic" type="submit">NEXT</button> 
	<!-- <a class="btn btn-primary" href="<?php echo base_url('admin_controller/add_car_finalize');?>">NEXT </a> -->

<!-- </form>
			<div class="form-group">
				<div class="input-group">
				  <div class="custom-file">
				    <input type="file" name="carpics[]" class="custom-file-input" id="exterior"
				      aria-describedby="exteriorPicture">
				    <label class="custom-file-label" for="exterior">Choose file</label>
				  </div>
				</div>
				<label for="">Exterior? View</label>	
			</div>
<a class="btn btn-primary" href="<?php echo base_url('admin_controller/add_car_finalize');?>">NEXT </a> -->
</div> <!-- admin content -->
