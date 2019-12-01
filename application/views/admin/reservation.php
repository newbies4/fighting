<div class="admin-content">
<div class="col-md-12 search-table-col">
    <?php if($this->session->flashdata('reserve_message')): ?>
      <p class="alert alert-success"><?php echo $this->session->flashdata('reserve_message'); ?></p>
    <?php endif; ?>
    <header>
        <h3> Reservation </h3> 
    </header>
    <a class="btn btn-primary" href="<?php echo base_url();?>index.php/admin_controller/add_reservation">New Reservation</a>
    <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
    <div class="table-responsive table-bordered table table-hover table-bordered results">
        <table class="table table-bordered table-hover">
            <thead class="bill-header cs">
                <tr>                    
                    <th id="trs-hd" class="">Name</th>
                    <th id="trs-hd" class="">Start Date</th>
                    <th id="trs-hd" class="">End Date</th>
                    <th id="trs-hd" class="">Days</th>
                    <th id="trs-hd" class="">Reservation Date</th>
                    <th id="trs-hd" class="">Total Payment</th>
                    <th id="trs-hd" class="">Status</th>
                    <th id="trs-hd" class="">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if($fetch_data->num_rows() > 0):?>
                    <?php foreach($fetch_data->result_array() as $row): ?>
                        <tr>
                            <td><?php echo $row['Name'] ?></td>
                            <td><?php echo $row['start_date'] ?></td>
                            <td><?php echo $row['end_date'] ?></td>
                            <td><?php echo $row['days'] ?></td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td>₱<?php echo $row['total_payment'] ?></td>
                            <td><?php echo $row['reserve_status'] ?></td>
                            <td>
                                <div class="dropdown">
                                  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Option
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="<?php echo base_url('reserve_controller/view_details/'.$row['reserve_id']) ?>">View Details</a>
                                    <a class="dropdown-item <?php echo ($row['reserve_status'] == 'confirmed') ? 'disabled':'' ?>" href="<?php echo base_url('reserve_controller/update_reservation_status/'.$row['reserve_id'].'/confirmed') ?>">Confirm Reservation</a>
                                    <a class="dropdown-item <?php echo ($row['reserve_status'] == 'declined') ? 'disabled':'' ?>" href="<?php echo base_url('reserve_controller/update_reservation_status/'.$row['reserve_id'].'/declined') ?>">Decline Reservation</a>
                                  </div>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php elseif($fetch_data->num_rows() == 0): ?>
                    <tr class="warning no-result">
                        <td colspan="12"><center><i class="fa fa-warning"></i>&nbsp; No Result !!!</center></td>
                <?php endif; ?>
                </tr>
            </tbody>
        </table>
    </div> <!-- table-responsive -->
</div> <!-- col-md-12 search-table-col -->
</div> <!-- admin-content -->