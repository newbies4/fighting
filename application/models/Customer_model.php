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
		return $this->db->insert('tbl_customer', $data);
	}

	public function get_count() {
		return $this->db->count_all('tbl_customer');
	}

	public function update_data($data) {

		$this->db->set('first_name', $data['first_name']);
		$this->db->set('middle_name', $data['middle_name']);
		$this->db->set('last_name', $data['last_name']);
		$this->db->set('contact', $data['contact']);
		$this->db->where('id', $data['id']);
		$this->db->update('tbl_employee');
	}
	public function get_customer_by_id($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_customer');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}
}
?>