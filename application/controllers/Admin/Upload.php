<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Upload extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $sess = $this->session->userdata('user_data');
    }

    public function Index()
  	{
      $sess = $this->session->userdata('user_data');
  		if (!empty($_FILES)){
        //FOR UPLOAD
        $fileName = $_FILES['file']['name'];
        //FOR UPLOAD
        $basepath = BASEPATH.'../uploads/slider';
        if(!is_dir($basepath)){
          mkdir($basepath,0755,TRUE);
        }
        if(file_exists($basepath.'/'.$fileName)){
          echo ('Error saat input file. Reason : File Sudah Pernah di upload');
          exit;
        }
        $config['upload_path'] = $basepath ;
        $config['file_name'] = $fileName;
        $config['allowed_types'] = 'jpg|jpeg|png';
        $config['max_size'] = 100000000;

        $this->load->library('upload');
        $this->upload->initialize($config);

        if(!$this->upload->do_upload('file')){
          $error = $this->upload->display_errors();
          echo ('Error saat input file. Reason : '.$error);
          exit;
        }else{
          echo ('Sukses upload file '.$fileName);
        }
  		}
      elseif ($this->input->post('file_to_remove')){
  			$file_to_remove = $this->input->post('file_to_remove');
  			unlink(BASEPATH.'../uploads/slider/'. $file_to_remove);
        echo ('Success remove file '.$file_to_remove);
  		}
  		else {
  			$this->listFiles();
  		}
  	}

  	private function ListFiles()
  	{
      $sess = $this->session->userdata('user_data');
      $basepath = BASEPATH.'../uploads/slider';
  		$files = get_filenames($basepath);
  		echo json_encode($files);
  	}

}
