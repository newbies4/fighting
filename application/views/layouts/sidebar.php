

<!-- Sidebar  -->
<nav id="sidebar">
    <div class="sidebar-header">
        <h3><a href="<?php echo base_url('admin_controller'); ?>">Admin Dashboard</a></h3>
    </div>

    <ul class="list-unstyled components">                
        <li class="active">
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">RENT</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li >
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
        <li>
            <a href="<?php echo base_url('car_controller/show'); ?>">CARS</a>
        </li>
        <li>
            <a href="<?php echo base_url('customer_controller/show'); ?>">CUSTOMER</a>
        </li>
        <li>
            <a href="<?php echo base_url('admin_controller/employee'); ?>">EMPLOYEE</a>
        </li>
        <li>
            <a href="<?php echo base_url('admin_controller/team'); ?>">ABOUT US</a>
        </li>
    </ul>

    
</nav>