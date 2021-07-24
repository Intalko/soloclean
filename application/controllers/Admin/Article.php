<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Article extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Article');
    date_default_timezone_set('Asia/Jakarta');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('admin/login','refresh');
      exit;
    }
    define('TABLE','article');
    $this->session->set_userdata(array('breadcrumb'=>'article'));
  }

  public function Index(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_article'));
    //print_r($data);exit;
    $article = $this->Model_Get_Article->Normal_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data'] = $article;
    $view_data['body']   = 'admin/body/article/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
  }

  //INDEX FOR ADD CATEGORY VIEW
	public function Tambah(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'tambah_article'));
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['body']   = 'admin/body/article/add_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
	}
  //END OF INDEX FOR ADD CATEGORY VIEW

  //INDEX FOR EDIT CATEGORY VIEW
	public function Perbarui(){
    //SET SUB BREADCRUMB
    $id = $this->uri->segment(4);
    if(!empty($id)){
      $this->session->set_userdata(array('main_sub_breadcrumb'=>'perbarui_article'));
      $testi = $this->Model_Get_Article->Update_Select(TABLE,'id',$id);
      //DECLARE VIEW DATA FOR WRAPPER
      //print_r($data);exit;
      $view_data['data']   = $testi[0];
      $view_data['body']   = 'admin/body/article/edit_dsp';
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
      $post_seo = array(
        'seo_title' => $post['seo_title'],
        'seo_keywords' => $post['seo_keywords'],
        'seo_description' => $post['seo_description'],
        'seo_author' => $post['seo_author'],
      );
      unset($post['seo_title']);
      unset($post['seo_keywords']);
      unset($post['seo_description']);
      unset($post['seo_author']);
      $post['date_created'] = date('Y-m-d');
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Article->validate(TABLE,$post['judul_article']);
      if($exist==1){
        echo '<script>alert("Testimonial Sudah Ada"); window.location.assign("'.base_url().'Admin/Article");</script>';
      } else{
        //UPDATE TO DATABASE
        $id = $this->Model_Transaction->Insert_To_Db($post,TABLE);
        if(!empty($id)){
          $post_seo['seo_page'] = 2;
          $post_seo['id_seo_page'] = $id;
          $this->Model_Transaction->Insert_To_Db($post_seo,'seo');
        }
        echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Admin/Article");</script>';
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
      $exist = $this->Model_Get_Article->validate(TABLE,$post['judul_article']);
      if(!empty($exist) && ($exist!=$id)){
        echo '<script>alert("Article Sudah Ada"); window.location.assign("'.base_url().'Admin/Article");</script>';
      } else{

        //UPDATE TO DATABASE
        $this->Model_Transaction->Update_To_Db($post,TABLE,'id',$id);
        echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Admin/Article");</script>';
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
    echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Admin/Article");</script>';
  }
  //END OF POST KEKUATAN
}
?>
