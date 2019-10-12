<?php

class Employee_model extends CI_Model {

	public function fetch_data() {
		// Select * from tbl_employee
		$query = $this->db->get('tbl_employee');

		return $query;

	}

}

?>