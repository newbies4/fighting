
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

    // for file input fields
    $('input[type="file"]').change(function(e){
      var fileName = e.target.files[0].name;
      $(e.target).siblings('.custom-file-label').text(fileName);
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