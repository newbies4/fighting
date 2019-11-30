<div class="admin-content">
<div class="col-md-12 search-table-col">
    <header>
        <h3> CUSTOMERS </h3>

    </header>
    <a class="btn btn-primary"  href="<?php echo base_url();?>index.php/admin_controller/add_customer">Add Customer</a>
    <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
    <div class="table-responsive">
        <table class="table table-bordered" id="manageMemberTable">
        <thead class="bill-header cs">
            <tr>        
            <th id="trs-hd" class="">Name</th>
            <th id="trs-hd" class="">Age</th>
            <th id="trs-hd" class="">Current Address</th> 
            <th id="trs-hd" class="">Contact No.</th>
            <th id="trs-hd" class="">Email Address</th>
            <th id="trs-hd" class="">Birth Date</th>
            <th id="trs-hd" class="">Gender</th>
            <th id="trs-hd" class="">License No.</th>  
            <th id="trs-hd" class="">Options</th>           
            </tr>
        </thead>
        <tbody>
          <?php if($fetch_data->num_rows() == 0): ?>
            <tr class="warning no-result">
              <td colspan="12"><center> <i class="fa fa-warning"></i>&nbsp;No Result !!! </center></td>
            </tr>
          <?php endif; ?>
          <?php if($fetch_data->num_rows() > 0):?>
            <?php foreach($fetch_data->result_array() as $row): ?>
              <tr>
                <td><?php echo $row['Name'] ?></td>
                <td><?php echo $row['age'] ?></td>
                <td><?php echo $row['current_address'] ?></td> 
                <td><?php echo $row['contact_no'] ?></td> 
                <td><?php echo $row['email'] ?></td>   
                <td><?php echo $row['Birth_Date'] ?></td>  
                <td><?php echo $row['Gender'] ?></td>  
                <td><?php echo $row['license_no'] ?></td>

                

                <td>
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle-btn" data-toggle="dropdown" aria-expanded="false" type="button" >Options <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="<?php echo base_url('Customer_controller/edit_customer/'.$row['customer_id']);?>">Edit</a></div>
                </div>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody> 
        </table>
    </div>
    <?php echo $pagination; ?>
</div>
</div><!--admin-content-->



