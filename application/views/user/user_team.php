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
		<li class="nav-item dropdown">
			<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="">SIGN IN</a>    
				<div class="dropdown-menu" role="menu">
				<a class="dropdown-item" role="presentation" href="<?php echo base_url('User_controller/user_overview');?>">My Account</a>
                    <a class="dropdown-item" role="presentation" href="<?php echo base_url('User_controller/user_account_storeroom');?>">My Reservation</a>
					<a class="dropdown-item" role="presentation" href="<?php echo base_url('user_controller/login');?>">Sign In</a>
          <a class="dropdown-item" role="presentation" href="<?php echo base_url('admin_controller/user_signup');?>">Sign Up</a>
				</div> 
		</li>
      </ul>
    </div>
  </div>
</nav>
<br>
<br>
<br>
<!-- Header -->
<header class="bg-primary text-center py-5 mb-4">
  <div class="container">
    <h1 class="font-weight-light text-white">Meet the Team</h1>
  </div>
</header>
<br>
<!-- Page Content -->
<div class="container">
  <div class="row">
    <!-- Team Member 1 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://vignette.wikia.nocookie.net/kimetsu-no-yaiba/images/3/3b/Giyuu_anime.png/revision/latest?cb=20190818131909&path-prefix=fr" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Arczhar Mummuh</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 2 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://vignette.wikia.nocookie.net/kimetsu-no-yaiba/images/e/e5/Shinobu_anime.png/revision/latest?cb=20190831171723" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Euginie Tubo</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 3 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://vignette.wikia.nocookie.net/kimetsu-no-yaiba/images/3/3f/Uzui_anime.png/revision/latest?cb=20190831171416" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Haidir Hassan</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
    <!-- Team Member 4 -->
    <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-0 shadow">
        <img src="https://vignette.wikia.nocookie.net/kimetsu-no-yaiba/images/f/fd/Kyojuro_anime.png/revision/latest?cb=20190831171655" class="card-img-top" alt="...">
        <div class="card-body text-center">
          <h5 class="card-title mb-0">Megg Bryan Tan</h5>
          <div class="card-text text-black-50">Web Developer</div>
        </div>
      </div>
    </div>
  </div>
  <!-- /.row -->
</div>
<!-- /.container -->
