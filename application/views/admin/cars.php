<div class="admin-content">
<div class="col-md-12 search-table-col">
<header>
    <h3> CARS </h3>
    </header>
    
    <a class="btn btn-primary" href="<?php echo base_url('car_controller/add_car');?>">Add New</a>
    <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
  
    <?php if($this->session->flashdata('edit_car_message')): ?>
      <p class="alert alert-success"><?php echo $this->session->flashdata('edit_car_message'); ?></p>
    <?php endif; ?>
    <div class="table-responsive">
        <table class="table table-bordered table-hover" id="">
            <thead class="bill-header cs">
                <tr>
                    <th id="trs-hd" class="">Model</th>
                    <th id="trs-hd" class="">Brand</th>
                    <th id="trs-hd" class="">Type</th>
                    <th id="trs-hd" class="">Seats</th>
                    <th id="trs-hd" class="">Color</th>
                    <th id="trs-hd" class="">Plate Number</th>
                    <th id="trs-hd" class="">Price</th>
                    <th id="trs-hd" class="">Fuel Capacity</th>
                    <th id="trs-hd" class="">Driver</th>
                    <th id="trs-hd" class="">Trasmisssion</th>
                    <th id="trs-hd" class="">Insurance Type</th>
                    <th id="trs-hd" class="">Availability</th>
                    <th id="trs-hd" class="">Options</th>
                </tr>
            </thead>
            <tbody>
                
                <!-- <th id="trs-hd" class="">Picture</th> -->
                <?php if($fetch_data->num_rows() > 0):?>
                    <?php foreach($fetch_data->result_array() as $row): ?>
                   <tr>
                        <td><?php echo $row['car_model'] ?></td>
                        <td><?php echo $row['car_brand'] ?></td>
                        <td><?php echo $row['car_type'] ?></td>
                        <td><?php echo $row['car_seats'] ?></td>
                        <td><?php echo $row['car_color'] ?></td>
                        <td><?php echo $row['car_platenumber'] ?> </td>
                        <td><?php echo $row['car_price'] ?></td>
                        <td><?php echo $row['car_fuel_capacity'] ?>L</td>
                        <td><?php echo $row['car_driver'] ?></td>
                        <td><?php echo $row['car_transmission'] ?></td>
                        <td><?php echo $row['car_insurance'] ?> </td>
                        <td><?php echo $row['is_available'] ?></td>
                        <td>
                            <div class="dropdown"><button class="btn btn-primary dropdown-toggle-btn" data-toggle="dropdown" aria-expanded="false" type="button" >Options <i class="fa fa-caret-down"></i></button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" role="presentation" href="<?php echo base_url('car_controller/edit_car_details/'.$row["car_id"]);?>">Edit Details</a>
                                <a class="dropdown-item" role="presentation" href="<?php echo base_url('car_controller/edit_car_pictures/'.$row["car_id"]);?>">Edit Pictures</a>
                                <a class="dropdown-item" role="presentation" href="<?php echo base_url('car_controller/edit_availability/'.$row["car_id"]);?>">Mark as <?php echo ($row['is_available'] == 'Available' ? 'Unavailable' : 'Available') ?></a>
                            </div>
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                <?php elseif($fetch_data->num_rows() == 0): ?>
                    <tr class="warning no-result">
                        <td colspan="12"><center><i class="fa fa-warning"></i>&nbsp; No Result !!! </center></td>
                    </tr>
                <?php endif; ?>
            </tbody>       
        </table>
    </div> <!-- table-responsive -->

    <?php echo $pagination; ?>
</div> <!-- col-md-12 search-table-col -->
</div> <!--admin-content -->