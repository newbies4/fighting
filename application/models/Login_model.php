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

	public function user_login($data) {

		$user = $data['username'];
		$pass = $data['password'];

		$queryString = "SELECT tbl_useraccount.*, name FROM tbl_useraccount 
						    LEFT JOIN tbl_customer 
						        ON tbl_useraccount.customer_id_fk = tbl_customer.customer_id
						    WHERE username='{$user}' AND password='{$pass}'";
		$query = $this->db->query($queryString);

		return $query;

		/*$this->db->where('username', $user);
		$this->db->where('password', $pass);
		// $this->db->where('user_type', 'customer');
		$query = $this->db->get('tbl_useraccount');
		return $query;*/
	}
}
?>