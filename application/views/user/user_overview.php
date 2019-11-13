<header>


    <style type="text/css">

body {
  background: #F1F3FA;
}

</style>
   
    
</header>
<body >
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
                    <input type="file" name="profileImage" id="profileImage"  style="display: none">
                     
                   
                   <!-- <img src="http://keenthemes.com/preview/metronic/theme/assets/admin/pages/media/profile/profile_user.jpg" class="img-responsive" alt="">-->
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
                        <li class="active">
                            <a href="<?php echo base_url('index.php/User_controller/user_overview');?>">
                            <i class="glyphicon glyphicon-home"></i>
                            Overview </a>
                        </li>
                        
                        <li>
                            <a href="<?php echo base_url('User_controller/user_account_settings');?>">
                            <i class="glyphicon glyphicon-user"></i>
                            Account Settings </a>
                        </li>
                        <li>
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
            <h4><center><i class="fa fa-list-alt"></i> My Reservation </center> </h4>
                <hr />
            <div class="table-responsive">
                <table class="content-table">
                    <thead class="bill-header cs">
                         <tr>
                            <th id="trs-hd" class="">Car</th>
                            <th id="trs-hd" class="">Start Date</th>
                            <th id="trs-hd" class="">End Date</th>
                            <th id="trs-hd" class="">Total Payment</th>
                            <th id="trs-hd" class="">Status</th>
                            <th id="trs-hd" class="">Option</th>
                         </tr>
                    </thead>
                        <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                        <td>
                                        <a class="btn btn-primary modal-open" href="">Edit</a>    
                                        </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                        <td>
                                        <a class="btn btn-primary modal-open" href="">Edit</a>    
                                        </td>
                                </tr>
                                <tr>
                                    <td>1</td>
                                    <td>2</td>
                                    <td>3</td>
                                    <td>4</td>
                                    <td>5</td>
                                        <td>
                                        <a class="btn btn-primary modal-open" href="">Edit</a>    
                                        </td>
                                </tr>
                            </tbody>
                </table>
        </div>
                                       
            </div>
        </div>
    </div>
</div>

<br>

</body>

 