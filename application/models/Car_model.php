<?php
class Car_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_car($arr) {

		$this->db->insert('tbl_car_profile', $arr);
		return $this->db->insert_id();
	}

	public function insert_pictures($arr) {
		return $this->db->insert_batch('tbl_car_pic', $arr);
	}

	public function last_id() {
		$this->db->select_max('car_id', 'lastid');
		$query = $this->db->get('tbl_car_profile');  // Produces: SELECT MAX(car_id) as age FROM tbl_car_profile
		return $query->row();
	}

}