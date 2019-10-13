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
    </script>
    
  </body>
</html>