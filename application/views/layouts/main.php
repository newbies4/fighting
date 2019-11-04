<?php
/**<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin side</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css?h=5ff8ca2121314e3b805fc8fdbe513705">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/breadcrumb.css?h=eca7075e56a73a3612905c6d8191324f">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Contact-Form-Clean.css?h=c942239c91f94a6b90d67fb2496c21bf">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Data-Table-1.css?h=71f79ecfb6de2ac09d4f4c6f4b749319">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Data-Table.css?h=71f79ecfb6de2ac09d4f4c6f4b749319">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/modal.css?h=98f5b320d079585e0074f2a278aed8fd">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Navigation-Clean.css?h=3d359cf00afe1d7b8d5c5d8e7cba9844">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Panel-Body.css?h=20c065d46cd1fea8ebe3e85eb1f924b5">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Panel.css?h=8c2b63a5491790d9f517499a1b9d0cc5">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Sidebar-Menu-1.css?h=adf8fd0aa4cdf75c6dfc78989ffd7748">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Table-With-Search-1.css?h=70e12aa61bd6652a1b6ca0664ec38c0d">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Table-With-Search.css?h=604cb4e2e523f88e3270d5f1dbcb81fa">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
         <!-- Bootstrap core CSS -->
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
         <link href="css/bootstrap.min.css" rel="stylesheet">
         <!-- Material Design Bootstrap -->
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/mdb.min.css') ?>">
         <link href="css/mdb.min.css" rel="stylesheet">
         <!-- Your custom styles (optional) -->
         <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/style.css') ?>">
         <link href="css/style.css" rel="stylesheet">
</head>
<body>

<?php $this->load->view('layouts/header'); ?>

<div id="wrapper">
    <?php $this->load->view('layouts/sidebar'); ?>
	<div class="page-content-wrapper">
		<div class="container-fluid"><a class="btn btn-link" role="button" href="#menu-toggle" id="menu-toggle"><i class="fa fa-bars"></i></a>
			
<!-- adfasdf -->
				<?php $this->load->view($main_view); ?>

			
		</div> <!-- container-fluid -->
	</div> <!-- end of page-content-wrapper -->
</div> <!-- end of wrapper -->



 <script src="<?php echo base_url();?>assets/js/jquery.min.js?h=1dd785e1de9a32e236b624ae268bb803"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js?h=2394c9ffd5558f411ffdc3326e9a8962"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/label.js?h=0597ac31c002d7ed04b09b4f4d0104ca"></script>
    <script src="<?php echo base_url();?>assets/js/modal.js?h=106753b11d10f7ee179d9c47f414662d"></script>
    <script src="<?php echo base_url();?>assets/js/Sidebar-Menu.js?h=799b9a88f11384c3d5b19774a5e8d1ed"></script>
    <script src="<?php echo base_url();?>assets/js/Table-With-Search.js?h=aeb9a0ac8b6cc9ec2e3b9cc3add2f239"></script>

    <script type="text/javascript" src="<?php echo base_url('assetes/js/jquery-3.3.1.min.js') ?>"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="<?php echo base_url('assetes/js/popper.min.js') ?>"></script>
    
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('assetes/js/bootstrap.min.js') ?>"></script>
    
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="<?php echo base_url('assetes/js/mdb.min.js') ?>"></script>
   

    <script type="text/javascript"></script>

</body>
</html>
*/
?>


<?php $this->load->view('layouts/header'); ?>
<!-- Navigation Bar -->
  <nav class="navbar navbar-expand-lg navbar-light bg-light mb-0">
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
      <li class="nav-item" role="presentation"><a class="nav-link" href="#">NOTIFICATIONS<span class="badge badge-primary">00</span></a></li>
      <li class="nav-item" role="presentation"><a class="nav-link" href="<?php echo base_url('User_controller/index');?>">HOME</a></li>
      <li class="nav-item dropdown">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="#">ADMIN</a>    
          <div class="dropdown-menu" role="menu">
            <a class="dropdown-item" role="presentation" href="#">Help</a>
            <a class="dropdown-item" role="presentation" href="<?php echo base_url('admin_controller/logout'); ?>">Log Out</a>
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