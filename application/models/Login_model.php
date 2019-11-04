<?php

class Login_model extends CI_Model {

	 public function __construct()
    {
        parent::__construct();
    }
	public function admin_login($data) {

		$user = $data['username'];
		$pass = $data['password'];
		$this->db->where('username', $user);
		$this->db->where('password', $pass);
		$this->db->where('user_type', 'admin');
		$query = $this->db->get('tbl_useraccount');
		return $query;
	}
}
?>