<?php

class Login_model extends CI_Model {

	 public function __construct()
    {
        parent::__construct();
    }
	public function user_login($data) {

		$user = $data['username'];
		$pass = $data['password'];
		$this->db->where('Username', $user);
		$this->db->where('Password', $pass);
		//$this->db->where('user_type', 'admin');
		$query = $this->db->get('tbl_user_side_account');
		return $query;
	}
}
?>