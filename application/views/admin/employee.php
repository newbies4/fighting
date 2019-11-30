<div class="admin-content">
<div class="container-fluid">
  <div class="col-md-12 search-table-col">
    <header>
      <h3>EMPLOYEES</h3> 
    </header>
    <?php if($this->session->flashdata('success_msg')): ?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('success_msg'); ?></p>
    <?php endif; ?>
    <?php if($this->session->flashdata('error_msg')): ?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('error_msg'); ?></p>
    <?php endif; ?>
    <?php if($this->session->flashdata('update_employee_success')): ?>
    <p class="alert alert-success"><?php echo $this->session->flashdata('update_employee_success'); ?></p>
    <?php endif; ?>
    <a class="btn btn-primary"  href="<?php echo base_url('admin_controller/add_employee');?>">Add Employee</a>
    <div class="form-group pull-right col-lg-4"><input type="text" placeholder="Search by typing here.." class="search form-control"></div><span class="counter pull-right"></span>
 
    <div class="table-responsive table-bordered table table-hover table-bordered results">
      <table class="table table-bordered" id="">
        <thead class="bill-header cs">
          <tr>
            <th id="trs-hd" class="">First Name</th>
            <th id="trs-hd" class="">Last Name</th>
            <th id="trs-hd" class="">Middle Name</th>
            <th id="trs-hd" class="">Contact No.</th>
            <th id="trs-hd" class="">Options</th>                 
          </tr>
        </thead>
        <tbody>
          <?php if($fetch_data->num_rows() == 0): ?>
            <tr class="warning no-result">
              <td colspan="12"><center><i class="fa fa-warning"></i>&nbsp; No Result !!!</center></td>
            </tr>
          <?php endif; ?>
          <?php if($fetch_data->num_rows() > 0):?>
            <?php foreach($fetch_data->result_array() as $row): ?>
              <tr>
                  <td><?php echo $row['first_name'] ?></td>
                  <td><?php echo $row['last_name'] ?></td>
                  <td><?php echo $row['middle_name'] ?></td> 
                  <td><?php echo $row['contact'] ?></td>                   
                <td>
                <div class="dropdown">
                <button class="btn btn-primary dropdown-toggle-btn" data-toggle="dropdown" aria-expanded="false" type="button" >Options <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-menu" role="menu"><a class="dropdown-item" role="presentation" href="<?php echo base_url('employee_controller/edit_employee/'.$row["id"]);?>">Edit</a><a class="dropdown-item" role="presentation" href="<?php echo base_url('employee_controller/delete_employee/'.$row["id"]);?>">Delete</a></div>
                </div>
                </td>
              </tr>
            <?php endforeach; ?>
          <?php endif; ?>
        </tbody> 
      </table>
    </div>
    <?php echo $pagination; ?>
  </div> <!-- col-md-12 search-table-col -->
</div> <!-- container-fluid -->
</div> <!-- end of admin content -->