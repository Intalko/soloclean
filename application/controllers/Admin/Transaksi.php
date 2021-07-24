<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Transaksi extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Transaksi');
    date_default_timezone_set('Asia/Jakarta');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('admin/login','refresh');
      exit;
    }
    define('TABLE','transaksi');
    $this->session->set_userdata(array('breadcrumb'=>'transaksi'));
  }

  public function Index($id = NULL){
    //print_r($data);exit;
	if(!$id){
		echo '<script>alert("Pilih transaksi terlebih dahulu"); window.location.assign("'.base_url().'admin/dashboard");</script>';
		exit;
	}
    $transaksi = $this->Model_Get_Transaksi->Join_Select(TABLE,$id);
	$arr_t = $transaksi[0];
	//print_r($arr_t);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data'] = $arr_t;
	$view_data['trans_code'] = substr(md5($arr_t['id']),0,5);
    $view_data['body']   = 'admin/body/transaksi/single_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
  }
  
   public function Update($id = NULL){
    //print_r($data);exit;
	if(!$id){
		echo '<script>alert("Tidak ada transaksi yang dirubah"); window.location.assign("'.base_url().'admin/dashboard");</script>';
		exit;
	}
	$this->Model_Transaction->Update_To_Db(array('updated'=>date('Y-m-d H:i:s'),'status'=>1), TABLE, 'id', $id);
	echo '<script>alert("Transaksi ini berhasil dirubah"); window.location.assign("'.base_url().'admin/dashboard");</script>';
	exit;
  }
  
  public function Close($id = NULL){
    //print_r($data);exit;
	if(!$id){
		echo '<script>alert("Tidak ada transaksi yang dirubah"); window.location.assign("'.base_url().'admin/dashboard");</script>';
		exit;
	}
	$this->Model_Transaction->Update_To_Db(array('updated'=>date('Y-m-d H:i:s'),'status'=>2), TABLE, 'id', $id);
	echo '<script>alert("Transaksi ini berhasil dirubah"); window.location.assign("'.base_url().'admin/dashboard");</script>';
	exit;
  }
  
}
?>
