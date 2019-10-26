<header>
  <center><h3>ADD CARS </h3></center>
  <br>
</header>

<div class="container">
	<div class="row">
		<!-- left part -->

		<div class="col-lg-4">
			<div class="form-group">
				<input type="text" class="form-control" id="" name="" >
				<label for="">Car Owner * </label>
			</div>
			<div class="form-group">
				<input type="text" class="form-control" id="" name="" >
				<label for="">Model * </label>
			</div>  
			<div class="form-group">
				<input type="text" class="form-control" id="" name="" >
				<label for="">Brand * </label>
			</div>    
			<div class="form-group">
				<input type="text" class="form-control" id="" name="" >
				<label for="">Type * </label>
			</div>  
			<div class="form-group">
				<input type="text" class="form-control" id="" name="" >
				<label for="">Seats * </label>
			</div>  
			<div class="form-group">
				<input type="text" class="form-control" id="" name="" >
				<label for="">Color * </label>
			</div>  
			<div class="form-group">
				<input type="text" class="form-control" id="" name="" >
				<label for="">Plate Number * </label>
			</div>  
		</div> <!-- end of col-sm-6 -->

		<!-- left part -->

		<!--center part -->
		<div class="col-lg-4">
			<div class="form-group">           
				<input type="text" class="form-control" id="" name="" >
				<label for="">Price * </label>
			</div>                                
			<div class="form-group">
				<input type="text" class="form-control" id="" name="" >
				<label for="">Fuel Capacity * </label>
			</div>                                 
			<div class="form-group">
				<select class="form-control">				
					<option value="1">Diesel</option>
					<option value="2">Unleaded</option>                              
				</select>
				<label for="">Select Gas Type *</label>
			</div>                                
			<div class="form-group">
				<select class="form-control">
					<option value="1">With Driver</option>
					<option value="2">Without Driver</option>                           
				</select>
				<label for="">Select Driver *</label>
			</div>  

			<div class="form-group">
				<select class="form-control">				
					<option value="1">Manual</option>
					<option value="2">Automatic</option>
					<option value="2">Dual Transmission</option>                             
				</select>
				<label for="">Select Transmission *</label>
			</div>  
			<div class="form-group">
				<select class="form-control">			
					<option value="1">Compulsory Third Party (CTP)</option>
					<option value="2">Third Party Property</option>  
					<option value="3">Third Party, Fire and Theft</option>    
					<option value="4">Comprehensive Car Insurance</option>               
				</select>
				<label for="">Select Insurance Type *</label>
			</div>
			
		</div> <!-- end of col-sm-3 -->
		<!--right part -->  
		<div class="col-lg-4">                                                          
			<div class="form-group">
				<label for="">Front  </label>
				<input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500" />
			</div> 
			<div class="form-group">
				<label for="">Back  </label>
				<input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500" />
			</div> 
			<div class="form-group">
				<label for="">Interior  </label>
				<input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500" />
			</div> 
			<div class="form-group">
				<label for="">Interior  </label>
				<input type="file" id="input-file-now-custom-2" class="file-upload" data-height="500" />
			</div>                      
		</div> <!-- end of col-sm-3 --> 
		<!--right part -->      
		<div>
				<br><a class="btn btn-primary" href="">Save</a>   
				<a class="btn btn-primary" href="<?php echo base_url();?>index.php/home/cars">View Cars</a>   
			</div>                
	</div> <!-- end of row -->
</div> <!-- end of container -->
