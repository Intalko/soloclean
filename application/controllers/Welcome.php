<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	//CONSTRUCT FOR WELCOME
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Home');
		$this->load->model('Model_Get_Kategori');
		$this->load->model('Model_Get_Produk');
	}

	public function index(){
		$view_data['title'] = 'Home';
		$view_data['body'] = 'body/home';
		$meta = metadata();
		$view_data['meta'] = $meta;
		$kategori_rand = $this->Model_Get_Kategori->Random_Select('kategori');
		$kategori = $this->Model_Get_Kategori->Normal_Select('kategori');
		//print_r($kategori);exit;
		$this->session->set_userdata(array('kategori'=>$kategori));
		$sess = $this->session->userdata('kategori');
		foreach($kategori_rand as $key=>$kt){
			$prod = $this->Model_Get_Produk->Get_By_Param('produk',0,4,0,'id_kategori',$kt['id'],0);
			$kategori_rand[$key]['prod'] = $prod;
			$kategori_rand[$key]['id_nama'] = str_replace(' ','_',$kt['nama_kategori']);
		}
		$view_data['kategori'] = $sess;
		$view_data['start'] = $kategori_rand[0]['id'];
		$view_data['rand_kategori'] = $kategori_rand;
		
		//print_r($sess);exit;
		//print_r($view_data);exit;
		$this->load->view('wrapper',$view_data);
	}
}
