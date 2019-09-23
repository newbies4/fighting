<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>admin side</title>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/bootstrap/css/bootstrap.min.css?h=32835fe3d6495f9113704e1390ca5b0d">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/-Login-form-Page-BS4-.css?h=8917ed24363311d6deb0e3de10c0c1d1">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/breadcrumb.css?h=eca7075e56a73a3612905c6d8191324f">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Contact-Form-Clean.css?h=c942239c91f94a6b90d67fb2496c21bf">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Data-Table-1.css?h=71f79ecfb6de2ac09d4f4c6f4b749319">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Data-Table.css?h=71f79ecfb6de2ac09d4f4c6f4b749319">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.15/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/modal.css?h=de99756ed075a6ec1da0ef3031e6e7cf">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Navigation-Clean.css?h=3d359cf00afe1d7b8d5c5d8e7cba9844">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Panel-Body.css?h=20c065d46cd1fea8ebe3e85eb1f924b5">
    <link rel="stylesheet" href="<?php echo base_url();?><?php echo base_url();?>assets/css/Panel.css?h=8c2b63a5491790d9f517499a1b9d0cc5">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Sidebar-Menu-1.css?h=adf8fd0aa4cdf75c6dfc78989ffd7748">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Table-With-Search-1.css?h=70e12aa61bd6652a1b6ca0664ec38c0d">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/Table-With-Search.css?h=604cb4e2e523f88e3270d5f1dbcb81fa">
</head>

<body>
    <div class="container-fluid">
        <div class="row mh-100vh">
            <div class="col-10 col-sm-8 col-md-6 col-lg-6 offset-1 offset-sm-2 offset-md-3 offset-lg-0 align-self-center d-lg-flex align-items-lg-center align-self-lg-stretch bg-white p-5 rounded rounded-lg-0 my-5 my-lg-0" id="login-block">
                <div class="m-auto w-lg-75 w-xl-50">
                    <h2 class="text-info font-weight-light mb-5"><i class="fa fa-diamond"></i>&nbsp;ADMIN</h2>
                    <form>
                        <div class="form-group"><label class="text-secondary">User</label><input class="form-control" type="text" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,15}$" inputmode="email"></div>
                        <div class="form-group"><label class="text-secondary">Password</label><input class="form-control" type="password" required=""></div><button class="btn btn-info mt-2" type="submit">Log In</button></form>
                    <p class="mt-3 mb-0"><a href="#" class="text-info small">Forgot your email or password?</a></p>
                </div>
            </div>
            <div class="col-lg-6 d-flex align-items-end" id="bg-block" style="background-image:url(&quot;<?php echo base_url();?>assets/img/car_rental.jpg?h=7144c9ada1771cff05ccc6b475591ffa&quot;);background-size:cover;background-position:center center;">
                <p class="ml-auto small text-dark mb-2"><br><a href="https://unsplash.com/photos/v0zVmWULYTg?utm_source=unsplash&amp;utm_medium=referral&amp;utm_content=creditCopyText" target="_blank" class="text-dark"><br></a><br></p>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url();?>assets/js/jquery.min.js?h=1dd785e1de9a32e236b624ae268bb803"></script>
    <script src="<?php echo base_url();?>assets/bootstrap/js/bootstrap.min.js?h=2394c9ffd5558f411ffdc3326e9a8962"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/label.js?h=0597ac31c002d7ed04b09b4f4d0104ca"></script>
    <script src="<?php echo base_url();?>assets/js/modal.js?h=106753b11d10f7ee179d9c47f414662d"></script>
    <script src="<?php echo base_url();?>assets/js/Sidebar-Menu.js?h=799b9a88f11384c3d5b19774a5e8d1ed"></script>
    <script src="<?php echo base_url();?>assets/js/Table-With-Search.js?h=aeb9a0ac8b6cc9ec2e3b9cc3add2f239"></script>
</body>

</html>