<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Customer');
		$this->load->model('Model_Transaction');
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
		$view_data['title'] = 'Register';
		$view_data['body'] = 'body/register';
		//LOAD ALL WRAPPER CONTENT
		$sess = $this->session->userdata('kategori');
		$view_data['kategori'] = $sess;
		$this->load->view('wrapper',$view_data);
	}
	
	public function submit(){
		$post = $this->input->post();
		if( empty($post['nama']) 
			|| empty($post['phone']) 
			|| empty($post['email']) 
			|| empty($post['password'])){
				echo '<script>alert("Tolong isi required Data"); window.location.assign("'.base_url().'register");</script>';
				exit;
		}else{
			if(!is_numeric($post['phone'])){
				echo '<script>alert("Mohon masukkan format telepon dengan format 62xxxx no anda"); window.location.assign("'.base_url().'register");</script>';
				exit;
			}else{
				$this->Model_Transaction->Insert_To_Db($post,'customer');
				echo '<script>alert("Anda berhasil diregistrasi, silahkan check email."); window.location.assign("'.base_url().'login");</script>';
				exit;
			}
		}
	}	
}
