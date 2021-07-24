<?php
class Model_Get_Transaksi extends CI_Model {
  function Normal_Select ($table,$on) {
  	$this->db->select('*');
    $this->db->from($table);
  	$this->db->where('status = ', $on);
  	$this->db->order_by('updated', 'ASC');
  	$result = $this->db->get();
    $i = 0;
		if ($result->num_rows() > 0) {
			foreach($result->result_array() as $row){
				$data[$i] = $row;
				$data[$i]['trans_code'] = substr(md5($row['id']),0,5);
				$i++;
			}
			return $data;
		}
		else{
			return FALSE;
		}
	}
	
	function Join_Select ($table,$id) {
  	$this->db->select('transaksi.id as id, produk.nama_produk, qty, ukuran, nama_pembeli, email_pembeli, alamat_pembeli, phone_pembeli, harga, nama_penerima, tanggal_kirim, alamat_penerima, 
	ucapan, pengirim, keterangan_lain, status, updated');
    $this->db->from($table);
	$this->db->join('produk', $table.'.id = produk.id','left');
  	$this->db->where('produk.deleted = ', '0');
	$this->db->where('transaksi.id = ', $id);
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
