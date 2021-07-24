<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    date_default_timezone_set('Asia/Jakarta');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('admin/login','refresh');
      exit;
    }
    $this->session->set_userdata(array('breadcrumb'=>'slider'));
  }

  public function Index(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_slider'));
    //print_r($data);exit;
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'admin/body/slider/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
  }

  //INDEX FOR ADD USULAN VIEW
	public function Insert(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'tambah_usulan'));
    //GET KEKUATAN DATA
    $sess = $this->session->userdata('user_data');
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'admin/body/slider/add_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
	}
  //END OF INDEX FOR ADD USULAN VIEW
}
?>
