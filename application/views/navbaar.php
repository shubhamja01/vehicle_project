<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<style type="text/css">
a{
	margin-right: 10px;
}
button{
	text-transform: capitalize;
}
.navbaar{
		outline: 1px solid black;
		border-radius: 5px;
		padding: 20px;
	}
	label{
		font-weight: bold;
		text-transform: capitalize;
		font-size: 20px;
	}
.navbaar table tr th{
		text-transform: uppercase;
		background-color: skyblue;
		border: 1px solid black;
	}
.navbaar table tr td{
	/*background-color: yellow;*/
	border: 1px solid black;
}
</style>
<!-- <h1>Navbar</h1> -->
<div class="container">
	<div class="row  navbaar mt-5">
		<div class="col-md-10">
			
<a href="<?=base_url()?>user/index"><button class="btn btn-outline-primary">Home</button></a>
<a href="<?=base_url()?>user/vehicle"><button class="btn btn-outline-primary">Vehicle</button></a>
<a href="<?=base_url()?>user/types"><button class="btn btn-outline-primary">types</button></a>
<a href="<?=base_url()?>user/expense"><button class="btn btn-outline-primary">expense</button></a>
<a href="<?=base_url()?>user/expense_list"><button class="btn btn-outline-primary">expense list</button></a>

		</div>
		<div class="col-md-2">
<a href="<?=base_url()?>user/logout"><button class="btn btn-outline-danger">Logout</button></a>

		</div>
	</div>
</div>