<br>
<br>
<br>
<br>
<div class="container">
<div class="profile-content">
	<div class="wrapper row">
		<div class="preview col-sm-4">
						
		    <div class="preview-pic tab-content">
			    <!-- <div class="tab-pane active" id="pic-1"><img src=<?php echo base_url("assets/Content-filter/home-img/img-1.jpg" )?> /></div>
				<div class="tab-pane" id="pic-2"><img src=<?php echo base_url("assets/Content-filter/home-img/img-1.1.jpg")?> /></div>
				<div class="tab-pane" id="pic-3"><img src=<?php echo base_url("assets/Content-filter/home-img/img-1.jpg")?> /></div> -->
                <div class="tab-pane active" id="pic-1"><img src=<?php echo base_url("assets/img/cars/" . $fetch_data->row(0)->car_pic_name )?> /></div>
                <div class="tab-pane" id="pic-2"><img src=<?php echo base_url("assets/img/cars/" . $fetch_data->row(1)->car_pic_name )?> /></div>
                <div class="tab-pane" id="pic-3"><img src=<?php echo base_url("assets/img/cars/" . $fetch_data->row(2)->car_pic_name )?> /></div>
			</div>
            
            <ul class="preview-thumbnail nav nav-tabs">
				<li class="active"><a data-target="#pic-1" data-toggle="tab"><img src=<?php echo base_url("assets/img/cars/" . $fetch_data->row(0)->car_pic_name )?> /></a></li>
				<li><a data-target="#pic-2" data-toggle="tab"><img src=<?php echo base_url("assets/img/cars/" . $fetch_data->row(1)->car_pic_name )?> /></a></li>
				<li><a data-target="#pic-3" data-toggle="tab"><img src=<?php echo base_url("assets/img/cars/" . $fetch_data->row(2)->car_pic_name )?> /></a></li>

			</ul>				
		</div>
        
        <div class="details col-sm-4">
            <h3 class="product-title"><?php echo $fetch_data->row(0)->car_brand . $fetch_data->row(0)->car_model; ?></h3>
            <!-- <p><strong>Year Model:</strong> 2016</p> -->
           <!--  <p><strong>Model: <?php echo $fetch_data->row(0)->car_model; ?></strong> 2016</p>
            <p><strong>Brand: <?php echo $fetch_data->row(0)->car_brand; ?></p> -->
            <p><strong>Seats:</strong><?php echo $fetch_data->row(0)->car_seats; ?></p>
            <p><strong>Transmission:</strong> <?php echo $fetch_data->row(0)->car_transmission; ?></p>
            <p><strong>Fuel Type:</strong> <?php echo $fetch_data->row(0)->car_gas_type; ?></p>
            <p><strong>Body Type:</strong> <?php echo $fetch_data->row(0)->car_type; ?></p>
            <p><strong>Color:</strong> <?php echo $fetch_data->row(0)->car_color; ?></p>
            <br>
            <h4 class="price">Price: <span>₱<?php echo $fetch_data->row(0)->car_price; ?></span></h4>

			
        </div>  
        
        <div class="details col-sm-4">
        <?= form_open('reserve_controller/add_to_storeroom') ?>
            <div class="action">
                <br>
                <h5> Select Date of Rent </h5>
                <br>
                <input type="text" name="carid" value="<?php echo $car_id ?>">
                <label >From</label>
                <input readonly="readonly" name="from" type="text" class="form-control" value="<?php echo $this->session->tempdata('from'); ?>">
            <br>
            <label >To</label>
                <input readonly="readonly" name="to" class="form-control" value="<?php echo $this->session->tempdata('to'); ?>">
                <button class="add-to-storeroom btn btn-default custom-position" type="submit">Add to Storeroom</button>
            </div>
        <?= form_close(); ?>
        </div>
    </div>
</div>
</div>
