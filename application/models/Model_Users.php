<?php
class Model_Users extends CI_Model {
	function Check_Login_Valid ($post) {
		$this->db->select('*');
		$this->db->from('pengguna');
		$this->db->where('pengguna.username = ',$post['username']);
		$this->db->where('pengguna.password =',md5($post['password']));

		$result = $this->db->get();
		if ($result->num_rows() == 1) {
			foreach($result->result_array() as $row){
				$data = $row;
			}
			return $data;
		}
		else{
			return FALSE;
		}
	}
}
?>
