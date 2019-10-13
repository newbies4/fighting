<?php

class Employee_model extends CI_Model {

	public function fetch_data() {
		// Select * from tbl_employee
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

		$this->db->insert('tbl_employee', $data);
	}

}

?>