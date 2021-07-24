<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		//Check Session
		$sess = $this->session->userdata('kategori');
		if(!isset($sess) || !$sess){
		  redirect(base_url(),'refresh');
		  exit;
		}
	}

	public function index(){
		$meta = metadata();
		$view_data['meta'] = $meta;
		$view_data['title'] = 'Kontak';
		$view_data['body'] = 'body/contact';
		//LOAD ALL WRAPPER CONTENT
		$sess = $this->session->userdata('kategori');
		$view_data['kategori'] = $sess;
		$this->load->view('wrapper',$view_data);
	}
}
