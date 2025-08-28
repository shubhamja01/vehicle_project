<div class="container">
	<div class="row">
		<div class="col-md-12 bg-light navbaar mt-5">
			<h3>Add Type</h3><br>
			<form action="<?=site_url()?>/user/save_type" method="post">
				<label>Enter Type :-</label>
				<input type="text" required="" name="vehicle_type" class="form-control"><br>

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
		<th>type</th>
	</tr>

<?php
// echo "<pre>";
// print_r($vehicles);
foreach ($typesdata as $key => $row) {
?>

<tr>
 <td>
 	<a href="<?=site_url()?>/user/types_delete/<?=$row['type_id']?>">Delete</a>
 	<a href="<?=site_url()?>/user/types_edit/<?=$row['type_id']?>">Edit</a>
 </td>
 <td><?=$key+1?></td>
 <td><?=$row['vehicle_type']?></td>
</tr>

<?php
}
?>
</table>
	</div>
	</div>
</div>