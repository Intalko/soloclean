<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Kategori');
    date_default_timezone_set('Asia/Jakarta');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('admin/login','refresh');
      exit;
    }
    define('TABLE','kategori');
    $this->session->set_userdata(array('breadcrumb'=>'kategori'));
  }

  public function Index(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_kategori'));
    //print_r($data);exit;
    $category = $this->Model_Get_Kategori->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data'] = $category;
    $view_data['body']   = 'admin/body/master/category/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
  }

  //INDEX FOR ADD CATEGORY VIEW
	public function Tambah(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'tambah_kategori'));
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'admin/body/master/category/add_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
	}
  //END OF INDEX FOR ADD CATEGORY VIEW

  //INDEX FOR EDIT CATEGORY VIEW
	public function Perbarui(){
    //SET SUB BREADCRUMB
    $id = $this->uri->segment(4);
    if(!empty($id)){
      $this->session->set_userdata(array('main_sub_breadcrumb'=>'perbarui_kategori'));
      $data = $this->Model_Get_Kategori->Update_Select(TABLE,'id',$id);
      //DECLARE VIEW DATA FOR WRAPPER
      //print_r($data);exit;
      $view_data['data']   = $data[0];
      $view_data['body']   = 'admin/body/master/category/edit_dsp';
      //LOAD VIEW DATA TO WRAPPER
      $this->load->view('admin/wrapper',$view_data);
    }else{
      echo('Anda tidak bisa mengakses laman ini');exit;
    }
  }
  //END OF INDEX FOR EDIT CATEGORY VIEW

  //POST CATEGORY
  public function Insert(){
    $post = $this->input->post();
    //CHECK IF EMPTY POST
    if(empty($post)){
      echo('Anda tidak bisa mengakses laman ini');exit;
    }else{
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Kategori->validate(TABLE,$post['nama_kategori']);
      if($exist==1){
        echo '<script>alert("Category Sudah Ada"); window.location.assign("'.base_url().'Admin/Category/Tambah");</script>';
      } else{
        //INSERT TO DATABASE
        $this->Model_Transaction->Insert_To_Db($post,TABLE);

        echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Admin/Category/Tambah");</script>';
      }
    }
  }

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
      $exist = $this->Model_Get_Kategori->validate(TABLE,$post['nama_kategori']);
      if(!empty($exist) && ($exist!=$id)){
        echo '<script>alert("Category Sudah Ada"); window.location.assign("'.base_url().'Admin/Category/Perbarui/'.$id.'");</script>';
      } else{
        //INSERT TO DATABASE
        $this->Model_Transaction->Update_To_Db($post,TABLE,'id',$id);
        echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Admin/Category/Perbarui/'.$id.'");</script>';
      }
    }
  }

  //HAPUS CATEGORY
  public function Delete(){
    $uri = $this->uri->segment(4);
    $data = array(
      'deleted'	=> '1'
    );
    $this->Model_Transaction->Update_To_Db($data,TABLE,'id',$uri);
    echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Admin/Category");</script>';
  }
  //END OF POST KEKUATAN
}
?>
