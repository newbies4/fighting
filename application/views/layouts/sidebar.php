<?php /**<div id="sidebar-wrapper">
    <ul class="sidebar-nav">
       <li class="sidebar-brand"> <a href="#">Home </a></li>
       <li> <a href="<?php echo base_url();?>index.php/home" class="list-group-item active">DASHBOARD</a></li>
       <li><a class = "list-group-item focus" href="<?php echo base_url();?>index.php/admin_controller/rent">RENT</a> </li>
       <li> <a class="list-group-item focus" href="<?php echo base_url();?>index.php/admin_controller/reservation">RESERVATION</a></li>
       <li><a class= "list-group-item focus" href="<?php echo base_url();?>index.php/admin_controller/return_car">RETURN CAR</a></li>
       <li><a href="<?php echo base_url();?>index.php/admin_controller/cars" class="list-group-item focus">CARS</a></li>
       <li><a href="<?php echo base_url();?>index.php/admin_controller/customer" class ="list-group-item focus">CUSTOMERS</a></li>
       <li> <a href="<?php echo base_url();?>index.php/admin_controller/employee">EMPLOYEE</a></li>
    </ul>
</div>
*/?>

<!-- Sidebar  -->
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><a href="<?php echo base_url('admin_controller'); ?>">Admin Dashboard</a></h3>
            </div>

            <ul class="list-unstyled components">                
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">RENT</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="<?php echo base_url('admin_controller/rent'); ?>">RENT CAR</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('admin_controller/return_car'); ?>">RETURN CAR</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url('admin_controller/reservation'); ?>">RESERVATION</a>
                </li>
                <!-- <li>
                    <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                    <ul class="collapse list-unstyled" id="pageSubmenu">
                        <li>
                            <a href="#">Page 1</a>
                        </li>
                        <li>
                            <a href="#">Page 2</a>
                        </li>
                        <li>
                            <a href="#">Page 3</a>
                        </li>
                    </ul>
                </li> -->
                <li>
                    <a href="<?php echo base_url('admin_controller/cars'); ?>">CARS</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin_controller/customer'); ?>">CUSTOMER</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin_controller/employee'); ?>">EMPLOYEE</a>
                </li>
                <li>
                    <a href="<?php echo base_url('admin_controller/team'); ?>">ABOUT US</a>
                </li>
            </ul>

            
        </nav>