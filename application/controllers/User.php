<?php 
class User extends CI_controller{
	function __construct(){
		parent::__construct();
		if (!isset($_SESSION['admin_id'])) {
			redirect("login/index");
		}
	}
	function index(){
		// echo "hiii";
		$data["total_vehicle"]=count($this->My_model->select("vehicle"));
		$data["total_types"]=count($this->My_model->select("types"));
		$data["total_expanse"]=count($this->My_model->select("expense"));
		$data["total_expanse_amount"]=$this->My_model->select_total_expanse();
		// print_r($data["total_expanse_amount"]);
		// exit;
		$this->load->view("navbaar");
		$this->load->view("index",$data);
		$this->load->view("footer");
	}
	function logout(){
		session_destroy();
		redirect("login/index");
	}
//vehicle
	function vehicle(){
		// echo "hiii";
		$data['vehicles']=$this->My_model->select("vehicle");
		$this->load->view("navbaar");
		$this->load->view("vehicle",$data);
		$this->load->view("footer");
	}
	function save_vehicle(){
		// echo "<pre>";
		// print_r($_POST);
		$this->My_model->insert("vehicle",$_POST);
		redirect("user/vehicle");
	}
	function vehicle_delete($id){
		// echo "<pre>";
		$cond=["vehicle_id"=>$id];
		// print_r($cond);
		$this->My_model->delete("vehicle",$cond);
		// echo "deleted";
		redirect("user/vehicle");

	}
	function vehicle_edit($id){
		// echo("<pre>");
		$cond=["vehicle_id"=>$id];
		// print_r($cond);
		$data['vehicles']=$this->My_model->select_where("vehicle",$cond)[0];
		// print_r($data);
		$this->load->view("navbaar");
		$this->load->view("vehicle_edit",$data);
	}
	function update_vehicle($id){
		$cond=["vehicle_id"=>$id];
		// print_r($cond);
		// print_r($_POST);
		$this->My_model->update("vehicle",$cond,$_POST);
		echo "updated";
		redirect("user/vehicle");
		
	}

//types
	function types(){
		$data['typesdata']=$this->My_model->select("types");
		$this->load->view("navbaar");
		$this->load->view("types",$data);
		$this->load->view("footer");

	}
	function save_type(){
		// echo "<pre>";
		// print_r($_POST);
		$this->My_model->insert("types",$_POST);
		// echo "inserted";
		redirect("user/types");
	}
	function types_delete($id){
		// echo "<pre>";
		$cond=["type_id"=>$id];
		// print_r($cond);
		$this->My_model->delete("types",$cond);
		// echo "deleted";
		redirect("user/types");

	}
	function types_edit($id){
		// echo "<pre>";
		$cond=["type_id"=>$id];
		// print_r($cond);
		$data["types"]=$this->My_model->select_where("types",$cond)[0];
		// print_r($data);
		$this->load->view("navbaar");
		$this->load->view("types_edit",$data);
	}
	function update_type($id){
		// echo "<pre>";
		$cond=["type_id"=>$id];
		// print_r($cond);
		$this->My_model->update("types",$cond,$_POST);
		// echo "updated";	
		redirect("user/types");

	}

//expanse
	function expense(){
		$dataq["list"]=$this->My_model->select_expanse("expense");
		$data["vehicles"]=$this->My_model->select("vehicle");
		$data["types"]=$this->My_model->select("types");
		$this->load->view("navbaar");
		$this->load->view("expense",$data);
		$this->load->view("expense_list",$dataq);
		$this->load->view("footer");
		// print_r($dataq);
	}
	function save_expense(){
		// echo "<pre>";
		// print_r($_POST);
		$this->My_model->insert("expense",$_POST);
		// echo "inserted";
		redirect("user/expense");
	}
	function expense_list(){
		$data["list"]=$this->My_model->select_expanse("expense");
		$this->load->view("navbaar");
		$this->load->view("expense_list",$data);
		$this->load->view("footer");
		// print_r($data);
	}
	function expanse_edit($id){
		$cond=["expense_id"=>$id];
		// print_r($cond);
		$data["expanse"]=$this->My_model->select_where("expense",$cond)[0];
		$data["vehicles"]=$this->My_model->select("vehicle");
		$data["types"]=$this->My_model->select("types");
		$this->load->view("navbaar");
		$this->load->view("expense_edit",$data);
		$this->load->view("footer");
	}
	function update_expense($id){
		// echo "<pre>";
		$cond=["expense_id"=>$id];
		// print_r($cond);
		$this->My_model->update("expense",$cond,$_POST);
		redirect("user/expense_list");

	}
	function expanse_delete($id){
		$cond=["expense_id"=>$id];
		// print_r($cond);
		$this->My_model->delete("expense",$cond);
		// echo "deleted";
		redirect("user/expense_list");
	}
}
?>