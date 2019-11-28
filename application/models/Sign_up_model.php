<?php

class Sign_up_model extends CI_Model {

	 public function __construct()
    {
        parent::__construct();
    }

	public function insert_data($data)
	{
		return $this->db->insert('tbl_useraccount', $data);
	}
}
?>