<?php

class Reserve_model extends CI_Model {

	public function fetch_data($limit, $start) {
		// Select * from tbl_employee
		//$this->db->order_by('first_name', 'ASC');
		$this->db->limit($limit, $start);
		$query = $this->db->get('tbl_reserve');
		return $query;
		// for($i=0; $i<$num_rows(); $i++)
		// {
		// 	asdasd
		// }

	}

	public function getDates($custid)
	{
		$queryString = "SELECT start, end
							FROM tbl_storeroom
						WHERE customer_id_fk = '{$custid}'";
		$query = $this->db->query($queryString);

		return $query->row();
	}

	public function addToStoreroom($data)
	{
		return $this->db->insert('tbl_storeroom', $data);
	}

	public function addToReserve($data)
	{
		$this->db->insert('tbl_reserve', $data);
		return $this->db->insert_id();
	}

	public function addToReserveDetails($reserveid, $custid)
	{
		$insertdata = array();
		
		$queryString = "SELECT car_id_fk, car_price as payment FROM tbl_storeroom
						    INNER JOIN tbl_car_profile
						        ON tbl_storeroom.car_id_fk = tbl_car_profile.car_id
						    WHERE customer_id_fk = '{$custid}'";
		$car_id = $this->db->query($queryString);

		foreach($car_id->result_array() as $row) {
			array_push($insertdata, array('reserve_id_fk' => $reserveid, 'car_id_fk' => $row['car_id_fk'], 'payment' => $row['payment']));
		}
		
		$this->db->insert_batch('tbl_reserve_details', $insertdata);
	}

	public function getAllStoreroom()
	{
		$queryString = "SELECT car_model, car_pic_name, car_price, (end - start) as days FROM tbl_storeroom 
						    INNER JOIN tbl_car_profile 
						        ON tbl_storeroom.car_id_fk = tbl_car_profile.car_id
						    INNER JOIN tbl_customer
						        ON tbl_customer.customer_id = tbl_storeroom.customer_id_fk
						    INNER JOIN tbl_car_pic
						        ON tbl_car_profile.car_id = tbl_car_pic.car_id_fk
						    GROUP BY car_model, car_price";
		$query = $this->db->query($queryString);

		return $query;
	}

	public function getTotalPayment($custid)
	{
		$queryString = "SELECT sum(car_price) AS total FROM tbl_storeroom
							INNER JOIN tbl_car_profile
						    	ON tbl_storeroom.car_id_fk = tbl_car_profile.car_id
						    WHERE customer_id_fk = '{$custid}'";
		$query = $this->db->query($queryString);

		return $query->row()->total;
	}

	public function get_reserve_by_id($id) {
		$this->db->where('reserve_id', $id);
		$query = $this->db->get('tbl_reserve');
		if($query->num_rows() > 0){
			return $query->row();
		}else{
			return false;
		}
	}

	public function get_count() {
		return $this->db->count_all('tbl_reserve');
	}

}

?>