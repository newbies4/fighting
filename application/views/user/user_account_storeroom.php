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
                                  <td>
                                    <div class="dropdown">
                                      <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        Dropdown button
                                      </button>
                                      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                        <a class="dropdown-item" href="#">Action</a>
                                        <a class="dropdown-item" href="#">Another action</a>
                                        <a class="dropdown-item" href="#">Something else here</a>
                                      </div>
                                    </div>
                                  </td>
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

 