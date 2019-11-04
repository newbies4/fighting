<?php
class Car_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function insert_data($data) {
		return $this->db->insert('tbl_car_profile', $data);
	}

	public function insert_picture($data = array()) {
		$insert = $this->db->insert_batch('tbl_car_pic',$data);
        return $insert?true:false;
	}

	public function last_id() {
		$this->db->select_max('car_id', 'lastid');
		$query = $this->db->get('tbl_car_profile');  // Produces: SELECT MAX(car_id) as age FROM tbl_car_profile
		return $query->row();
	}

}