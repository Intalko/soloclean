<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Single_Produk extends CI_Controller {
	//CONSTRUCT FOR KEKUATAN
	function __construct(){
		parent::__construct();
		//INIT MODEL TRANSACTION
		$this->load->model('Model_Get_Produk');
		//Check Session
		$sess = $this->session->userdata('kategori');
		if(!isset($sess) || !$sess){
		  redirect(base_url(),'refresh');
		  exit;
		}
	}

	public function index($id){
		if($id == NULL){
			redirect(base_url().'produk/1');
			exit;
		}
		$item = $this->Model_Get_Produk->Join_Select_Param('produk','produk.id',$id);
		if(empty($item)){
			redirect(base_url().'produk/1');
			exit;
		}
		$pesan = $item[0]['pesan'];
		$star = round($pesan/5);
		$view_data['star'] = $star;
		$view_data['produk'] = $item[0];
		$group_produk = $this->Model_Get_Produk->Update_Join_Select('produk','kategori.id',$item[0]['id_kategori']);
		foreach($group_produk as $key => $gp){
			if($gp['id'] == $item[0]['id']) {
				unset($group_produk[$key]);
			}
		}
		$meta = metadata();
		$view_data['meta'] = $meta;
		//print_r($group_produk);exit;
		$view_data['group_produk'] = $group_produk;
		$view_data['title'] = 'Product';
		$view_data['body'] = 'body/single_produk';
		//LOAD ALL WRAPPER CONTENT
		$sess = $this->session->userdata('kategori');
		$view_data['kategori'] = $sess;
		$this->load->view('wrapper',$view_data);
	}
}
