<?php

class User_model extends CI_Model {

 	public function __construct()
    {
        parent::__construct();
    }

    public function test()
    {
    	 // GROUP BY car_model, car_brand, car_price
    	$query = "SELECT car_id, car_model, car_brand, car_price, car_pic_name FROM tbl_car_profile JOIN tbl_car_pic ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk GROUP BY car_id, car_model, car_brand, car_price";
		return $this->db->query($query);
    }

    public function getSelectedCar($id)
    {
    	$query = "SELECT car_id, car_brand, car_model, car_seats, car_transmission, car_gas_type, car_type, car_color, car_price, car_pic_name FROM tbl_car_profile JOIN tbl_car_pic ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk WHERE car_id=$id";
		return $this->db->query($query);
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