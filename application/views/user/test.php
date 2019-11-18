<br>
<br>
<br>
<table class="table table-sm mt-4">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
	<?php if($fetch_data->num_rows() > 0):?>
	  	<?php foreach($fetch_data->result_array() as $row): ?>
		    <tr>
		      <th scope="row">1</th>
          <td><?php echo $row['car_id']; ?></td>
		      <td><?php echo $row['car_model']; ?></td>
		      <td><?php echo $row['car_brand']; ?></td>
		      <td><?php echo $row['car_price']; ?></td>
          <td><?php echo $row['car_pic_name']; ?></td>
          <td><img src="<?php echo base_url('assets/img/cars/') . $row['car_pic_name']; ?>" style="width: 100px;"></td>
		    </tr>
	    <?php endforeach; ?>
    <?php endif; ?>
  </tbody>
</table>