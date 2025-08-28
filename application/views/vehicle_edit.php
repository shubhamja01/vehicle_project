<?php
// echo "<pre>";
// print_r($vehicles);
?>
<div class="container">
	<div class="row">
		<div class="col-md-12 bg-light navbaar mt-5">
			<a href="<?=site_url()?>/user/vehicle">Back</a><br>
			<h3>Edit Vehicle</h3><br>

			<form action="<?=site_url()?>/user/update_vehicle/<?=$vehicles['vehicle_id']?>" method="post">

				<label>Edit Name :-</label>
				<input type="text" value="<?=$vehicles['vehicle_name']?>" required="" name="vehicle_name" class="form-control"><br>

				<label>Edit Number :-</label>
				<input type="text" value="<?=$vehicles['vehicle_number']?>" required="" name="vehicle_number" class="form-control"><br>

				<label>Edit Company :-</label>
				<input type="text" value="<?=$vehicles['vehicle_company']?>" required="" name="vehicle_company" class="form-control"><br>
				
				<button class="btn btn-success">update</button>
			</form>
			
		</div>
	</div>
</div>