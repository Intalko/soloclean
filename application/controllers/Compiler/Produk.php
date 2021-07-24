<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Produk extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    define('TABLE','produk');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'nama_produk' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
      'nama_kategori' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
	  'jenis' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
      'penjelasan' => array(
              'type' => 'TEXT',
              'null' => TRUE
      ),
      'deleted' => array(
              'type' => 'TINYINT',
              'default' => 0
      )
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

}
