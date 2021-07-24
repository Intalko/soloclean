<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pesan extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Get_Produk');
		$this->load->model('Model_Transaction');
		//Check Session
		$sess = $this->session->userdata('kategori');
		if(!isset($sess) || !$sess){
		  redirect(base_url(),'refresh');
		  exit;
		}
		
	}

	public function index(){
		$post = $this->input->post();
		$sess_p = $this->session->userdata('cart');
		//print_r($sess_p);exit;
		//print_r($post);exit;
		if($post || $sess_p){
			if($sess_p && !$post){
				$qty = $sess_p['qty'];
				$ukuran = $sess_p['ukuran'];
				$id_produk = $sess_p['id_produk'];
				$this->session->set_userdata(array('cart'=>$sess_p));
			}else{
				$qty = $post['qty'];
				$ukuran = $post['ukuran'];
				$id_produk = $post['id_produk'];
				$this->session->set_userdata(array('cart'=>$post));
			}
			if(!is_numeric($qty)){
				echo '<script>alert("Mohon hanya masukan angka"); window.location.assign("'.base_url().'single_produk/'.$post['id_produk'].'");</script>';
			}else{
				$item = $this->Model_Get_Produk->Join_Select_Param('produk','produk.id',$id_produk);
				if(empty($item)){
					redirect(base_url().'produk/1');
					exit;
				}
				$meta = metadata();
				$view_data['meta'] = $meta;
				$view_data['qty'] = $qty;
				$view_data['ukuran'] = $ukuran;
				$view_data['produk'] = $item[0];
				//print_r($group_produk);exit;
				$view_data['title'] = 'Pesanan';
				$view_data['body'] = 'body/checkout';
				//LOAD ALL WRAPPER CONTENT
				$sess = $this->session->userdata('kategori');
				$view_data['kategori'] = $sess;
				$this->load->view('wrapper',$view_data);
			}
		}else{
			echo '<script>alert("Silahkan pilih barang terlebih dahulu"); window.location.assign("'.base_url().'produk/1");</script>';
		}
	}
	
	public function konfirmasi(){
		$post = $this->input->post();
		if($post && $post['nama_pembeli'] && $post['email_pembeli'] && $post['alamat_pembeli'] && $post['tanggal'] && $post['harga']
		 && $post['phone_pembeli'] && $post['nama_penerima'] && $post['alamat_penerima']){
			$sess_u = $this->session->userdata('user');
			if($sess_u)
			$post['customer_id'] = $sess_u['id'];
			$sess_p = $this->session->userdata('cart');
			//SET DATA
			$new_format = date("Y-m-d", strtotime($post['tanggal']));
			$post['produk_id'] = $sess_p['id_produk'];
			$post['qty'] = $sess_p['qty'];
			$post['ukuran'] = $sess_p['ukuran'];
			$post['tanggal_kirim'] = $new_format.' '.$post['jam'];
			unset($post['tanggal']);
			unset($post['jam']);
			$post['updated'] = date('Y-m-d H:i:s');
			unset($post['proceed']);
			$this->Model_Transaction->Insert_To_Db($post,'transaksi');
			echo '<script>alert("Pesanan anda kami terima"); window.location.assign("'.base_url().'");</script>';
			$this->session->unset_userdata('cart');
		}else{
			echo '<script>alert("Mohon maaf kami tidak menerima data anda, silahkan coba kembali"); window.location.assign("'.base_url().'pesan");</script>';
		}
	}
}
