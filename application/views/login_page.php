<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>

<style type="text/css">
	.form label{
		font-weight: bold;
		font-size: 25px;
	}
	.form input{
		border-radius: 5px;
		padding-left: 10px;
		background-color: skyblue;
		/*padding: 5px;
		border: none;*/
	}
	.form{
		/*margin-left: 30%;
		margin-top: 50px;
		padding: 100px;*/
		/*border: 1px solid black;*/
		box-shadow: 0px 0px 5px 0px black;
		border-radius: 5px;
	}
</style>
<div class="container">
	<div class="row bg-light mt-5 form p-2">

		<div class="col-md-8">
			<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
    <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://i0.wp.com/plopdo.com/wp-content/uploads/2021/11/feature-pic.jpg?fit=537%2C322&ssl=1" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>DORMAMU</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://images.pexels.com/photos/206359/pexels-photo-206359.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=2" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>⭐</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://archive.smashing.media/assets/344dbf88-fdf9-42bb-adb4-46f01eedd629/68dd54ca-60cf-4ef7-898b-26d7cbe48ec7/10-dithering-opt.jpg" class="d-block w-100" alt="...">
       <div class="carousel-caption d-none d-md-block">
        <h5>Im, OWL</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-target="#carouselExampleCaptions" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-target="#carouselExampleCaptions" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </button>
</div>
		</div>
		<div class="col-md-4  pt-4">
			<form action="<?=site_url()?>/login/login_fill" method="post">
				<h1>Admin Login</h1><br>
				<label>Email :-</label>
				<input type="email" required="" name="admin_email" placeholder="Admin Email" class="w-100 form-control"><br><br>
				<label>Password :-</label>
				<input type="password" required="" name="admin_password" placeholder="Admin Password" class="w-100 form-control"><br><br>
				<button class="btn btn-primary text-center">Login</button>
			</form>
		</div>
	</div>
</div>