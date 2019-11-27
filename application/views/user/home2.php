<br>
<br>
<br>
</nav>
<div class="container">
	<?php echo form_open('car_controller/display_cars'); ?>
		<div class="row justify-content-center">
			<div class="form-group col-lg-4">
				<label for="from">Start Date</label>
				<input type="date" name="from" id="from" class="form-control" min="<?php echo date('Y-m-d');?>">
				<?= form_error('from'); ?>
			</div>
			<div class="form-group col-lg-4">
				<label for="to">End Date</label>
				<input type="date" name="to" id="to" class="form-control" min="<?php echo date('Y-m-d');?>">
				<?= form_error('to'); ?>
			</div>
			<div class="form-group mt-4">
				<button class="btn btn-primary mt-2" type="submit">Search</button>
			</div>
		</div>
		<!-- <div class="row">
			div.form
		</div> -->
	<?php echo form_close(); ?>
</div>