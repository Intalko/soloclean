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
		$prod = $this->Model_Get_Produk->Normal_Select('produk');
		$view_data['produk'] = $prod;
		
		//print_r($sess);exit;
		//print_r($view_data);exit;
		$this->load->view('wrapper',$view_data);
	}
}
