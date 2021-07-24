<?php
class Model_Customer extends CI_Model {
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
	
	function Count_Select ($table) {
  	$this->db->select('count(id) as counted');
    $this->db->from($table);
  	$this->db->where('deleted = ', '0');
  	$result = $this->db->get();
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data = $row;
      }
			return $data;
		}
		else{
			return FALSE;
		}
	}
	
	function Get_By_Param ($table, $field = NULL, $post = NULL, $field2 = NULL, $post2 = NULL, $order = NULL, $limit = NULL, $offset= NULL,  $group = NULL) {
	if($field != NULL){
		$this->db->select('*');
	}
	else{
		$this->db->select($field);
    }
	$this->db->from($table);
    $this->db->where('deleted = ', '0');
	if($field != NULL)
      $this->db->where($field,$post);
	if($field2 != NULL)
      $this->db->where($field2,$post2);
    if($offset != NULL)
      $this->db->offset($offset);
    if($limit != NULL)
      $this->db->limit($limit);
    if($order != NULL)
      $this->db->order_by('id','desc');
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

}
?>
