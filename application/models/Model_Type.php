<?php
class Model_Type extends CI_Model {
  function Normal_Select ($table ='type') {
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
	
	function Param_Select ($field= NULL,$post = NULL,$table ='type') {
    $this->db->select('*');
    $this->db->from($table);
    if($field != NULL)
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