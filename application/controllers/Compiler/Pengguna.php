<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    define('TABLE','pengguna');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'nama' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      ),
      'username' => array(
              'type' => 'VARCHAR',
              'constraint' => '100',
      ),
      'password' => array(
              'type' =>'VARCHAR',
              'constraint' => '255',
              'null' => TRUE,
      ),
      'email' => array(
              'type' =>'VARCHAR',
              'constraint' => '100',
      ),
      'no_telp' => array(
              'type' =>'VARCHAR',
              'constraint' => '20',
      ),
    );
    //COMPILE FOR CREATE TABLE
    $this->dbforge->add_field('id');
    $this->dbforge->add_field($fields);
    $this->dbforge->create_table(TABLE);
    echo('Compile for create table '.TABLE.' success');
	}

  public function Drop(){
    //COMPILE FOR DROP TABLE
    $this->dbforge->drop_table(TABLE);
    echo('Compile for drop table '.TABLE.' success');
  }

  public function Insert(){
    $data = array(
      'nama'     => 'Julius Cesario',
      'username' => 'admin',
      'password' => md5('admin'),
      'email'    => 'lixus.julius17@gmail.com',
      'no_telp' => '081288540387'
    );
    $this->db->insert(TABLE,$data);
    echo('Compile for insert '.serialize($data).' to table '.TABLE.' success');
  }
}
