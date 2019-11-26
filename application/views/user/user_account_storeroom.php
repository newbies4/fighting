<header>


    <style type="text/css">

body {
  background: #F1F3FA;
}

</style>
   
    
</header>
<body>
<br>
<br>
<br>
<div class="container" id="Body-useraccount">
    <div class="row profile">
        <div class="col-md-3">
            <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                <img src=<?php echo base_url("assets\Content-filter\img\Profile_Photo.jpg" )?> id="profile-display" />
                    <!--<img src="" class="img-responsive" alt="">-->
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Arczhar Mummuh
                    </div>
                    <div class="profile-usertitle-job">
                        VERIFIED
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR BUTTONS -->
            
                <!-- END SIDEBAR BUTTONS -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="list-unstyled components">
                        <li >
                            <a href="<?php echo base_url('index.php/User_controller/user_overview');?>">
                            <i class="glyphicon glyphicon-home"></i>
                            Overview </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url('User_controller/user_account_settings');?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Account Settings </a>
                        </li>
                        <li class="active">
                            <a href="<?php echo base_url('User_controller/user_account_storeroom');?>">
                            <i class="glyphicon glyphicon-ok"></i>
                            Storeroom </a>
                        </li>
                    
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>
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
                            <?php if($fetch_data->num_rows() == 0): ?>
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
                            <?php endif; ?>
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

 