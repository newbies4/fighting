
   <header>
   <!-- Navigation -->


<style type="text/css">

html, body, div, span, applet, object, iframe,
h1, h2, h3, h4, h5, h6, p, blockquote, pre,
a, abbr, acronym, address, big, cite, code,
del, dfn, em, img, ins, kbd, q, s, samp,
small, strike, strong, sub, sup, tt, var,
b, u, i, center,
dl, dt, dd, ol, ul, li,
fieldset, form, label, legend,
table, caption, tbody, tfoot, thead, tr, th, td,
article, aside, canvas, details, embed,
figure, figcaption, footer, header, hgroup,
menu, nav, output, ruby, section, summary,
time, mark, audio, video {
  margin: 0;
  padding: 0;
  border: 0;
  vertical-align: baseline;
}
/* HTML5 display-role reset for older browsers */
article, aside, details, figcaption, figure,
footer, header, hgroup, menu, nav, section, main {
  display: block;
}
body, * {
  font-family: MuseoSans,"Helvetica Neue",Helvetica,Arial,sans-serif;
}
ol, ul {
  list-style: none;
}
blockquote, q {
  quotes: none;
}
blockquote:before, blockquote:after,
q:before, q:after {
  content: '';
  content: none;
}
table {
  border-collapse: collapse;
  border-spacing: 0;
}

a, a:active, a:focus {
outline: none;
}


/* --------------------------------

Additional Styles

-------------------------------- */
*, *::after, *::before {
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
}

html * {
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}

a {
  color: #f03d6c;
  text-decoration: none;
}

/* --------------------------------

Main Components

-------------------------------- */
.cd-header {
  position: relative;
  height: 150px;
  background-color: #70e5cd;
}
.cd-header h1 {
  color: #ffffff;
  line-height: 150px;
  text-align: center;
}
@media only screen and (min-width: 1170px) {
  .cd-header {
    height: 180px;
  }
  .cd-header h1 {
    line-height: 180px;
  }
}

