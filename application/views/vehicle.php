<div class="container">
	<div class="row">
		<div class="col-md-12 bg-light navbaar mt-5">
			<h3>Add Vehicle</h3><br>
			<form action="<?=site_url()?>/user/save_vehicle" method="post">
				<label>Enter Name :-</label>
				<input type="text" required="" name="vehicle_name" class="form-control"><br>

				<label>Enter Number :-</label>
				<input type="text" required="" name="vehicle_number" class="form-control"><br>

				<label>Enter Company :-</label>
				<input type="text" required="" name="vehicle_company" class="form-control"><br>
				
				<button class="btn btn-success">save</button>
			</form>
			
		</div>
	</div>
</div>

<div class="container">
	<div class="row">
		<div class="col-md-12 bg-light navbaar mt-5">

<table width="100%" border="1" class="table table-striped table-hover table-danger" style="text-align: center;font-weight: bold;">
	<tr>
		<th>action</th>
		<th>srno</th>
		<th>name</th>
		<th>number</th>
		<th>company</th>
	</tr>

<?php
// echo "<pre>";
// print_r($vehicles);
foreach ($vehicles as $key => $row) {
?>

<tr>
 <td>
 	<a href="<?=site_url()?>/user/vehicle_delete/<?=$row['vehicle_id']?>">Delete</a>
 	<a href="<?=site_url()?>/user/vehicle_edit/<?=$row['vehicle_id']?>">Edit</a>
 </td>
 <td><?=$key+1?></td>
 <td><?=$row['vehicle_name']?></td>
 <td><?=$row['vehicle_number']?></td>
 <td><?=$row['vehicle_company']?></td>
</tr>

<?php
}
?>
</table>
	</div>
	</div>
</div>