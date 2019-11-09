<div class="admin-content">
<!--breadcrumb -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item active" aria-current="page"><a href="#">1) Car Information</a></li>
    <li class="breadcrumb-item"><a href="#">2) Add Car Photos</a></li>
	<li class="breadcrumb-item"><a href="#">3) Review</a></li>
  </ol>
</nav>


<!--end of breadcrumb -->
<header>
  <center><h3>ADD CARS  </h3></center>
  <br>
</header>

<div class="container">
	<?php echo validation_errors('<div class="text-danger">','</div>'); ?>
	<?php if($this->session->flashdata('add_car_success')): ?>
      <p class="alert alert-success"><?php echo $this->session->flashdata('add_car_success'); ?></p>
    <?php endif; ?>
	<?php echo form_open_multipart('car_controller/add_car');?>
	<div class="row">
		<!-- left part -->
		<div class="col-lg-4">
			<div class="form-group">
				<input type="text" class="form-control" id="" name="owner" value="Loremipsum">
				<label for="">Car Owner * </label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="" name="model" value="Loremipsum">
				<label for="">Model * </label>
			</div>  
			<div class="form-group">
				<input type="text" class="form-control" id="" name="brand" value="Loremipsum">
				<label for="">Brand * </label>
			</div>    
			<div class="form-group">
				<input type="text" class="form-control" id="" name="type" value="Loremipsum">
				<label for="">Type * </label>
			</div>  
			<div class="form-group">
				<select class="form-control" name="seats">
					<option value="4">4 Seats</option>
					<option value="6">6 Seats</option>   
					<option value="8">8 Seats</option>                         
				</select>
				<label for="">Seats * </label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="" name="color" value="Loremipsum">
				<label for="">Color * </label>
			</div>  
			<div class="form-group">
				<input type="text" class="form-control" id="" name="platenumber" value="Loremipsum">
				<label for="">Plate Number * </label>
			</div>  
		</div> <!-- col-lg-4 -->

		<!-- left part -->

		<!--center part -->
		<div class="col-lg-4">
			<div class="form-group">           
				<input type="text" class="form-control" id="" name="price" value="1">
				<label for="">Price * </label>
			</div>                                
			<div class="form-group">
				<input type="text" class="form-control" id="" name="fuelcapacity" value="Loremipsum">
				<label for="">Fuel Capacity * </label>
			</div>                                 
			<div class="form-group">
				<select class="form-control" name="gastype">				
					<option value="Diesel">Diesel</option>
					<option value="Unleaded">Unleaded</option>                              
				</select>
				<label for="">Select Gas Type *</label>
			</div>                                
			<div class="form-group">
				<select class="form-control" name="driver">
					<option value="With Driver">With Driver</option>
					<option value="Without Driver">Without Driver</option>                           
				</select>
				<label for="">Select Driver *</label>
			</div>  

			<div class="form-group">
				<select class="form-control" name="transmission">				
					<option value="manual">Manual</option>
					<option value="automatic">Automatic</option>
					<option value="dual">Dual Transmission</option>                             
				</select>
				<label for="">Select Transmission *</label>
			</div>  
			<div class="form-group">
				<select class="form-control" name="insurance">			
					<option value="ctp">Compulsory Third Party (CTP)</option>
					<option value="tpp">Third Party Property</option>  
					<option value="tpft">Third Party, Fire and Theft</option>    
					<option value="cci">Comprehensive Car Insurance</option>               
				</select>
				<label for="">Select Insurance Type *</label>
			</div>
			
		</div> <!-- col-lg-4 -->



		<div class="col-lg-4">
			<!-- <div class="form-group">
				<input type="file" id="input-file-now-custom-2" class="form-control" name="carpics" class="file-upload" multiple data-height="500" />
				<label for="">Car Pictures *</label>
			</div>  -->

			<div class="form-group">
				<div class="input-group">
				  <div class="custom-file">
				    <input type="file" name="carpics[]" class="custom-file-input" id="front"
				      aria-describedby="frontPicture">
				    <label class="custom-file-label" for="front">Choose file</label>
				  </div>
				</div>
				<label for="">Front View</label>
			</div>

			<div class="form-group">
				<div class="input-group">
				  <div class="custom-file">
				    <input type="file" name="carpics[]" class="custom-file-input" id="back"
				      aria-describedby="backPicture">
				    <label class="custom-file-label" for="back">Choose file</label>
				  </div>
				</div>
				<label for="">Back View</label>	
			</div>
			<div class="form-group">
				<div class="input-group">
				  <div class="custom-file">
				    <input type="file" name="carpics[]" class="custom-file-input" id="interior"
				      aria-describedby="interiorPicture">
				    <label class="custom-file-label" for="interior">Choose file</label>
				  </div>
				</div>
				<label for="">Interior View</label>	
			</div>
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

			<!-- <div class="form-group">
				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="frontPicture">Front</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="front"
				      aria-describedby="frontPicture">
				    <label class="custom-file-label" for="front">Choose file</label>
				  </div>
				</div>
			</div>
			
			<div class="form-group">
				<div class="input-group">
				  <div class="input-group-prepend">
				    <span class="input-group-text" id="backPicture">Back</span>
				  </div>
				  <div class="custom-file">
				    <input type="file" class="custom-file-input" id="back"
				      aria-describedby="backPicture">
				    <label class="custom-file-label" for="back">Choose file</label>
				  </div>
				</div>
			</div>
 -->
		</div> <!-- col-lg-4 -->
		    
		<div>
				<button class="btn btn-primary" name="addcarsubmit" value="addcar" type="submit">Save</button>   
				<a class="btn btn-primary" href="<?php echo base_url();?>index.php/home/cars">View Cars</a>
				<a class="btn btn-primary" href="<?php echo base_url('admin_controller/add_car_picture');?>">NEXT</a>   
			</div>                
	</div> <!-- end of row -->
	<?php echo form_close(); ?>
</div> <!-- end of container -->
</div> <!-- admin content -->
	