<?php
// echo "<pre>";
// print_r($types);
?>

<div class="container">
	<div class="row">
		<div class="col-md-12 bg-light navbaar mt-5">
			<a href="<?=site_url()?>/user/types">Back</a><br>
			<h3>Edit Type</h3><br>

			<form action="<?=site_url()?>/user/update_type/<?=$types['type_id']?>" method="post">
			
				<label>Enter Type :-</label>
				<input type="text" required="" value="<?=$types['vehicle_type']?>" name="vehicle_type" class="form-control"><br>

				<button class="btn btn-success">update</button>
			</form>
			
		</div>
	</div>
</div>