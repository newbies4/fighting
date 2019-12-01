reservation details
<div class="admin-content">

<!-- <?php echo print_r($fetch_data); ?> -->
<?php foreach ($fetch_data->result_array() as $row) {
	print_r($row);
	echo "<br>";
}
?>

<h1>Customer Data</h1>
<p>Name: <?php echo $fetch_data->row(0)->Name; ?></p>
<p>Address: <?php echo $fetch_data->row(0)->current_address; ?></p>
<p>Gender: <?php echo $fetch_data->row(0)->Gender; ?></p>
<p>Date of Birth: <?php echo $fetch_data->row(0)->Birth_Date; ?></p>
<p>Age: <?php echo $fetch_data->row(0)->Birth_Date; ?></p>
<p>Email: <?php echo $fetch_data->row(0)->email; ?></p>
<p>License No.: <?php echo $fetch_data->row(0)->license_no; ?></p>
<p>----------------------</p>
<p>Date Reserve: <?php echo $fetch_data->row(0)->created_at; ?></p>
<p>Start Date: <?php echo $fetch_data->row(0)->start_date; ?></p>
<p>End Date: <?php echo $fetch_data->row(0)->end_date; ?></p>
<p>Total Days: <?php echo $fetch_data->row(0)->days; ?></p>
<table class="table table-bordered table-hover">
  <caption style="caption-side: top !important;">List of Cars</caption>
  <caption>Total Payment: <?php echo $fetch_data->row(0)->total_payment; ?></caption>
  <thead>
    <tr>
      <th scope="col">Model</th>
      <th scope="col">Brand</th>
      <th scope="col">Type</th>
      <th scope="col">Color</th>
      <th scope="col">Plate Number</th>
      <th scope="col">Price</th>
    </tr>
  </thead>
  <tbody>
  	<?php if($fetch_data->num_rows() > 0):?>
        <?php foreach($fetch_data->result_array() as $row): ?>
		    <tr>
		      <td><?php echo $row['car_model']; ?></td>
		      <td><?php echo $row['car_brand']; ?></td>
		      <td><?php echo $row['car_type']; ?></td>
		      <td><?php echo $row['car_color']; ?></td>
		      <td><?php echo $row['car_platenumber']; ?></td>
		      <td><?php echo $row['car_price']; ?></td>
		    </tr>
	    <?php endforeach; ?>
	<?php endif; ?>
  </tbody>
</table>

<a href="<?php echo base_url('reserve_controller/show_reservation') ?>" class="btn btn-primary" role="button" aria-pressed="true">Back</a>
</div>