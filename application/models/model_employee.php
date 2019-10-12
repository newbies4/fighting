<?php 

/**
* 
*/
class Model_employee extends CI_Model
{
public function fetchMemberData($id = null) 
	{
		if($id) {
			$sql = "SELECT * FROM customer WHERE id = ?";
			$query = $this->db->query($sql, array($id));
			return $query->row_array();
		}

		$sql = "SELECT * FROM customer";
		$query = $this->db->query($sql);
        return $query->result_array();
    }
}