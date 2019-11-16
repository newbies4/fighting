

<h1>Car Pictures</h1>
<?php if(isset($error)): ?>
	<?php echo $error; ?>      
<?php endif; ?>
<?php echo form_open_multipart('car_controller/edit_pictures');?>
<div class="col-lg-4">
			<!-- <div class="form-group">
				<input type="file" id="input-file-now-custom-2" class="form-control" name="carpics" class="file-upload" multiple data-height="500" />
				<label for="">Car Pictures *</label>
			</div>  -->			
	  		<?php
			  	$front = $car_names->row(0);
			  	$back = $car_names->row(1);
			  	$interior = $car_names->row(2);
			  	echo "<script> console.log(" . gettype($front) . ")</script>";
			  	/*var_dump($front->car_pic_name);
			  	echo "<br>";
			  	var_dump($back->car_pic_name);
			  	echo "<br>";
			  	var_dump($interior->car_pic_name);
			  	echo "<br>";
			  	var_dump($car_names->row(0)->car_id_fk);
			  	echo "<br>";
			  	var_dump($car_names->num_rows());
			  	$car_names->row(0)->car_pic_name;
			  	var_dump(strpos($interior->car_pic_name, "."));
			  	echo "<br>";
			  	var_dump(substr($interior->car_pic_name, strrpos($interior->car_pic_name, ".")));	*/  	
  	 		?>
			<div class="form-group">
				<input type="text" class="form-control" id="carid" name="carid" value="<?php echo $this->session->flashdata('car_id'); ?>">
			</div>
			<img id="frontPreview" src="<?php echo base_url('assets/img/cars/front-car-img-' . ($front->car_id_fk) . 1 . substr($front->car_pic_name, strrpos($front->car_pic_name, "."))); ?>" alt="..." class="img-thumbnail">
        	<?php echo '<script>alert("asdasd"); <h1>var_dump("expression");</ht></script>'; ?>
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

	  	 	<img id="backPreview" src="<?php echo base_url('assets/img/cars/back-car-img-' . $car_names->row(1)->car_id_fk . 2 . substr($interior->car_pic_name, strrpos($interior->car_pic_name, "."))) ?>" alt="..." class="img-thumbnail">
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

			<img id="interiorPreview" src="<?php echo base_url('assets/img/cars/interior-car-img-' . $car_names->row(2)->car_id_fk . 3 . substr($interior->car_pic_name, strrpos($interior->car_pic_name, "."))) ?>" alt="..." class="img-thumbnail">
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

			<button class="btn btn-primary" name="addcarpicubmit" value="addcarpic" type="submit">Update</button> 
	<!-- <a class="btn btn-primary" href="<?php echo base_url('admin_controller/add_car_finalize');?>">NEXT </a> -->


</div> <!-- admin content -->
