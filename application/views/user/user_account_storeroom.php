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
                              <th style="width:8%">Quantity</th>
                              <th>Price</th>
                              <th>Driver</th>
                              <th>Subtotal</th>                              
                            </tr>
                          </thead>
                          <!-- Table head -->

                          <!-- Table body -->
                          
                          <tbody>
                            <!-- <?php if($fetch_data->num_rows() == 0): ?>
                              <tr class="warning no-result">
                                <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                              </tr>
                            <?php endif; ?>
                            <?php if($fetch_data->num_rows() > 0):?>
                              <?php foreach($fetch_data->result_array() as $row): ?>
                               <tr>
                              <td><?php echo $row['reserve_date'] ?></td>
                              <td><?php echo $row['pick_up_date'] ?></td>
                              <td><?php echo $row['pick_up_time'] ?></td> 
                              <td><?php echo $row['reserve_status'] ?></td>  
                            </tr>
                                <td colspan="5" align ="right">Total</td>
                                <td align="right">0.00</td>
                            <?php endforeach; ?>
                            <?php endif; ?> -->
                          </tbody>
                          <!-- Table body -->
                        </table>                           
                </div>
              <a class="btn btn-primary modal-open pull pull-right" href="">Reserve</a>
            </div>
        </div>
    </div>
</div>

<br>
</body>

 