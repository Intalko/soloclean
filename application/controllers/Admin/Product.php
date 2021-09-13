<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {
  //CONSTRUCT FOR KEKUATAN
  function __construct(){
    parent::__construct();
    //INIT MODEL TRANSACTION
    $this->load->model('Model_Transaction');
    $this->load->model('Model_Get_Produk');
    $this->load->model('Model_Type');
    date_default_timezone_set('Asia/Jakarta');
    //CHECK SESSION
    $sess = $this->session->userdata('user_data');
    if(empty($sess)){
      redirect('admin/login','refresh');
      exit;
    }
    define('TABLE2','kategori');
    define('TABLE','produk');
    $this->session->set_userdata(array('breadcrumb'=>'produk'));
  }

  public function Index(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'daftar_produk'));
    //print_r($data);exit;
    $product = $this->Model_Get_Produk->Join_Select(TABLE);
    //DECLARE VIEW DATA FOR WRAPPER
    $view_data['data'] = $product;
    $view_data['body']   = 'admin/body/master/product/record_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
  }

  //INDEX FOR ADD CATEGORY VIEW
	public function Tambah(){
    //SET SUB BREADCRUMB
    $this->session->set_userdata(array('main_sub_breadcrumb'=>'tambah_produk'));
    //DECLARE VIEW DATA FOR WRAPPER
    $category = $this->Model_Get_Produk->Normal_Select(TABLE2);
    $type = $this->Model_Type->Normal_Select();

    //print_r($category);exit;
    $view_data['data']    = $category;
    $view_data['data2']   = $type;
    $view_data['body']   = 'admin/body/master/product/add_dsp';
    //LOAD VIEW DATA TO WRAPPER
    $this->load->view('admin/wrapper',$view_data);
	}
  //END OF INDEX FOR ADD CATEGORY VIEW

  //INDEX FOR EDIT CATEGORY VIEW
	public function Perbarui(){
    //SET SUB BREADCRUMB
    $id = $this->uri->segment(4);
    if(!empty($id)){
      $this->session->set_userdata(array('main_sub_breadcrumb'=>'tambah_produk'));
      $product = $this->Model_Get_Produk->Update_Select(TABLE,'id',$id);
      $category = $this->Model_Get_Produk->Normal_Select(TABLE2);
      $type = $this->Model_Type->Normal_Select();
      //DECLARE VIEW DATA FOR WRAPPER
      //print_r($data);exit;
      $view_data['data']   = $product[0];
      $view_data['data2']   = $category;
        $view_data['data3']   = $type;
      $view_data['body']   = 'admin/body/master/product/edit_dsp';
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
      $exist = $this->Model_Get_Produk->validate(TABLE,$post['nama_produk']);
      if($exist==1){
        echo '<script>alert("Product Sudah Ada"); window.location.assign("'.base_url().'Admin/Product/Tambah");</script>';
      } else{
        //INSERT TO DATABASE
        $config['upload_path'] = BASEPATH.'../includes/assets/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 1000000;
        $this->load->library('upload');
        //CHECK UPLOAD IMAGE FIRST
        $filename = $_FILES['produk_image']['name'];
        if(!empty($filename)){
          $ext = pathinfo($filename, PATHINFO_EXTENSION);
          //FOR FILE NAME
          $fileName = str_replace(' ','_',strtolower($post['nama_produk']));
          //FOR UPLOAD
          $config['file_name'] = $fileName;
          $this->upload->initialize($config);

          if(!$this->upload->do_upload('produk_image')){
            $error = $this->upload->display_errors();
            echo $error; exit;
          }else{
            $post['produk_image'] = 'includes/assets/'.$fileName.'.'.$ext;
          }
        }
        
		$post['date_created'] = date('Y-m-d H:i:s');
        $id = $this->Model_Transaction->Insert_To_Db($post,TABLE);
        if(!empty($id)){
          $post_seo['seo_page'] = 1;
          $post_seo['id_seo_page'] = $id;
          $this->Model_Transaction->Insert_To_Db($post_seo,'seo');
        }
        echo '<script>alert("Berhasil Menambahkan Data"); window.location.assign("'.base_url().'Admin/Product/Tambah");</script>';
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
	  if(!isset($post['featured'])){
		  $post['featured'] = 0;
	  }
      //VALIDATE TO DATABASE
      $exist = $this->Model_Get_Produk->validate(TABLE,$post['nama_produk']);
	  $product = $this->Model_Get_Produk->Update_Select(TABLE,'id',$id);
      //print_r($exist);exit;
      if(!empty($exist) && ($exist!=$id)){
        echo '<script>alert("Product Sudah Ada"); window.location.assign("'.base_url().'Admin/Product/Perbarui/'.$id.'");</script>';
      } else{
        //UPDATE TO DATABASE
        $config['upload_path'] = BASEPATH.'../includes/assets/';
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 1000000;
        $this->load->library('upload');
        //CHECK UPLOAD IMAGE FIRST
        $filename = $_FILES['produk_image']['name'];
        if(!empty($filename)){
			if(!empty($product[0]['produk_image'])){
				unlink(BASEPATH.'../'.$product[0]['produk_image']);
			}
			$ext = pathinfo($filename, PATHINFO_EXTENSION);
			//FOR FILE NAME
			$fileName = str_replace(' ','_',strtolower($post['nama_produk']));
			//FOR UPLOAD
			$config['file_name'] = $fileName;
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('produk_image')){
				$error = $this->upload->display_errors();
				echo $error; exit;
			}else{
				$post['produk_image'] = 'includes/assets/'.$fileName.'.'.$ext;
			}
        }else{
			unset($post['produk_image']);
        }
        //CHECK FILE IMAGE SECOND
        $filename2 = $_FILES['produk_image2']['name'];
        if(!empty($filename2)){
			if(!empty($product[0]['produk_image2'])){
				unlink(BASEPATH.'../'.$product[0]['produk_image2']);
			}
			$ext2 = pathinfo($filename2, PATHINFO_EXTENSION);
			//FOR FILE NAME
			$fileName2 = str_replace(' ','_',strtolower($post['nama_produk'])).'image2';
			//FOR UPLOAD
			$config['file_name'] = $fileName2;
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('produk_image2')){
				$error = $this->upload->display_errors();
				echo $error; exit;
			}else{
				$post['produk_image2'] = 'includes/assets/'.$fileName2.'.'.$ext2;
			}
		}else{
			unset($post['produk_image2']);
		}
		
		//CHECK FILE IMAGE THIRD
        $filename3 = $_FILES['produk_image3']['name'];
        if(!empty($filename3)){
			if(!empty($product[0]['produk_image3'])){
				unlink(BASEPATH.'../'.$product[0]['produk_image3']);
			}
			$ext3 = pathinfo($filename3, PATHINFO_EXTENSION);
			//FOR FILE NAME
			$fileName3 = str_replace(' ','_',strtolower($post['nama_produk'])).'image3';
			//FOR UPLOAD
			$config['file_name'] = $fileName3;
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('produk_image3')){
				$error = $this->upload->display_errors();
				echo $error; exit;
			}else{
				$post['produk_image3'] = 'includes/assets/'.$fileName3.'.'.$ext3;
			}
		}else{
			unset($post['product_image3']);
		}
		
		//CHECK FILE IMAGE FOURTH
        $filename4 = $_FILES['produk_image4']['name'];
        if(!empty($filename4)){
			if(!empty($product[0]['produk_image4'])){
				unlink(BASEPATH.'../'.$product[0]['produk_image4']);
			}
			$ext4 = pathinfo($filename4, PATHINFO_EXTENSION);
			//FOR FILE NAME
			$fileName4 = str_replace(' ','_',strtolower($post['nama_produk'])).'image4';
			//FOR UPLOAD
			$config['file_name'] = $fileName4;
			$this->upload->initialize($config);

			if(!$this->upload->do_upload('produk_image4')){
				$error = $this->upload->display_errors();
				echo $error; exit;
			}else{
				$post['produk_image4'] = 'includes/assets/'.$fileName4.'.'.$ext4;
			}
        }else{
            unset($post['produk_image4']);
        }

        //UPDATE TO DATABASE
        $this->Model_Transaction->Update_To_Db($post,TABLE,'id',$id);
        echo '<script>alert("Berhasil Merubah Data"); window.location.assign("'.base_url().'Admin/Product/Perbarui/'.$id.'");</script>';
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
    echo '<script>alert("Berhasil Menghapus Data"); window.location.assign("'.base_url().'Admin/Product");</script>';
  }
  //END OF POST KEKUATAN
}
?>
