<br>
<br>
<br>
</nav>
<div class="container">
	<?php echo form_open('news/create'); ?>
		<div class="row justify-content-center">
			<div class="form-group col-lg-4">
				<label for="from">From</label>
				<input type="date" name="from" id="from" class="form-control" min="<?php echo date('Y-m-d');?>">
			</div>
			<div class="form-group col-lg-4">
				<label for="to">To</label>
				<input type="date" name="to" id="to" class="form-control" min="<?php echo date('Y-m-d');?>">
			</div>
			<?php echo date('Y-m-d');?>
		</div>
	<?php echo form_close(); ?>
</div>