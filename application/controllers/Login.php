<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		//$this->load->model('Model_Get_Produk');
		//Check Session
		$sess = $this->session->userdata('kategori');
		
		$this->load->model('Model_Customer');
		if(!isset($sess) || !$sess){
		  redirect(base_url(),'refresh');
		  exit;
		}
		$sess_u = $this->session->userdata('user');
		if(isset($sess_u) || $sess_u){
		  redirect(base_url(),'refresh');
		  exit;
		}
	}

	public function index(){
		
		$meta = metadata();
		$view_data['meta'] = $meta;
		$view_data['title'] = 'Login';
		$view_data['body'] = 'body/login';
		//LOAD ALL WRAPPER CONTENT
		$sess = $this->session->userdata('kategori');
		$view_data['kategori'] = $sess;
		$this->load->view('wrapper',$view_data);
	}
	
	public function submit(){
		$post = $this->input->post();
		if(empty($post['email']) 
			|| empty($post['password'])){
				echo '<script>alert("Email & Password tidak boleh kosong"); window.location.assign("'.base_url().'login");</script>';
				exit;
		}else{
			$data = $this->Model_Customer->Get_By_Param('customer','email',$post['email'],'password',$post['password']);
			if(!$data){
				echo '<script>alert("Maaf Email atau Password anda salah, coba lagi yah"); window.location.assign("'.base_url().'login");</script>';
				exit;
			}elseif($data[0]['deleted'] == 1){
				echo '<script>alert("Maaf '.$data[0]['nama'].' akun anda telah terblokir, silahkan kontak kami yah :)"); window.location.assign("'.base_url().'login");</script>';
				exit;
			}else{
				$this->session->set_userdata(array('user'=>$data[0]));
				echo '<script>alert("Selamat berbelanja di Liez Florist, '.$data[0]['nama'].'"); window.location.assign("'.base_url().'login");</script>';
				exit;
			}
		}
	}
	
	public function logout(){
		$this->session->unset_userdata('user');
		echo '<script>alert("Anda telah terlogout"); window.location.assign("'.base_url().'login");</script>';
		exit;
	}
}
