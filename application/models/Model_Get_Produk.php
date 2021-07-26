<?php
class Model_Get_Produk extends CI_Model {
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
	
	function Join_Select ($table) {
  	$this->db->select('produk.id as id, kategori.nama_kategori, produk.nama_produk, penjelasan, produk.date_created');
    $this->db->from($table);
	$this->db->join('kategori', $table.'.id_kategori = kategori.id','left');
  	$this->db->where('produk.deleted = ', '0');
	$this->db->order_by('produk.date_created', 'DESC');
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
	
	function Join_Select_Param ($table,$param,$id) {
  	$this->db->select('produk.id as id, kategori.id as id_kategori, kategori.nama_kategori, produk.nama_produk, produk_image, pesan, penjelasan');
    $this->db->from($table);
	$this->db->join('kategori', $table.'.id_kategori = kategori.id','left');
	$this->db->where($param, $id);
  	$this->db->where('produk.deleted = ', '0');
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
	
	function Update_Count_Select ($table,$fieldname,$post) {
  	$this->db->select('count(id) as counted');
    $this->db->from($table);
  	$this->db->where($fieldname, $post);
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
	
	function Get_By_Param ($table, $order = NULL, $limit = NULL, $offset= NULL, $field = NULL, $post = NULL, $group = NULL) {
	if($field != NULL){
		$this->db->select('*');
	}
	else{
		$this->db->select('id,nama_produk,type ,id_kategori,produk_image');
    }
	$this->db->from($table);
    $this->db->where('deleted = ', '0');
	if($field != NULL)
      $this->db->where($field,$post);
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

  function Validate($table,$nama_category){
    $this->db->select('id');
    $this->db->from($table);
    $this->db->where('nama_produk',$nama_category);
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
  
  function Update_Join_Select($table,$fieldname,$post) {
  	$this->db->select('produk.id as id, kategori.nama_kategori, produk.nama_produk,produk_image,pesan');
    $this->db->from($table);
	$this->db->join('kategori', $table.'.id_kategori = kategori.id','left');
	$this->db->where($fieldname,$post);
  	$this->db->where('produk.deleted = ', '0');
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

  function Get_produk_On_Category($table, $field,$post){
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
  function Get_Random_ID($table){
	$this->db->select('id');
    $this->db->from($table);
	$this->db->order_by('id', 'RANDOM');
	$this->db->limit(1);
	$result = $this->db->get();
	return $result->result_array();
  }

}
?>
