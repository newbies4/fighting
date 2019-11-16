<?php

class User_model extends CI_Model {

 	public function __construct()
    {
        parent::__construct();
    }

	// get all cars
	public function getCars()
	{

		// where is_available = Available
		
		$this->db->select('*');
		$this->db->from('tbl_car_pic');
		$this->db->join('tbl_car_profile', 'tbl_car_profile.car_id = tbl_car_pic.car_id_fk');
		$this->db->order_by('right(car_pic_name, 10) ASC');
		// return $this->db->get_compiled_select();
		return $this->db->get();
	}
}
?>