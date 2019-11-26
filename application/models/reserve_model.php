<?php

class reserve_model extends CI_Model {

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