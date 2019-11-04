<?php

class Employee_model extends CI_Model {

	public function fetch_data($limit, $start) {
		// Select * from tbl_employee
		$this->db->order_by('first_name', 'ASC');
		$this->db->limit($limit, $start);
		$query = $this->db->get('tbl_employee');

		return $query;

	}

	public function insert_data($data) {


		// $data = array(
	 //        'first_name' => $data_array['firstname'],
	 //        'middle_name' => $data_array['middlename'],
	 //        'last_name' => $data_array['lastname'],
	 //        'contact' => $data_array['contactnumber']
		// );

		return $this->db->insert('tbl_employee', $data);
	}

	public function update_data($data) {

		$this->db->set('first_name', $data['first_name']);
		$this->db->set('middle_name', $data['middle_name']);
		$this->db->set('last_name', $data['last_name']);
		$this->db->set('contact', $data['contact']);
		$this->db->where('id', $data['id']);
		$this->db->update('tbl_employee');
	}

	public function delete_employee($id) {
		$this->db->where('id', $id);
		$this->db->delete('tbl_employee');
		if ($this->db->affected_rows() > 0){
			return true;
		} else {
			return false;
		}
	}

	public function get_employee_by_id($id) {
		$this->db->where('id', $id);
		$query = $this->db->get('tbl_employee');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function get_count() {
		return $this->db->count_all('tbl_employee');
	}

}

?>