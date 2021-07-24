<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Seo');
    date_default_timezone_set('Asia/Jakarta');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('admin/login','refresh');
      exit;
    }
    define('TABLE','seo');
    $this->session->set_userdata(array('breadcrumb'=>'seo'));
  }

  //INDEX FOR EDIT CATEGORY VIEW
	public function Perbarui(){
    //SET SUB BREADCRUMB
    $id = $this->uri->segment(4);
    $id2 = $this->uri->segment(5);
    if(!empty($id)){
      $this->session->set_userdata(array('main_sub_breadcrumb'=>'perbarui_seo'));
      $seo = $this->Model_Get_Seo->Update_Select(TABLE,'seo_page',$id,'id_seo_page',$id2);
      //DECLARE VIEW DATA FOR WRAPPER
      //print_r($data);exit;
      $view_data['data']   = $seo[0];
      $view_data['body']   = 'admin/body/seo/edit_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('admin/wrapper',$view_data);
    }else{
      echo('Anda tidak bisa mengakses laman ini');exit;
    }
  }
  //END OF INDEX FOR EDIT CATEGORY VIEW

  //PERBARUI CATEGORY
  public function Update(){
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      echo('Anda tidak bisa mengakses laman ini');exit;
    }else{
      $id = $post['id'];
      unset($post['id']);
      //VALIDATE TO DATABASE

      //UPDATE TO DATABASE
      $this->Model_Transaction->Update_To_Db($post,TABLE,'id',$id);
      echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Admin/Dashboard");</script>';
    }
  }

}
?>
