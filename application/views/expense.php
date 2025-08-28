<div class="container">
	<div class="row">
		<div class="col-md-12 bg-light navbaar mt-5">
			<h3>Add Expanse</h3><br>
			
			<form action="<?=site_url()?>/user/save_expense" method="post">
				
				<label>Select Vehicle :-</label>
				<select name="vehicle_id" class="form-control">
					<?php
					foreach ($vehicles as $row) {
						?>
					<option value="<?=$row['vehicle_id']?>">
						<?=$row["vehicle_name"]?> - <?=$row["vehicle_number"]?>
							
						</option>
						<?php
					}
					?>
			
				</select><br>

				<label>Select Type :-</label>
				<select name="type_id" class="form-control">
					<?php
					foreach ($types as $row) {
						?>
						<option value="<?=$row["type_id"]?>">
							<?=$row["vehicle_type"]?>
						</option>

						<?php
					}
					?>
				</select><br>

				<label>Enter Amount :-</label>
				<input type="number" name="amount" class="form-control"><br>

				<label>Enter Location :-</label>
				<input type="text" name="location" class="form-control"><br>

				<label>Enter Notes :-</label>
				<textarea name="note" class="form-control"></textarea><br>

				<br>
				<button class="btn btn-success">save</button>
			</form>
			
		</div>
	</div>
</div>
<!-- 
<div class="container">
	<div class="row">
		<div class="col-md-12 bg-light navbaar mt-5">

<table width="100%" border="1" class="table table-striped table-hover table-danger" style="text-align: center;font-weight: bold;">
	<tr>
		<th>action</th>
		<th>srno</th>
		<th>vehicle</th>
		<th>type</th>
		<th>amount</th>
		<th>location</th>
		<th>note</th>
	</tr>

<?php
// echo "<pre>";
// print_r($vehicles);
foreach ($expanse as $key => $row) {
?>

<tr>
 <td>
 	<a href="<?=site_url()?>/user/expanse_delete/<?=$row['expense_id']?>">Delete</a>
 	<a href="<?=site_url()?>/user/expanse_edit/<?=$row['expense_id']?>">Edit</a>
 </td>
 <td><?=$key+1?></td>
 <td><?=$row['vehicle_id']?></td>
 <td><?=$row['type_id']?></td>
 <td><?=$row['amount']?></td>
 <td><?=$row['location']?></td>
 <td><?=$row['note']?></td>
</tr>

<?php
}
?>
</table>
	</div>
	</div>
</div> -->