<?php $this->load->view('layouts/header'); ?>
<!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-0">
    <div class="container">
    <a class="navbar-brand" href="#">ZC CAR RENTAL</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="nav navbar-nav ml-auto">
      <li class="nav-item" role="presentation">
        <form class="form-inline">
            <div class="md-form my-0">
              <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
            </div>
          </form>
      </li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="#"><i class="fa fa-bell"></i>NOTIFICATIONS<span class="badge badge-primary">00</span></a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('User_controller/index');?>"><i class="fa fa-home"></i>HOME</a></li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#"><i class="fa fa-user"></i>ADMIN</a>    
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" role="presentation" href="#">Help</a>
            <a class="dropdown-item" role="presentation" href="<?php echo base_url('admin_controller/logout'); ?>">Log Out</a>
          </div> 

    </div>
</div>
  </nav>

    <div class="wrapper">
   <?php $this->load->view('layouts/sidebar'); ?>

    <div id="content">
    <a id="sidebarCollapse" class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
    <!-- <button type="button" id="sidebarCollapse" class="btn btn-info">
       <i class="fa fa-bars"></i>
    </button> -->
    
      <?php $this->load->view($main_view); ?>
    
      </div> <!-- content -->
    </div> <!-- end of wrapper -->
<?php $this->load->view('layouts/footer'); ?>