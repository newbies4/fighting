<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/styles.css');?>">
    <link rel="stylesheet" href="<?php echo base_url('assets/fonts/font-awesome.min.css');?>">
    <title>ZC Car Rental</title>
  </head>
  <body>


 <?php 
    if(isset($error))
        var_dump($error); 
    if(isset($pictureNames))
        var_dump($pictureNames) ;
?>

  <footer id="sticky-footer" class="py-4 bg-dark text-white-50">
    <div class="container text-center">
      <small> &copy; SCINET TECHNOLOGY</small>
      
    </div>
  </footer>
</body>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="<?php echo base_url('assets/js/jquery-3.3.1.slim.min.js');?>" ></script>
    <script src="<?php echo base_url('assets/js/popper.min.js');?>" ></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js');?>" ></script>

    <script type="text/javascript">
    $(document).ready(function () {
      $('#sidebarCollapse').on('click', function () {
        $('#sidebar').toggleClass('active');
      });
    });

    // $(document).ready(function() {

    //   $(".form-group .form-control").blur(function() {
    //     if($(this).val()!=="") {
    //       $(this).siblings("label").addClass("active");
    //     } else {
    //       $(this).siblings("label").removeClass("active");
    //     }
    //   })

    // })

  </script>
  </body>
</html>