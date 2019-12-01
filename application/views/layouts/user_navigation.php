<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="<?php echo base_url('User_controller/index');?>">ZC Car Rental</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
              <li class="nav-item active">
                <a class="nav-link" href="<?php echo base_url('User_controller/index');?>">HOME
                      <span class="sr-only">(current)</span>
                    </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">PRICING</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('User_controller/team'); ?>">ABOUT US</a>
          </li>
          <li class="nav-item">
                <a class="nav-link" href="#">HELP</a>
          </li>
          <?php if(!isset($_SESSION['logged_in'])): ?>
            <li clas="nav-linkk">
              <a class="nav-link"  href="<?php echo base_url('user_controller/login');?>">LOGIN</a>
            </li>
          <?php else: ?>
            <!-- <li clas="nav-linkk">
              <a class="nav-link"  href="<?php echo base_url('user_controller/logout');?>">LOGOUT</a>
            </li> -->
            <li class="nav-item dropdown">
            <a class="dropdown-toggle-user nav-link" data-toggle="dropdown" aria-expanded="false" href=""><?php echo $_SESSION['username']; ?> <i class="fa fa-caret-down"></i></a>    
              <div class="dropdown-menu" role="menu">
                <a class="dropdown-item" role="presentation" href="<?php echo base_url('user_controller/user_account_settings/'.$_SESSION['username']);?>">My Account</a>
                <a class="dropdown-item" role="presentation" href="<?php echo base_url('User_controller/storeroom');?>">My Reservation</a>
                <a class="dropdown-item" role="presentation" href="<?php echo base_url('reserve_controller/show_storeroom');?>">Storeroom</a>
                <?php if($_SESSION['type'] == 'admin'): ?>
                  <a class="dropdown-item" role="presentation" href="<?php echo base_url('admin_controller/');?>">DASHBOARD</a>
                <?php endif; ?>
                <a class="dropdown-item" role="presentation" href="<?php echo base_url('user_controller/logout');?>">LOGOUT</a>
              </div> 
          </li>
          <?php endif; ?>
             
          
      </ul>
    </div>
  </div>
</nav>