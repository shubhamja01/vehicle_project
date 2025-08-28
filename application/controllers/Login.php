<?php
class Login extends CI_controller{
	function index(){
		// echo "login page";
		$this->load->view("login_page");
	}
	function login_fill(){
		// echo("<pre>");
		// print_r($_POST);
		$cond =[
				"admin_email"=>$_POST["admin_email"],
				"admin_password"=>$_POST["admin_password"]
				];

		$data = $this->My_model->select_where("admin",$cond);
		// print_r($data);
		if (count($data)>0) {
			$_SESSION['admin_id']=$data[0]['admin_id'];
			echo "login success";
			redirect("user/index");
		}
		else{
			echo "login failed";
echo '<br><br><a href="index"><button class="btn btn-outline-primary">Back</button></a>';


		}
	}
}
?>