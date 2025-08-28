<div class="container">
	<div class="row">
		<div class="col-md-12 bg-light navbaar mt-5">
			<a href="<?=site_url()?>/user/expense_list">Back</a><br>
			<h3>Edit Expanse</h3><br>
			
			<form action="<?=site_url()?>/user/update_expense/<?=$expanse['expense_id']?>" method="post">
				
				<label>Select Vehicle :-</label>
				<select name="vehicle_id" class="form-control">
					<?php
					foreach ($vehicles as $row) {
						?>
					<option value="<?=$row['vehicle_id']?>" <?=($row["vehicle_id"]==$expanse["vehicle_id"]) ? 'selected':'' ?> >

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
						<option value="<?=$row["type_id"]?>" <?=($row["type_id"]==$expanse["type_id"]) ? 'selected':'' ?> >

							<?=$row["vehicle_type"]?>

						</option>

						<?php
					}
					?>
				</select><br>

				<label>Enter Amount :-</label>
				<input type="number" value="<?=$expanse["amount"]?>" name="amount" class="form-control"><br>

				<label>Enter Location :-</label>
				<input type="text" value="<?=$expanse["location"]?>" name="location" class="form-control"><br>

				<label>Enter Notes :-</label>
				<textarea name="note" class="form-control"><?=$expanse["note"]?></textarea><br>

				<br>
				<button class="btn btn-success">update</button>
			</form>
			
		</div>
	</div>
</div>