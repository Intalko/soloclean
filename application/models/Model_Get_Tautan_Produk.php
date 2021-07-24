<?php
class Model_Get_Product extends CI_Model {
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

  function Get_By_Param ($table, $order = NULL, $limit = NULL,  $field= NULL,$post = NULL, $group = NULL) {
    $this->db->select('*');
    $this->db->from($table);
    $this->db->where('deleted = ', '0');
    if($field != NULL)
      $this->db->where($field,$post);
    if($limit != NULL)
      $this->db->limit($limit);
    if($order != NULL)
      $this->db->order_by('id','asc');
    if($group != NULL)
      $this->db->group_by($group);
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

  function Validate($table,$nama_category){
    $this->db->select('id');
    $this->db->from($table);
    $this->db->where('nama_product',$nama_category);
    $result = $this->db->get();
    $view_result = $result->result_array();
    if($view_result == Array ( ))
    {
      return FALSE;
    }
    else {
      return TRUE;
    }
  }

	function Update_Select ($table,$fieldname,$post) {
		$this->db->select('*');
    $this->db->from($table);
		$this->db->where($fieldname,$post);
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

  function Get_Product_On_Category($table, $field,$post){
    $this->db->select('*');
    $this->db->from($table);
		$this->db->where($field,$post);
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
