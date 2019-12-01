

<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3><a href="<?php echo base_url('admin_controller'); ?>">Admin Dashboard</a></h3>
    </div>

    <ul class="list-unstyled components">                
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">RENT</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li class="<?php if($this->uri->uri_string() == 'admin_controller/rent') { echo 'active'; } ?>">
                    <a href="<?php echo base_url('admin_controller/rent'); ?>">RENT CAR</a>
                </li>
                <li class="<?php if($this->uri->uri_string() == 'admin_controller/return_car') { echo 'active'; } ?>">
                    <a href="<?php echo base_url('admin_controller/return_car'); ?>">RETURN CAR</a>
                </li>
            </ul>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'reserve_controller/show_reservation') { echo 'active'; } ?>">
            <a href="<?php echo base_url('reserve_controller/show_reservation'); ?>">RESERVATION</a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'car_controller/show') { echo 'active'; } ?>">
            <a href="<?php echo base_url('car_controller/show'); ?>">CARS</a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'customer_controller/show') { echo 'active'; } ?>">
            <a href="<?php echo base_url('customer_controller/show'); ?>">CUSTOMER</a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'Employee_controller/show') { echo 'active'; } ?>">
            <a href="<?php echo base_url('admin_controller/employee'); ?>">EMPLOYEE</a>
        </li>
        <li class="<?php if($this->uri->uri_string() == 'admin_controller/team') { echo 'active'; } ?>">
            <a href="<?php echo base_url('admin_controller/team'); ?>">ABOUT US</a>
        </li>
    </ul>

    
</nav>