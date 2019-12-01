<div class="admin-content">


<div class="container">
	<?php // echo validation_errors('<div class="text-danger">','</div>'); ?>
	
	<?php echo form_open_multipart('car_controller/edit_car_data');?>
	<div class="row">
		<!-- left part -->
		<input class="form-control" type="hidden" name="carid" value="<?php echo (isset($car->car_id)? $car->car_id:set_value('carid')); ?>" >
		<div class="col-lg-6">
			<div class="form-group">
				<label for="">Car Owner * </label>
				<input type="text" class="form-control <?= (form_error('owner') == '' ? '':'is-invalid') ?>" id="" name="owner" value="<?php echo (isset($car->car_owner)? $car->car_owner:set_value('owner')); ?>">
				<?= form_error('owner'); ?>
			</div>
			<div class="form-group">
				<label for="">Model * </label>
				<input type="text" class="form-control <?= (form_error('model') == '' ? '':'is-invalid') ?>" id="" name="model" value="<?php echo (isset($car->car_model)? $car->car_model:set_value('model')); ?>">
				<?= form_error('model'); ?>
			</div>  
			<div class="form-group">
				<label for="">Brand * </label>
				<input type="text" class="form-control <?= (form_error('brand') == '' ? '':'is-invalid') ?>" id="" name="brand" value="<?php echo (isset($car->car_brand)? $car->car_brand:set_value('brand')); ?>">
				<?= form_error('brand'); ?>
			</div>    
			<div class="form-group">
				<label for="">Type * </label>
				<input type="text" class="form-control <?= (form_error('type') == '' ? '':'is-invalid') ?>" id="" name="type" value="<?php echo (isset($car->car_type)? $car->car_type:set_value('type')); ?>">
				<?= form_error('type'); ?>
			</div>  
			<div class="form-group">
				<label for="">Seats * </label>
				<select class="form-control <?= (form_error('seats') == '' ? '':'is-invalid') ?>" name="seats" value="<?php echo $car->car_seats; ?>">
					<option <?php echo (isset($car->car_seats) ? 'selected':set_select('seats', '4', TRUE)); ?> value="4">4 Seats</option>
					<option <?php echo (isset($car->car_seats) ? 'selected':set_select('seats', '6')); ?> value="6">6 Seats</option>   
					<option <?php echo (isset($car->car_seats) ? 'selected':set_select('seats', '8')); ?> value="8">8 Seats</option>                         
				</select>
				<?= form_error('seats'); ?>
			</div>
			<div class="form-group">
				<label for="">Color * </label>
				<input type="text" class="form-control <?= (form_error('color') == '' ? '':'is-invalid') ?>" id="" name="color" value="<?php echo (isset($car->car_color)? $car->car_color:set_value('color')); ?>">
				<?= form_error('color'); ?>
			</div>  
			<div class="form-group">
				<label for="">Plate Number * </label>
				<input type="text" class="form-control <?= (form_error('platenumber') == '' ? '':'is-invalid') ?>" id="" name="platenumber" value="<?php echo (isset($car->car_platenumber)? $car->car_platenumber:set_value('platenumber')); ?>">
				<?= form_error('platenumber'); ?>
			</div> 
		</div> <!-- col-lg-6 -->

		<!-- left part -->

		<!--center part -->
		<div class="col-lg-6">
			<div class="form-group">           
				<label for="">Price * </label>
				<input type="text" class="form-control <?= (form_error('price') == '' ? '':'is-invalid') ?>" id="" name="price" value="<?php echo (isset($car->car_price)? $car->car_price:set_value('price')); ?>">
				<?= form_error('price'); ?>
			</div>                                
			<div class="form-group">
				<label for="">Fuel Capacity * </label>
				<input type="text" class="form-control <?= (form_error('fuelcapacity') == '' ? '':'is-invalid') ?>" id="" name="fuelcapacity" value="<?php echo (isset($car->car_fuel_capacity)? $car->car_fuel_capacity:set_value('fuelcapacity')); ?>">
				<?= form_error('fuelcapacity'); ?>
			</div>                                 
			<div class="form-group">
				<label for="">Select Gas Type *</label>
				<select class="form-control <?= (form_error('gastype') == '' ? '':'is-invalid') ?>" name="gastype">				
					<option <?php echo (isset($car->car_gas_type) && ($car->car_gas_type == 'Diesel') ? 'selected':set_select('gastype', 'Diesel', TRUE)); ?> value="Diesel">Diesel</option>
					<option <?php echo (isset($car->car_gas_type) && ($car->car_gas_type == 'Unleaded') ? 'selected':set_select('gastype', 'Unleaded')); ?> value="Unleaded">Unleaded</option>                              
				</select>
				<?= form_error('gastype'); ?>
			</div>                                
			<div class="form-group">
				<label for="">Select Driver *</label>
				<select class="form-control <?= (form_error('driver') == '' ? '':'is-invalid') ?>" name="driver">
					<option <?php echo (isset($car->car_driver) && ($car->car_driver == 'With Driver') ? 'selected':set_select('driver', 'With Driver', TRUE)); ?> value="With Driver">With Driver</option>
					<option <?php echo (isset($car->car_driver) && ($car->car_driver == 'Without Driver') ? 'selected':set_select('driver', 'Without Driver')); ?> value="Without Driver">Without Driver</option>                           
				</select>
				<?= form_error('driver'); ?>
			</div>  

			<div class="form-group">
				<label for="">Select Transmission *</label>
				<select class="form-control <?= (form_error('transmission') == '' ? '':'is-invalid') ?>" name="transmission">				
					<option <?php echo (isset($car->car_transmission) && ($car->car_transmission == 'manual') ? 'selected':set_select('transmission', 'manual', TRUE)); ?> value="manual">Manual</option>
					<option <?php echo (isset($car->car_transmission) && ($car->car_transmission == 'automatic') ? 'selected':set_select('transmission', 'automatic')); ?> value="automatic">Automatic</option>
					<option <?php echo (isset($car->car_transmission) && ($car->car_transmission == 'dual') ? 'selected':set_select('transmission', 'dual')); ?> value="dual">Dual Transmission</option>                             
				</select>
				<?= form_error('transmission'); ?>
			</div>  
			<div class="form-group">
				<label for="">Select Insurance Type *</label>
				<select class="form-control <?= (form_error('insurance') == '' ? '':'is-invalid') ?>" name="insurance">			
					<option <?php echo (isset($car->car_insurance) && ($car->car_insurance == 'ctp') ? 'selected':set_select('insurance', 'ctp', TRUE)); ?> value="ctp">Compulsory Third Party (CTP)</option>
					<option <?php echo (isset($car->car_insurance) && ($car->car_insurance == 'tpp') ? 'selected':set_select('insurance', 'tpp')); ?> value="tpp">Third Party Property</option>  
					<option <?php echo (isset($car->car_insurance) && ($car->car_insurance == 'tpft') ? 'selected':set_select('insurance', 'tpft')); ?> value="tpft">Third Party, Fire and Theft</option>    
					<option <?php echo (isset($car->car_insurance) && ($car->car_insurance == 'cci') ? 'selected':set_select('insurance', 'cci')); ?> value="cci">Comprehensive Car Insurance</option>               
				</select>
				<?= form_error('insurance'); ?>
			</div>
			
		</div> <!-- col-lg-6 -->



		<!-- <div class="col-lg-4">
			<div class="form-group">
				<input type="file" id="input-file-now-custom-2" class="form-control" name="carpics" class="file-upload" multiple data-height="500" />
				<label for="">Car Pictures *</label>
			</div>  

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

		</div> --> <!-- col-lg-4 -->
	</div> <!-- end of row -->
		    
		<div>
			<button class="btn btn-primary" name="editcarsubmit" value="editcar" type="submit">Save</button>   
			<!-- <a class="btn btn-primary" href="<?php echo base_url();?>index.php/home/cars">View Cars</a>
			<a class="btn btn-primary" href="<?php echo base_url('admin_controller/add_car_picture');?>">NEXT</a> -->
		</div>
	<?php echo form_close(); ?>
</div> <!-- end of container -->
</div> <!-- admin content -->
</div>