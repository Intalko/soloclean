<?php
class Model_Home extends CI_Model {
  function Normal_Select ($table) {
  	$this->db->select('*');
    $this->db->from($table);
  	$this->db->where('deleted = ', '0');
  	$result = $this->db->get();
    $i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
        $i++;
      }
			return $data;
		}
		else{
			return FALSE;
		}
	}
  function Parameter_Select ($table,$param,$on,$limit) {
  	$this->db->select('*');
    $this->db->from($table);
    $this->db->where($param, $on);
  	$this->db->where('deleted = ', '0');
    $this->db->limit($limit);
  	$result = $this->db->get();
    $i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
        $i++;
      }
			return $data;
		}
		else{
			return FALSE;
		}
	}

  function Ordered_Select ($table,$limit) {
  	$this->db->select('*');
    $this->db->from($table);
  	$this->db->where('deleted = ', '0');
    $this->db->order_by('id', 'DESC');
    $this->db->limit($limit);
  	$result = $this->db->get();
    $i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
        $i++;
      }
			return $data;
		}
		else{
			return FALSE;
		}
	}
  function Arrival_Select ($table) {
    $this->db->select('*');
    $this->db->from($table);


    $result = $this->db->get();
    $i = 0;
    if ($result->num_rows() > 0) {
      foreach($result->result_array() as $row){
        $data[$i] = $row;
        $i++;
      }
      return $data;
    }
    else{
      return FALSE;
    }
  }
}
?>
