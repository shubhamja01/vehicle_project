
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
foreach ($list as $key => $row) {
?>

<tr>
 <td>
 	<a href="<?=site_url()?>/user/expanse_delete/<?=$row['expense_id']?>">Delete</a>
 	<a href="<?=site_url()?>/user/expanse_edit/<?=$row['expense_id']?>">Edit</a>
 </td>
 <td><?=$key+1?></td>
 <td><?=$row['vehicle_name']?> - <?=$row["vehicle_number"]?></td>
 <td><?=$row['vehicle_type']?></td>
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
</div>