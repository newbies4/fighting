<?php

class Customer_model extends CI_Model {

	public function fetch_data($limit, $start) {
		// Select * from tbl_employee
		//$this->db->order_by('name', 'ASC');
		//$this->db->limit($limit, $start);
		$query = $this->db->get('tbl_customer');
		return $query;
		// for($i=0; $i<$num_rows(); $i++)
		// {
		// 	asdasd
		// }

	}

	public function insert_data($data) {
		$this->db->insert('tbl_customer', $data);
		return $this->db->insert_id();
	}

	public function get_count() {
		return $this->db->count_all('tbl_customer');
	}

	public function update_data($data) {

	
		$this->db->set('email', $data['email']);
		$this->db->set('license_no', $data['licenseno']);
		$this->db->set('Gender', $data['gender']);
		$this->db->set('Birth_Date', $data['date']);		
		$this->db->set('contact_no', $data['contactno']);
		$this->db->set('current_address', $data['address']);
		$this->db->set('age', $data['age']);
		$this->db->set('Name', $data['name']);
		$this->db->where('customer_id', $data['id']);
		$this->db->update('tbl_customer');
	}
	public function get_customer_by_id($id) {
		$this->db->where('customer_id', $id);
		$query = $this->db->get('tbl_customer');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
	
}
?>