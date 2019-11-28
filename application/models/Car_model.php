<?php
class Car_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
    }

    public function fetch_data($limit, $start) {
		// Select * from tbl_employee
		$queryString = "SELECT *, IF(is_available, 'Available', 'Unavailable') is_available FROM tbl_car_profile ORDER BY created_at ASC LIMIT $limit OFFSET $start";
		// $this->db->order_by('created_at', 'ASC');
		// $this->db->limit($limit, $start);
		//var_dump($this->db->get_compiled_select('tbl_car_profile'));

		// $query = $this->db->get('tbl_car_profile');
		$query = $this->db->query($queryString);

		return $query;
		// for($i=0; $i<$num_rows(); $i++)
		// {
		// 	asdasd
		// }
	}

	public function getSelectedCar($id)
    {
    	$this->db->select('*');
		$this->db->from('tbl_car_pic');
		$this->db->join('tbl_car_profile', 'tbl_car_profile.car_id = tbl_car_pic.car_id_fk');
		$this->db->where('car_id', $id);
		$this->db->order_by('right(car_pic_name, 10) ASC');
		// return $this->db->get_compiled_select();
		return $this->db->get();
  //   	$query = "SELECT car_id, car_brand, car_model, car_seats, car_transmission, car_gas_type, car_type, car_color, car_price, car_pic_name FROM tbl_car_profile JOIN tbl_car_pic ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk WHERE car_id=$id";
		// return $this->db->query($query);
    }

	public function get_car_by_id($id) {
		$this->db->where('car_id', $id);
		$query = $this->db->get('tbl_car_profile');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

    public function get_count() {
		return $this->db->count_all('tbl_car_profile');
	}

	public function getPictureNames($carId) {
		$this->db->order_by('right(car_pic_name, 10) ASC');
		$this->db->where('car_id_fk', $carId);
		return $this->db->get('tbl_car_pic');
	}

	public function update_data($data) {

		$this->db->set('car_owner', $data['car_owner']);
		$this->db->set('car_model', $data['car_model']);
		$this->db->set('car_brand', $data['car_brand']);
		$this->db->set('car_type', $data['car_type']);
		$this->db->set('car_seats', $data['car_seats']);
		$this->db->set('car_color', $data['car_color']);
		$this->db->set('car_platenumber', $data['car_platenumber']);
		$this->db->set('car_price', $data['car_price']);
		$this->db->set('car_fuel_capacity', $data['car_fuel_capacity']);
		$this->db->set('car_gas_type', $data['car_gas_type']);
		$this->db->set('car_driver', $data['car_driver']);
		$this->db->set('car_transmission', $data['car_transmission']);
		$this->db->set('car_insurance', $data['car_insurance']);
		$this->db->where('car_id', $data['car_id']);
		return $this->db->update('tbl_car_profile');
	}

    public function insert_car($arr) {

		$this->db->insert('tbl_car_profile', $arr);
		return $this->db->insert_id();
	}

	public function editAvailability($id) {
		$queryString = "UPDATE tbl_car_profile SET is_available = IF(is_available = 0, 1, 0) WHERE car_id = $id";
		$this->db->query($queryString);
	}

	public function car_id() {
		var_dump($this->db->insert_id());
	}

	public function insert_pictures($arr) {
		return $this->db->insert_batch('tbl_car_pic', $arr);
	}
	public function update_pictures($arr) {

		// $que=$this->db->get_compiled_update('tbl_car_profile');
		// var_dump($que);
		// print_r($arr[1]['car_pic_name']);
		/*$data = array(
		    array(
		    	'pic_id' => 62 ,
		        'car_id_fk' => $arr[0]['car_id_fk'] ,
		        'car_pic_name' => $arr[0]['car_pic_name']
		    ),
		    array(
		    	'pic_id' => 63 ,
		        'car_id_fk' => $arr[1]['car_id_fk'] ,
		        'car_pic_name' => $arr[1]['car_pic_name']
		    ),
		    array(
		    	'pic_id' => 64 ,
		        'car_id_fk' => $arr[2]['car_id_fk'] ,
		        'car_pic_name' => $arr[2]['car_pic_name']
		    )
		);*//*
		$data = array(
		    array(
		        'car_id_fk' => $arr[0]['car_id_fk'] ,
		        'car_pic_name' => $arr[0]['car_pic_name']
		    ),
		    array(
		        'car_id_fk' => $arr[1]['car_id_fk'] ,
		        'car_pic_name' => $arr[1]['car_pic_name']
		    ),
		    array(
		        'car_id_fk' => $arr[2]['car_id_fk'] ,
		        'car_pic_name' => $arr[2]['car_pic_name']
		    )
		);*/
		return $this->db->update_batch('tbl_car_pic', $arr, 'car_id_fk');

	}

	public function last_id() {
		$this->db->select_max('car_id', 'lastid');
		$query = $this->db->get('tbl_car_profile');  // Produces: SELECT MAX(car_id) as age FROM tbl_car_profile
		return $query->row();
	}

	public function getCars($start, $end)
	{
		$queryString = "SELECT car_id, car_model, car_price, car_pic_name
			FROM tbl_car_profile 
			LEFT JOIN tbl_car_pic
		    	ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk
			LEFT JOIN tbl_reserve_details 
				ON tbl_reserve_details.car_id_fk = tbl_car_profile.car_id 
			LEFT JOIN tbl_reserve 
				ON tbl_reserve_details.reserve_id_fk = tbl_reserve.reserve_id 
			WHERE ((tbl_reserve.start_date NOT BETWEEN '{$start}' AND '{$end}') AND (tbl_reserve.end_date NOT BETWEEN '{$start}' AND '{$end}'))
			OR (tbl_reserve.start_date IS null)
		    GROUP BY car_id, car_model, car_price";
		$query = $this->db->query($queryString);

		return $query;
	}

}