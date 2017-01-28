<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Base_model extends CI_Model {
	
	public function insert_data($table,$data){
	$data = $this->db->insert($table,$data);
	return $data;
	}
	public function get_data($table){
	 return $this->db->get($table)->result_array();
	}
	public function get_data_on_condition($table,$condition){
	 $this->db->where($condition);
	 return $this->db->get($table)->result_array();
	}
	public function update_data($table,$data,$condition){
		$this->db->where($condition);
		$dataa=$this->db->update($table,$data);
		
		return true;
		
	}
	
	

	}