<div class="admin-content">
<!--breadcrumb -->

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="<?php echo base_url('admin_controller/add_car');?>">1) Car Information</a></li>
    <li class="breadcrumb-item" ><a href="<?php echo base_url('admin_controller/add_car_picture');?>">2) Add Car Photos</a></li>
	<li class="breadcrumb-item active" aria-current="page"><a href="#">3) Review</a></li>
  </ol>
</nav>


<!--end of breadcrumb -->

<?php if($this->session->flashdata('success_message')): ?>
  	<p class="alert alert-success"><?php echo $this->session->flashdata('success_message'); ?></p>
<?php endif; ?>
<h1>Car Details</h1>
<!-- <p><?php print_r($fetch_data->row(0)); ?></p> -->
<p>Car Owner: <?php echo $fetch_data->row(0)->car_owner; ?></p>
<p>Car Model: <?php echo $fetch_data->row(0)->car_model; ?></p>
<p>Car Brand: <?php echo $fetch_data->row(0)->car_brand; ?></p>
<p>Car Type: <?php echo $fetch_data->row(0)->car_type; ?></p>
<p>Car Seats: <?php echo $fetch_data->row(0)->car_seats; ?></p>
<p>Car Color: <?php echo $fetch_data->row(0)->car_color; ?></p>
<p>Car Plate Number: <?php echo $fetch_data->row(0)->car_platenumber; ?></p>
<p>Car Price: <?php echo $fetch_data->row(0)->car_price; ?></p>
<p>Car Fuel Capacity: <?php echo $fetch_data->row(0)->car_fuel_capacity; ?></p>
<p>Car Gas Type: <?php echo $fetch_data->row(0)->car_gas_type; ?></p>
<p>Car Driver: <?php echo $fetch_data->row(0)->car_driver; ?></p>
<p>Car Transmission: <?php echo $fetch_data->row(0)->car_transmission; ?></p>
<p>Car Car Insurance: <?php echo $fetch_data->row(0)->car_insurance; ?></p>

<p>Front</p><img src="<?php echo base_url('assets/img/cars/' . $fetch_data->row(0)->car_pic_name); ?>">
<p>Back</p><img src="<?php echo base_url('assets/img/cars/' . $fetch_data->row(1)->car_pic_name); ?>">
<p>Interior</p><img src="<?php echo base_url('assets/img/cars/' . $fetch_data->row(2)->car_pic_name); ?>">

<a class="btn btn-primary" href="<?php echo base_url('car_controller/show');?>">View Cars</a>

</div> <!-- admin content -->