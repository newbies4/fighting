<?php $this->load->view('user/user_profile_sidebar'); ?>
        <div class="col-md-9">
          <div class="profile-content">
            <h4><center>Storeroom</center></h4>
            <p>* Payment must be settled within the day.</p>
            <hr />
            <div class="table-responsive table-bordered table table-hover table-bordered results">
               
               <table class="table table-bordered">
                          <!-- Table head -->
                          <thead>
                            <tr>
                              <th>Model</th>
                              <th>Picture</th>
                              <th style="width:8%">Days</th>
                              <th>Subtotal</th>                            
                              <th>Action</th>                            
                            </tr>
                          </thead>
                          <!-- Table head -->

                          <!-- Table body -->
                          
                          <tbody>
                            <?php if($fetch_data->num_rows() > 0): ?>
                              <?php foreach($fetch_data->result_array() as $row): ?>
                                <tr>
                                  <td><?php echo $row['car_model'] ?></td>
                                  <td><?php echo $row['car_pic_name'] ?></td>
                                  <td><?php echo $row['days'] ?></td>
                                  <td><?php echo $row['car_price'] ?></td>
                                  <td><a class="btn btn-danger" href="<?php echo base_url('reserve_controller/remove_storeroom/'.$row['storeroom_id']) ?>" role="button">Remove</a></td>
                                </tr>
                              <?php endforeach; ?>
                            <?php endif; ?>
                          </tbody>
                          <!-- Table body -->
                        </table>
                        <p>Total Payment <?php echo $total;?></p>                    
                </div>
              <a class="btn btn-primary modal-open pull pull-right" href="<?php echo base_url('reserve_controller/add_to_reserve') ?>">Reserve</a>
            </div>
        </div>
    </div>
</div>

<br>
</body>

 