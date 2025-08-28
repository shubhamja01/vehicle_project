<style type="text/css">
	h4,h1{
		font-weight: bold;
	}
	.navbaar:hover{
		/*background-color: skyblue;*/
		text-shadow: 1px 1px white;
	}
</style>
<div class="container ">
    <div class="row">
        <div class="col-md-4 mt-5 ">
        	<div class="card text-center navbaar shadow-sm ">
        		<div class="card-body bg-warning">

            		<h4 class="card-title">Total Vehicles</h4>
            		<h1 class="card-text"><?=$total_vehicle?></h1>

            	</div>
            </div>
        </div>
        <div class="col-md-4 mt-5 ">
        	<div class="card text-center navbaar shadow-sm ">
        		<div class="card-body bg-primary">

            		<h4 class="card-title">Total Types</h4>
            		<h1 class="card-text"><?=$total_types?></h1>

            	</div>
            </div>
        </div>
        <div class="col-md-4 mt-5 ">
        	<div class="card text-center navbaar shadow-sm ">
        		<div class="card-body bg-danger">

            		<h4 class="card-title">Total Expanse</h4>
            		<h1 class="card-text"><?=$total_expanse?></h1>

            	</div>
            </div>
        </div>
        <div class="col-md-4 mt-5 ">
        	<div class="card text-center navbaar shadow-sm ">
        		<div class="card-body bg-secondary">

            		<h4 class="card-title">Total Expanse Amount</h4>
            		<h1 class="card-text">₹ <?=$total_expanse_amount?></h1>

            	</div>
            </div>
        </div>
    </div>
</div>
