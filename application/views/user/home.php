
   <header>
   <!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">ZC Car Rental</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item active">
          <a class="nav-link" href="#">HOME
                <span class="sr-only">(current)</span>
              </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">PRICING</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">SERVICES</a>
        </li>
		<li class="nav-item dropdown">
			<a class="dropdown-toggle nav-link" data-toggle="dropdown" aria-expanded="false" href="">SIGN IN</a>    
				<div class="dropdown-menu" role="menu">
					<a class="dropdown-item" role="presentation" href="<?php echo base_url();?>index.php/User_controller/user_account">Settings</a>
					<a class="dropdown-item" role="presentation" href="#">Log Out</a>
				</div> 
		</li>
      </ul>
    </div>
  </div>
</nav>
</header>
      <!--/.Navbar-->
 
<main>
 
<div class="bs-example">
<div id="carousel-example-2" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-2" data-slide-to="1"></li>
    <li data-target="#carousel-example-2" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <div class="view">
        <img class="d-block w-100" src=<?php echo base_url('assets/Content-filter/img/Dc.jpg') ?>
          alt="First slide">
        <div class="mask rgba-black-light"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Light mask</h3>
        <p>First text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src=<?php echo base_url('assets/Content-filter/img/carou-1.jpg') ?>
          alt="Second slide">
        <div class="mask rgba-black-strong"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Strong mask</h3>
        <p>Secondary text</p>
      </div>
    </div>
    <div class="carousel-item">
      <!--Mask color-->
      <div class="view">
        <img class="d-block w-100" src=<?php echo base_url('assets/Content-filter/img/carou-2.jpg') ?>
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
    </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>
<!--/.Carousel Wrapper-->

<div  class="cd-main-content">
<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">All</a></li>
				
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
			<ul>
				<li class="mix color-1 check1 radio2 option3"><img src=<?php echo base_url('assets/Content-filter/img/img-1.jpg') ?> alt="Image 1"></li>				
				<li class="mix color-2 check2 radio2 option2"><img src=<?php echo base_url('assets/Content-filter/img/img-2.jpg') ?> alt="Image 2"></li>
				<li class="mix color-1 check3 radio3 option1"><img src=<?php echo base_url('assets/Content-filter/img/img-3.jpg') ?> alt="Image 3"></li>
				<li class="mix color-1 check3 radio2 option4"><img src=<?php echo base_url('assets/Content-filter/img/img-4.jpg') ?> alt="Image 4"></li>
				<li class="mix color-1 check1 radio3 option2"><img src=<?php echo base_url('assets/Content-filter/img/img-5.jpg') ?> alt="Image 5"></li>
				<li class="mix color-2 check2 radio3 option3"><img src=<?php echo base_url('assets/Content-filter/img/img-6.jpg') ?> alt="Image 6"></li>
				<li class="mix color-2 check2 radio2 option1"><img src=<?php echo base_url('assets/Content-filter/img/img-7.jpg') ?> alt="Image 7"></li>
				<li class="mix color-1 check1 radio3 option4"><img src=<?php echo base_url('assets/Content-filter/img/img-8.jpg') ?> alt="Image 8"></li>
				<li class="mix color-2 check1 radio2 option3"><img src=<?php echo base_url('assets/Content-filter/img/img-9.jpg') ?> alt="Image 9"></li>
				<li class="mix color-1 check3 radio2 option4"><img src=<?php echo base_url('assets/Content-filter/img/img-10.jpg') ?> alt="Image 10"></li>
				<li class="mix color-1 check3 radio3 option2"><img src=<?php echo base_url('assets/Content-filter/img/img-11.jpg') ?> alt="Image 11"></li>
				<li class="mix color-2 check1 radio3 option1"><img src=<?php echo base_url('assets/Content-filter/img/img-12.jpg') ?> alt="Image 12"></li>
				<li class="gap"></li>
				<li class="gap"></li>
				<li class="gap"></li>
			</ul>
			<div class="cd-fail-message">No results found</div>
		</section> <!-- cd-gallery -->

		<div class="cd-filter">
			<form>
				<div class="cd-filter-block">
					<h4>Search</h4>
					
					<div class="cd-filter-content">
						<input type="search" placeholder="Try color-1...">
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>BRAND</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">TOYOTA</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">SUZUKI</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">FORD</label>
						</li>
						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">MITSUBISHI</label>
						</li>

					</ul>
					 <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
				<div class="cd-filter-block">
					<h4>COLOR</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">RED</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">BLUE</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">BLACK</label>
						</li>

					</ul>
					
					 <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
				
				<div class="cd-filter-block">
					<h4>Select Price</h4>
					
					<div class="cd-filter-content">
						<div class="cd-select cd-filters">
							<select class="filter" name="selectThis" id="selectThis">
								<option value="">Choose an Price</option>
								<option value=".option1">500₱ - 1000₱</option>
								<option value=".option2">1000₱- 2500₱ </option>
								<option value=".option3">100₱- 500₱</option>
								<option value=".option4">10,000₱ +</option>
							</select>
						</div> <!-- cd-select -->
					</div> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>Seats</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">4 SEATER</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">7 SEATER</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio3" type="radio" name="radioButton" id="radio3">
							<label class="radio-label" for="radio3">12 SEATER</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>TRANSMISSION</h4>

					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter="" type="radio" name="radioButton" id="radio1" checked>
							<label class="radio-label" for="radio1">AUTOMATIC</label>
						</li>

						<li>
							<input class="filter" data-filter=".radio2" type="radio" name="radioButton" id="radio2">
							<label class="radio-label" for="radio2">MANUAL</label>
						</li>

					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->
			</form>

			<a href="#0" class="cd-close">Close</a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
</div>
