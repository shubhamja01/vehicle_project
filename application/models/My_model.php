<?php
class My_model extends CI_Model{
	function select($table){
		return $this->db->get($table)->result_array();
	}
	function select_where($table,$condition){
		return $this->db->where($condition)->get($table)->result_array();
	}
	function insert($table,$data){
		$this->db->insert($table,$data);
	}
	function delete($table,$condition){
		$this->db->where($condition)->delete($table);
	}
	function update($table,$condition,$data){
		$this->db->where($condition)->update($table,$data);
	}
	function select_expanse(){
		$sql="SELECT * FROM expense,vehicle,types WHERE 
		expense.vehicle_id=vehicle.vehicle_id 
		AND 
		expense.type_id=types.type_id
		";
		return $this->db->query($sql)->result_array();
	}
	function select_total_expanse(){
		$sql= "SELECT SUM(amount) as total FROM expense";
		return $this->db->query($sql)->result_array()[0]["total"];
	}
}
?>