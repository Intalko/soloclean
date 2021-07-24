<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL MODEL
    $this->load->model('Model_Users');
    $this->load->model('Model_Get_Transaksi');
	  //$this->load->model('Model_Dashboard');
    //CHECK SESSION LOGIN
    $session = $this->session->userdata('user_data');
    if(empty($session)) {
      redirect('admin/login' , 'refresh');
      exit();
    }
    //SET BREADCRUMB
    $this->session->set_userdata(array('breadcrumb'=>'dashboard'));
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
	$transaksi = $this->Model_Get_Transaksi->Normal_Select('transaksi', 0);
	$transaksi_proses = $this->Model_Get_Transaksi->Normal_Select('transaksi', 1);
	$transaksi_selesai = $this->Model_Get_Transaksi->Normal_Select('transaksi', 2);
	//print_r($transaksi);exit;
    //DECLARE USER DATA FROM SESSION
    $view_data['udata'] = $this->session->userdata('user_data');
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'admin/body/dashboard/dsp';
    $view_data['data']   = $transaksi;
    $view_data['data2']   = $transaksi_proses;
    $view_data['data3']   = $transaksi_selesai;
	//LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
	}
}
