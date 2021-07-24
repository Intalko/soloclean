<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Logout extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		//$this->load->model('Model_Get_Produk');
		//Check Session
	}

	public function index(){		
		$this->session->unset_userdata('user');
		echo '<script>alert("Anda telah terlogout"); window.location.assign("'.base_url().'login");</script>';
		exit;
	}
}
