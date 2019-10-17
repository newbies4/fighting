<?php

class Login_model extends CI_Model {

	 public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        // $this->load->library('session');
    }

	// public function fetch_data() {
	// 	// Select * from tbl_employee
	// 	$query = $this->db->get('tbl_employee');

	// 	return $query;

	// }

	// public function insert_data($data) {


	// 	// $data = array(
	//  //        'first_name' => $data_array['firstname'],
	//  //        'middle_name' => $data_array['middlename'],
	//  //        'last_name' => $data_array['lastname'],
	//  //        'contact' => $data_array['contactnumber']
	// 	// );

	// 	$this->db->insert('tbl_employee', $data);
	// }
	public function admin_login($data) {

		$user = $data['username'];
		$pass = $data['password'];
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$this->db->where('user_type', 'admin');
		$query = $this->db->get('tbl_useraccount');

		// $sql = $this->db->get_compiled_select('tbl_useraccount');
		// echo $sql;
		// echo $query->num_rows();

		return $query;

	}

}

?>