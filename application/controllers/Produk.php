<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
	//CONSTRUCT FOR PRODUK
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Get_Produk');
		$this->load->model('Model_Get_Kategori');
		//Check Session
		$sess = $this->session->userdata('kategori');
		if(!isset($sess) || !$sess){
		  redirect(base_url(),'refresh');
		  exit;
		}
	}

	public function index($page = NULL){
		if ($page == NULL)
			redirect(base_url().'produk/1');
		
		$selected_kategori = $this->Model_Get_Kategori->Update_Select('kategori','id',$page);
		if($selected_kategori){
			$view_data['bc_title'] = $selected_kategori[0]['nama_kategori'];
			$view_data['selected_kategori'] = $selected_kategori[0]['id'];
		}else{
			echo '<script>alert("Can`t found kategori, please info admin"); window.location.assign("'.base_url().'produk/1");</script>';
		}
			
		$group_produk = $this->Model_Get_Produk->Update_Join_Select('produk','kategori.id',$page);
		//$kategori = $this->Model_Kategori->Normal_Select();
		$end = count($group_produk);
		//print_r($group_produk);exit;
		$view_data['page'] = $page;
		$view_data['end'] = $end;
		$view_data['group_produk'] = $group_produk;
		$meta = metadata();
		$view_data['meta'] = $meta;
		$view_data['title'] = 'Produk';
		$view_data['body'] = 'body/produk';
		
		//LOAD ALL WRAPPER CONTENT
		$sess = $this->session->userdata('kategori');
		foreach ($sess as $key=>$ds){
			$counted = $this->Model_Get_Produk->Update_Count_Select('produk','id_kategori',$ds['id']);
			//print_r($counted);exit;
			$sess[$key]['count'] = $counted['counted'];
		}
		$view_data['kategori'] = $sess;
		//print_r($sess);exit;
		$this->load->view('wrapper',$view_data);
	}
}