.cd-main-content {
  position: relative;
  min-height: 100vh;
}
.cd-main-content:after {
  content: "";
  display: table;
  clear: both;
}
.cd-main-content.is-fixed .cd-tab-filter-wrapper {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
}
.cd-main-content.is-fixed .cd-gallery {
  padding-top: 76px;
}
.cd-main-content.is-fixed .cd-filter {
  position: fixed;
  height: 100vh;
  overflow: hidden;
}
.cd-main-content.is-fixed .cd-filter form {
  height: 100vh;
  overflow: auto;
  -webkit-overflow-scrolling: touch;
}
.cd-main-content.is-fixed .cd-filter-trigger {
  position: fixed;
}
@media only screen and (min-width: 768px) {
  .cd-main-content.is-fixed .cd-gallery {
    padding-top: 90px;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-main-content.is-fixed .cd-gallery {
    padding-top: 100px;
  }
}

/* --------------------------------

xtab-filter

-------------------------------- */
.cd-tab-filter-wrapper {
  background-color: #ffffff;
  box-shadow: 0 1px 1px rgba(0, 0, 0, 0.08);
  z-index: 1;
}
.cd-tab-filter-wrapper:after {
  content: "";
  display: table;
  clear: both;
}

.cd-tab-filter {
  /* tabbed navigation style on mobile - dropdown */
  position: relative;
  height: 50px;
  width: 140px;
  margin: 0 auto;
  z-index: 1;
}
.cd-tab-filter::after {
  /* small arrow icon */
  content: '';
  position: absolute;
  right: 14px;
  top: 50%;
  bottom: auto;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  display: inline-block;
  width: 16px;
  height: 16px;
  background: url("https://entrusters.com/templates/yoo_moustache/html/com_entrusters_shop/products/ui-img/cd-icon-arrow.svg") no-repeat center center;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  transition: all 0.3s;
  pointer-events: none;
}
.cd-tab-filter ul {
  position: absolute;
  top: 0;
  left: 0;
  background-color: #ffffff;
  box-shadow: inset 0 -2px 0 #f03d6c;
}
.cd-tab-filter li {
  display: none;
}
.cd-tab-filter li:first-child {
  /* this way the placehodler is alway visible */
  display: block;
}
.cd-tab-filter a {
  display: block;
  /* set same size of the .cd-tab-filter */
  height: 50px;
  width: 140px;
  line-height: 50px;
  padding-left: 14px;
}
.cd-tab-filter a.selected {
  background: #f03d6c;
  color: #ffffff;
}
.cd-tab-filter.is-open::after {
  /* small arrow rotation */
  -webkit-transform: translateY(-50%) rotate(-180deg);
  -moz-transform: translateY(-50%) rotate(-180deg);
  -ms-transform: translateY(-50%) rotate(-180deg);
  -o-transform: translateY(-50%) rotate(-180deg);
  transform: translateY(-50%) rotate(-180deg);
}
.cd-tab-filter.is-open ul {
  box-shadow: inset 0 -2px 0 #f03d6c, 0 2px 10px rgba(0, 0, 0, 0.2);
}
.cd-tab-filter.is-open ul li {
  display: block;
}
.cd-tab-filter.is-open .placeholder a {
  /* reduces the opacity of the placeholder on mobile when the menu is open */
  opacity: .4;
}
@media only screen and (min-width: 768px) {
  .cd-tab-filter {
    /* tabbed navigation style on medium devices */
    width: auto;
    cursor: auto;
  }
  .cd-tab-filter::after {
    /* hide the arrow */
    display: none;
  }
  .cd-tab-filter ul {
    background: transparent;
    position: static;
    box-shadow: none;
    text-align: center;
  }
  .cd-tab-filter li {
    display: inline-block;
  }
  .cd-tab-filter li.placeholder {
    display: none !important;
  }
  .cd-tab-filter a {
    display: inline-block;
    padding: 0 1em;
    width: auto;
    color: #9a9a9a;
    text-transform: uppercase;
      }
  .no-touch .cd-tab-filter a:hover {
    color: #f03d6c;
  }
  .cd-tab-filter a.selected {
    background: transparent;
    color: #f03d6c;
    /* create border bottom using box-shadow property */
    box-shadow: inset 0 -2px 0 #f03d6c;
  }
  .cd-tab-filter.is-open ul li {
    display: inline-block;
  }
}
@media only screen and (min-width: 1170px) {
  .cd-tab-filter {
    /* tabbed navigation on big devices */
    width: 100%;
    float: right;
    margin: 0;
    -webkit-transition: width 0.3s;
    -moz-transition: width 0.3s;
    transition: width 0.3s;
  }
  .cd-tab-filter.filter-is-visible {
    /* reduce width when filter is visible */
    width: 80%;
  }
}

/* --------------------------------

xgallery

-------------------------------- */

.product-grid4,.product-grid4 .product-image4{position:relative}
.product-grid4{font-family:Poppins,sans-serif;text-align:center;border-radius:5px;overflow:hidden;z-index:1;transition:all .3s ease 0s}
.product-grid4:hover{box-shadow:0 0 10px rgba(0,0,0,.2)}
.product-grid4 .product-image4 a{display:block}
.product-grid4 .product-image4 img{width:100%;height:auto}
.product-grid4 .pic-1{opacity:1;transition:all .5s ease-out 0s}
.product-grid4:hover .pic-1{opacity:0}
.product-grid4 .pic-2{position:absolute;top:0;left:0;opacity:0;transition:all .5s ease-out 0s}
.product-grid4:hover .pic-2{opacity:1}
.product-grid4 .social{width:180px;padding:0;margin:0 auto;list-style:none;position:absolute;right:0;left:0;top:50%;transform:translateY(-50%);transition:all .3s ease 0s}
.product-grid4 .social li{display:inline-block;opacity:0;transition:all .7s}
.product-grid4 .social li:nth-child(1){transition-delay:.15s}
.product-grid4 .social li:nth-child(2){transition-delay:.3s}
.product-grid4 .social li:nth-child(3){transition-delay:.45s}
.product-grid4:hover .social li{opacity:1}
.product-grid4 .social li a{color:#222;background:#fff;font-size:17px;line-height:36px;width:40px;height:36px;border-radius:2px;margin:0 5px;display:block;transition:all .3s ease 0s}
.product-grid4 .social li a:hover{color:#fff;background:#16a085}
.product-grid4 .social li a:after,.product-grid4 .social li a:before{content:attr(data-tip);color:#fff;background-color:#000;font-size:12px;line-height:20px;border-radius:3px;padding:0 5px;white-space:nowrap;opacity:0;transform:translateX(-50%);position:absolute;left:50%;top:-30px}
.product-grid4 .social li a:after{content:'';height:15px;width:15px;border-radius:0;transform:translateX(-50%) rotate(45deg);top:-22px;z-index:-1}
.product-grid4 .social li a:hover:after,.product-grid4 .social li a:hover:before{opacity:1}
.product-grid4 .product-discount-label,.product-grid4 .product-new-label{color:#fff;background-color:#16a085;font-size:13px;font-weight:800;text-transform:uppercase;line-height:45px;height:45px;width:45px;border-radius:50%;position:absolute;left:10px;top:15px;transition:all .3s}
.product-grid4 .product-discount-label{left:auto;right:10px;background-color:#d7292a}
.product-grid4:hover .product-new-label{opacity:0}
.product-grid4 .product-content{padding:25px}
.product-grid4 .title{font-size:15px;font-weight:400;text-transform:capitalize;margin:0 0 7px;transition:all .3s ease 0s}
.product-grid4 .title a{color:#222}
.product-grid4 .title a:hover{color:#16a085}
.product-grid4 .price{color:#16a085;font-size:17px;font-weight:700;margin:0 2px 15px 0;display:block}
.product-grid4 .price span{color:#909090;font-size:13px;font-weight:400;letter-spacing:0;text-decoration:line-through;text-align:left;vertical-align:middle;display:inline-block}
.product-grid4 .add-to-cart{border:1px solid #e5e5e5;display:inline-block;padding:10px 20px;color:#888;font-weight:600;font-size:14px;border-radius:4px;transition:all .3s}
.product-grid4:hover .add-to-cart{border:1px solid transparent;background:#16a085;color:#fff}
.product-grid4 .add-to-cart:hover{background-color:#505050;box-shadow:0 0 10px rgba(0,0,0,.5)}
@media only screen and (max-width:990px){.product-grid4{margin-bottom:30px}
}
@media only screen and (min-width: 1170px) {
  .cd-gallery {
    padding: 50px 2%;
    float: right;
    -webkit-transition: width 0.3s;
    -moz-transition: width 0.3s;
    transition: width 0.3s;
  }
  .cd-gallery li {
    width: 23%;
  }
  .cd-gallery.filter-is-visible {
    /* reduce width when filter is visible */
    width: 80%;
  }
}

/* --------------------------------

xfilter

-------------------------------- */
.cd-filter {
  position: absolute;
  top: 0;
  left: 0;
  width: 280px;
  height: 100%;
  background: #ffffff;
  box-shadow: 4px 4px 20px transparent;
  z-index: 2;
  /* Force Hardware Acceleration in WebKit */
  -webkit-transform: translateZ(0);
  -moz-transform: translateZ(0);
  -ms-transform: translateZ(0);
  -o-transform: translateZ(0);
  transform: translateZ(0);
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
  -webkit-transform: translateX(-100%);
  -moz-transform: translateX(-100%);
  -ms-transform: translateX(-100%);
  -o-transform: translateX(-100%);
  transform: translateX(-100%);
  -webkit-transition: -webkit-transform 0.3s, box-shadow 0.3s;
  -moz-transition: -moz-transform 0.3s, box-shadow 0.3s;
  transition: transform 0.3s, box-shadow 0.3s;
}
.cd-filter::before {
  /* top colored bar */
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  height: 50px;
  width: 100%;
  background-color: #444444;
  z-index: 2;
}
.cd-filter form {
  padding: 70px 20px;
}
.cd-filter .cd-close {
  position: absolute;
  top: 0;
  right: 0;
  height: 50px;
  line-height: 50px;
  width: 60px;
  color: #ffffff;
    text-align: center;
  background: #444444;
  opacity: 0;
  -webkit-transition: opacity 0.3s;
  -moz-transition: opacity 0.3s;
  transition: opacity 0.3s;
  z-index: 3;
}
.no-touch .cd-filter .cd-close:hover {
  background: #666666;
}
.cd-filter.filter-is-visible {
  -webkit-transform: translateX(0);
  -moz-transform: translateX(0);
  -ms-transform: translateX(0);
  -o-transform: translateX(0);
  transform: translateX(0);
  box-shadow: 4px 4px 20px rgba(0, 0, 0, 0.2);
}
.cd-filter.filter-is-visible .cd-close {
  opacity: 1;
}
@media only screen and (min-width: 1170px) {
  .cd-filter {
    width: 20%;
  }
  .cd-filter form {
    padding: 70px 10%;
  }
}

.cd-filter-trigger {
  position: absolute;
  top: 0;
  left: 0;
  height: 50px;
  line-height: 50px;
  width: 60px;
  /* image replacement */
  overflow: hidden;
  text-indent: 100%;
  color: transparent;
  white-space: nowrap;
  background: transparent url("https://entrusters.com/templates/yoo_moustache/html/com_entrusters_shop/products/ui-img/cd-icon-filter.svg") no-repeat center center;
  z-index: 3;
}
.cd-filter-trigger.filter-is-visible {
  pointer-events: none;
}
@media only screen and (min-width: 1170px) {
  .cd-filter-trigger {
    width: auto;
    left: 2%;
    text-indent: 0;
    color: #9a9a9a;
    text-transform: uppercase;
            padding-left: 24px;
    background-position: left center;
    -webkit-transition: color 0.3s;
    -moz-transition: color 0.3s;
    transition: color 0.3s;
  }
  .no-touch .cd-filter-trigger:hover {
    color: #f03d6c;
  }
  .cd-filter-trigger.filter-is-visible, .cd-filter-trigger.filter-is-visible:hover {
    color: #ffffff;
  }
}

/* --------------------------------

xcustom form elements

-------------------------------- */
.cd-filter-block {
  margin-bottom: 1.6em;
}
.cd-filter-block h4 {
  /* filter block title */
  position: relative;
  margin-bottom: .2em;
  padding: 10px 0 10px 20px;
  color: #9a9a9a;
  text-transform: uppercase;
      -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
  cursor: pointer;
}
.no-touch .cd-filter-block h4:hover {
  color: #f03d6c;
}
.cd-filter-block h4::before {
  /* arrow */
  content: '';
  position: absolute;
  left: 0;
  top: 50%;
  width: 16px;
  height: 16px;
  background: url("https://entrusters.com/templates/yoo_moustache/html/com_entrusters_shop/products/ui-img/cd-icon-arrow.svg") no-repeat center center;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  -webkit-transition: -webkit-transform 0.3s;
  -moz-transition: -moz-transform 0.3s;
  transition: transform 0.3s;
}
.cd-filter-block h4.closed::before {
  -webkit-transform: translateY(-50%) rotate(-90deg);
  -moz-transform: translateY(-50%) rotate(-90deg);
  -ms-transform: translateY(-50%) rotate(-90deg);
  -o-transform: translateY(-50%) rotate(-90deg);
  transform: translateY(-50%) rotate(-90deg);
}
.cd-filter-block input, .cd-filter-block select,
.cd-filter-block .radio-label::before,
.cd-filter-block .checkbox-label::before {
  /* shared style for input elements */  border-radius: 0;
  background-color: #ffffff;
  border: 2px solid #e6e6e6;
}
.cd-filter-block input[type='search'],
.cd-filter-block input[type='text'],
.cd-filter-block select {
  width: 100%;
  padding: .8em;
  -webkit-appearance: none;
  -moz-appearance: none;
  -ms-appearance: none;
  -o-appearance: none;
  appearance: none;
  box-shadow: none;
}
.cd-filter-block input[type='search']:focus,
.cd-filter-block input[type='text']:focus,
.cd-filter-block select:focus {
  outline: none;
  background-color: #ffffff;
  border-color: #f03d6c;
}
.cd-filter-block input[type='search'] {
  /* custom style for the search element */
  border-color: transparent;
  background-color: #e6e6e6;
  /* prevent jump - ios devices */
  font-size: 1rem !important;
}
.cd-filter-block input[type='search']::-webkit-search-cancel-button {
  display: none;
}
.cd-filter-block .cd-select {
  /* select element wrapper */
  position: relative;
}
.cd-filter-block .cd-select::after {
  /* switcher arrow for select element */
  content: '';
  position: absolute;
  z-index: 1;
  right: 14px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  display: block;
  width: 16px;
  height: 16px;
  background: url("https://entrusters.com/templates/yoo_moustache/html/com_entrusters_shop/products/ui-img/cd-icon-arrow.svg") no-repeat center center;
  pointer-events: none;
}
.cd-filter-block select {
  cursor: pointer;
}
.cd-filter-block select::-ms-expand {
  display: none;
}
.cd-filter-block .list li {
  position: relative;
  margin-bottom: .8em;
}
.cd-filter-block .list li:last-of-type {
  margin-bottom: 0;
}
.cd-filter-block input[type=radio],
.cd-filter-block input[type=checkbox] {
  /* hide original check and radio buttons */
  position: absolute;
  left: 0;
  top: 0;
  margin: 0;
  padding: 0;
  opacity: 0;
  z-index: 2;
}
.cd-filter-block .checkbox-label,
.cd-filter-block .radio-label {
  padding-left: 24px;

  -webkit-user-select: none;
  -moz-user-select: none;
  -ms-user-select: none;
  user-select: none;
}
.cd-filter-block .checkbox-label::before, .cd-filter-block .checkbox-label::after,
.cd-filter-block .radio-label::before,
.cd-filter-block .radio-label::after {
  /* custom radio and check boxes */
  content: '';
  display: block;
  position: absolute;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
}
.cd-filter-block .checkbox-label::before,
.cd-filter-block .radio-label::before {
  width: 16px;
  height: 16px;
  left: 0;
}
.cd-filter-block .checkbox-label::after,
.cd-filter-block .radio-label::after {
  /* check mark - hidden */
  display: none;
}
.cd-filter-block .checkbox-label::after {
  /* check mark style for check boxes */
  width: 16px;
  height: 16px;
  background: url("https://entrusters.com/templates/yoo_moustache/html/com_entrusters_shop/products/ui-img/cd-icon-check.svg") no-repeat center center;
}
.cd-filter-block .radio-label::before,
.cd-filter-block .radio-label::after {
  border-radius: 50%;
}
.cd-filter-block .radio-label::after {
  /* check mark style for radio buttons */
  width: 6px;
  height: 6px;
  background-color: #ffffff;
  left: 5px;
}
.cd-filter-block input[type=radio]:checked + label::before,
.cd-filter-block input[type=checkbox]:checked + label::before {
  border-color: #f03d6c;
  background-color: #f03d6c;
}
.cd-filter-block input[type=radio]:checked + label::after,
.cd-filter-block input[type=checkbox]:checked + label::after {
  display: block;
}

@-moz-document url-prefix() {
  /* hide custom arrow on Firefox - select element */
  .cd-filter-block .cd-select::after {
    display: none;
  }
}


</style>
</header>
      <!--/.Navbar-->
 
<main>
 <br>
<!--Carousel Wrapper-->
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
        <img class="d-block w-100" src="<?php echo base_url('assets/Content-filter/img/carousel-img1.jpg') ?>"
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
        <img class="d-block w-100" src="<?php echo base_url('assets/Content-filter/img/carousel-img2.jpg') ?>"
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
        <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(9).jpg"
          alt="Third slide">
        <div class="mask rgba-black-slight"></div>
      </div>
      <div class="carousel-caption">
        <h3 class="h3-responsive">Slight mask</h3>
        <p>Third text</p>
      </div>
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
<!--/.Carousel Wrapper-->

<main class="cd-main-content">
		<div class="cd-tab-filter-wrapper">
			<div class="cd-tab-filter">
				<ul class="cd-filters">
					<li class="placeholder"> 
						<a data-type="all" href="#0">All</a> <!-- selected option on mobile -->
					</li> 
					<li class="filter"><a class="selected" href="#0" data-type="all">PRICING</a></li>
					
				</ul> <!-- cd-filters -->
			</div> <!-- cd-tab-filter -->
		</div> <!-- cd-tab-filter-wrapper -->

		<section class="cd-gallery">
		
    <div class="row">

        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="<?php echo base_url('User_controller/user_car_details');?>">
                        <!-- <img class="pic-1" src="<?php echo base_url('assets/Content-filter/home-img/img-1.jpg') ?>">
                        <img class="pic-2" src="<?php echo base_url('assets/Content-filter/home-img/img-1.1.jpg') ?>"> -->
                        <img class="pic-1" src="<?php echo base_url('assets/img/cars/'. $fetch_data->row(0)->car_pic_name) ?>">
                        <img class="pic-2" src="<?php echo base_url('assets/img/cars/'. $fetch_data->row(1)->car_pic_name) ?>">
                    </a>
                  
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">KIA PICANTO</a></h3>
                    <div class="price">
                      ₱2500.00
                        <span>$16.00</span>
                    </div>
                    <a class="add-to-cart" href=""><?php echo $fetch_data->num_rows(); ?>ADD TO CART</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="<?php echo base_url('assets/Content-filter/home-img/img-2.jpg') ?>">
                        <img class="pic-2" src="<?php echo base_url('assets/Content-filter/home-img/img-2.1.jpg') ?>">
                    </a>
                 
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">TOYOTA WIGO</a></h3>
                    <div class="price">
                      ₱2300.00
                       
                    </div>
                    <a class="add-to-cart" href="">ADD TO CART</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="<?php echo base_url('assets/Content-filter/home-img/img-3.jpg') ?>">
                        <img class="pic-2" src="<?php echo base_url('assets/Content-filter/home-img/img-3.1.jpg') ?>">
                    </a>
                    
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">SUZUKI APV</a></h3>
                    <div class="price">
                      ₱2400.00
                        
                    </div>
                    <a class="add-to-cart" href="">ADD TO CART</a>
                </div>
            </div>
        </div>

        <div class="col-md-3 col-sm-6">
            <div class="product-grid4">
                <div class="product-image4">
                    <a href="#">
                        <img class="pic-1" src="<?php echo base_url('assets/Content-filter/home-img/img-4.jpg') ?>">
                        <img class="pic-2" src="<?php echo base_url('assets/Content-filter/home-img/img-4.1.jpg') ?>">
                    </a>
                
                </div>
                <div class="product-content">
                    <h3 class="title"><a href="#">TOYOTA VIOS</a></h3>
                    <?php echo $_SESSION['type']; ?>
                    <div class="price">
                      ₱2200.00
                        
                    </div>
                    <a class="add-to-cart" href="">ADD TO CART</a>
                </div>
            </div>
        </div>

    </div> <!-- end of row -->

		</section> <!-- cd-gallery -->
      
		<div class="cd-filter">
			<form>
        
       
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
							<label class="checkbox-label" for="checkbox3">NISSAN</label>
						</li>
            						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">KIA</label>
						</li>
            						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">ISUZU</label>
						</li>
            						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">MISUBISHI</label>
						</li>
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				<div class="cd-filter-block">
					<h4>TRANSMISSION</h4>
					<ul class="cd-filter-content cd-filters list">
						<li>
							<input class="filter" data-filter=".check1" type="checkbox" id="checkbox1">
			    			<label class="checkbox-label" for="checkbox1">MANUAL</label>
						</li>

						<li>
							<input class="filter" data-filter=".check2" type="checkbox" id="checkbox2">
							<label class="checkbox-label" for="checkbox2">AUTOMATIC</label>
						</li>

						<li>
							<input class="filter" data-filter=".check3" type="checkbox" id="checkbox3">
							<label class="checkbox-label" for="checkbox3">DUAL TRANSMISSION</label>
						</li>
            		
					</ul> <!-- cd-filter-content -->
				</div> <!-- cd-filter-block -->

				
			</form>

      <a href="#0" class="cd-close"><i class="icon ent-close"></i> close </a>
		</div> <!-- cd-filter -->

		<a href="#0" class="cd-filter-trigger">Filters</a>
	</main> <!-- cd-main-content -->
</body>
<script src='//production-assets.codepen.io/assets/common/stopExecutionOnTimeout-b2a7b3fe212eaa732349046d8416e00a9dec26eb7fd347590fbced3ab38af52e.js'></script><script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script src='https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js'></script><script src='https://cdn.jsdelivr.net/jquery.mixitup/2.1.11/jquery.mixitup.min.js'></script>
<script >jQuery(document).ready(function($){
	//open/close lateral filter
	$('.cd-filter-trigger').on('click', function(){
		triggerFilter(true);
	});
	$('.cd-filter .cd-close').on('click', function(){
		triggerFilter(false);
	});

	function triggerFilter($bool) {
		var elementsToTrigger = $([$('.cd-filter-trigger'), $('.cd-filter'), $('.cd-tab-filter'), $('.cd-gallery')]);
		elementsToTrigger.each(function(){
			$(this).toggleClass('filter-is-visible', $bool);
		});
	}

	//mobile version - detect click event on filters tab
	var filter_tab_placeholder = $('.cd-tab-filter .placeholder a'),
		filter_tab_placeholder_default_value = 'Select',
		filter_tab_placeholder_text = filter_tab_placeholder.text();
	
	$('.cd-tab-filter li').on('click', function(event){
		//detect which tab filter item was selected
		var selected_filter = $(event.target).data('type');
			
		//check if user has clicked the placeholder item
		if( $(event.target).is(filter_tab_placeholder) ) {
			(filter_tab_placeholder_default_value == filter_tab_placeholder.text()) ? filter_tab_placeholder.text(filter_tab_placeholder_text) : filter_tab_placeholder.text(filter_tab_placeholder_default_value) ;
			$('.cd-tab-filter').toggleClass('is-open');

		//check if user has clicked a filter already selected 
		} else if( filter_tab_placeholder.data('type') == selected_filter ) {
			filter_tab_placeholder.text($(event.target).text());
			$('.cd-tab-filter').removeClass('is-open');	

		} else {
			//close the dropdown and change placeholder text/data-type value
			$('.cd-tab-filter').removeClass('is-open');
			filter_tab_placeholder.text($(event.target).text()).data('type', selected_filter);
			filter_tab_placeholder_text = $(event.target).text();
			
			//add class selected to the selected filter item
			$('.cd-tab-filter .selected').removeClass('selected');
			$(event.target).addClass('selected');
		}
	});
	
	//close filter dropdown inside lateral .cd-filter 
	$('.cd-filter-block h4').on('click', function(){
		$(this).toggleClass('closed').siblings('.cd-filter-content').slideToggle(300);
	})

	//fix lateral filter and gallery on scrolling
	$(window).on('scroll', function(){
		(!window.requestAnimationFrame) ? fixGallery() : window.requestAnimationFrame(fixGallery);
	});

	function fixGallery() {
		var offsetTop = $('.cd-main-content').offset().top,
			scrollTop = $(window).scrollTop();
		( scrollTop >= offsetTop ) ? $('.cd-main-content').addClass('is-fixed') : $('.cd-main-content').removeClass('is-fixed');
	}

	/************************************
		MitItUp filter settings
		More details: 
		https://mixitup.kunkalabs.com/
		or:
		https://codepen.io/patrickkunka/
	*************************************/

	buttonFilter.init();
	$('.cd-gallery ul').mixItUp({
	    controls: {
	    	enable: false
	    },
	    callbacks: {
	    	onMixStart: function(){
	    		$('.cd-fail-message').fadeOut(200);
	    	},
	      	onMixFail: function(){
	      		$('.cd-fail-message').fadeIn(200);
	    	}
	    }
	});

	//search filtering
	//credits https://codepen.io/edprats/pen/pzAdg
	var inputText;
	var $matching = $();

	var delay = (function(){
		var timer = 0;
		return function(callback, ms){
			clearTimeout (timer);
		    timer = setTimeout(callback, ms);
		};
	})();

	$(".cd-filter-content input[type='search']").keyup(function(){
	  	// Delay function invoked to make sure user stopped typing
	  	delay(function(){
	    	inputText = $(".cd-filter-content input[type='search']").val().toLowerCase();
	   		// Check to see if input field is empty
	    	if ((inputText.length) > 0) {            
	      		$('.mix').each(function() {
		        	var $this = $(this);
		        
		        	// add item to be filtered out if input text matches items inside the title   
		        	if($this.attr('class').toLowerCase().match(inputText)) {
		          		$matching = $matching.add(this);
		        	} else {
		          		// removes any previously matched item
		          		$matching = $matching.not(this);
		        	}
	      		});
	      		$('.cd-gallery ul').mixItUp('filter', $matching);
	    	} else {
	      		// resets the filter to show all item if input is empty
	      		$('.cd-gallery ul').mixItUp('filter', 'all');
	    	}
	  	}, 200 );
	});
});

/*****************************************************
	MixItUp - Define a single object literal 
	to contain all filter custom functionality
*****************************************************/
var buttonFilter = {
  	// Declare any variables we will need as properties of the object
  	$filters: null,
  	groups: [],
  	outputArray: [],
  	outputString: '',
  
  	// The "init" method will run on document ready and cache any jQuery objects we will need.
  	init: function(){
    	var self = this; // As a best practice, in each method we will asign "this" to the variable "self" so that it remains scope-agnostic. We will use it to refer to the parent "buttonFilter" object so that we can share methods and properties between all parts of the object.
    
    	self.$filters = $('.cd-main-content');
    	self.$container = $('.cd-gallery ul');
    
	    self.$filters.find('.cd-filters').each(function(){
	      	var $this = $(this);
	      
		    self.groups.push({
		        $inputs: $this.find('.filter'),
		        active: '',
		        tracker: false
		    });
	    });
	    
	    self.bindHandlers();
  	},
  
  	// The "bindHandlers" method will listen for whenever a button is clicked. 
  	bindHandlers: function(){
    	var self = this;

    	self.$filters.on('click', 'a', function(e){
	      	self.parseFilters();
    	});
	    self.$filters.on('change', function(){
	      self.parseFilters();           
	    });
  	},
  
  	parseFilters: function(){
	    var self = this;
	 
	    // loop through each filter group and grap the active filter from each one.
	    for(var i = 0, group; group = self.groups[i]; i++){
	    	group.active = [];
	    	group.$inputs.each(function(){
	    		var $this = $(this);
	    		if($this.is('input[type="radio"]') || $this.is('input[type="checkbox"]')) {
	    			if($this.is(':checked') ) {
	    				group.active.push($this.attr('data-filter'));
	    			}
	    		} else if($this.is('select')){
	    			group.active.push($this.val());
	    		} else if( $this.find('.selected').length > 0 ) {
	    			group.active.push($this.attr('data-filter'));
	    		}
	    	});
	    }
	    self.concatenate();
  	},
  
  	concatenate: function(){
    	var self = this;
    
    	self.outputString = ''; // Reset output string
    
	    for(var i = 0, group; group = self.groups[i]; i++){
	      	self.outputString += group.active;
	    }
    
	    // If the output string is empty, show all rather than none:    
	    !self.outputString.length && (self.outputString = 'all'); 
	
    	// Send the output string to MixItUp via the 'filter' method:    
		if(self.$container.mixItUp('isLoaded')){
	    	self.$container.mixItUp('filter', self.outputString);
		}
  	}
};
//# sourceURL=pen.js
</script>
</body></html>