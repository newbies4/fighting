<div class="admin-content">
<header>
  <center><h3>ADD RENT </h3></center>
  <br>
</header>
<div class="container">                    
  <div class="row">
      <!-- left part -->
    <div class="col-sm-5">
        <div class="form-group">
            <input type="text" class="form-control" id="" name="" >
            <label for="">Customer Name* </label>
        </div>
        <br> <center>SCHEDULE OF RENT   
        <div class="form-group">
          <label >Start Date</label>
          <input type="date" name="bday" max="3000-12-31" 
                  min="1000-01-01" class="form-control">
          </div>
        <br>
        <div class="form-group">
          <label >End Date</label>
          <input type="date" name="bday" min="1000-01-01"
                  max="3000-12-31" class="form-control">
        </div>
        
    </div> <!-- end of col-sm-6 -->
    <!-- left part -->

     <!--right part -->  
    <div class="col-sm">                                                          
    <!-- Table  -->
      <table class="table table-bordered">
        <!-- Table head -->
        <thead>
          <tr>
            <th>Choose</th>
            <th>Brand</th>
            <th>Model</th>
            <th>Picture</th>
            <th>Price</th>
            <th>Brand</th>
          </tr>
        </thead>
        <!-- Table head -->

        <!-- Table body -->
        <tbody>
          <tr>
            <th scope="row">
              <!-- Default unchecked -->
              <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="tableDefaultCheck2" checked>
                <?php if($fetch_data->num_rows() == 0): ?>
                    <tr class="warning no-result">
                      <td colspan="12"><i class="fa fa-warning"></i>&nbsp; No Result !!!</td>
                    </tr>
                <?php endif; ?>
                    <!-- <th id="trs-hd" class="">Picture</th> -->
                    <?php if($fetch_data->num_rows() > 0):?>
                        <?php foreach($fetch_data->result_array() as $row): ?>
                       <tr>
                            <td><?php echo $row['is_available'] ?></td>
                            <td>
                                <div class="dropdown"><button class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button" >Options</button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item" role="presentation" href="<?php echo base_url('car_controller/edit_car_details/'.$row["car_id"]);?>">Edit Details</a>
                                    <a class="dropdown-item" role="presentation" href="<?php echo base_url('car_controller/edit_car_pictures/'.$row["car_id"]);?>">Edit Pictures</a>
                                    <a class="dropdown-item" role="presentation" href="<?php echo base_url('car_controller/edit_availability/'.$row["car_id"]);?>">Mark as <?php echo ($row['is_available'] == 'Available' ? 'Unavailable' : 'Available') ?></a>
                                </div>
                                </div>
                            </td>
                            <td><?php echo $row['created_at'] ?></td>
                            <td><?php echo $row['car_brand'] ?>Brand</td>
                            <td><?php echo $row['car_type'] ?>Type</td>
                            <td><?php echo $row['car_seats'] ?>Seats</td>
                            <td><?php echo $row['car_color'] ?>Color</td>
                            <td><?php echo $row['car_platenumber'] ?>Plate Number</td>
                            <td><?php echo $row['car_price'] ?>Price</td>
                            <td><?php echo $row['car_fuel_capacity'] ?>Fuel Capacity</td>
                            <td><?php echo $row['car_driver'] ?>Driver</td>
                            <td><?php echo $row['car_transmission'] ?>Trasmisssion</td>
                            <td><?php echo $row['car_insurance'] ?>Insurance Type</td>
                        </tr>
                        <?php endforeach; ?>
                    <?php endif; ?>
          </tr>
          
        </tbody>
        <!-- Table body -->
      </table>
      <h3>Chosen Cars</h3>
      <a class="btn btn-primary" href="">RENT</a>   
      <a class="btn btn-primary" href="<?php echo base_url();?>index.php/home/cars">View Cars</a>  
      <!-- Table  --  >                  
    </div> <!-- end of col-sm-3 --> 
    <!--right part -->                      
  </div> <!-- end of row -->
</div> <!-- container -->
</div> <!--admin content -->