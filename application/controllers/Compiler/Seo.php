<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Seo extends CI_Controller {
  //CONSTRUCT FOR LOGIN
  function __construct(){
    parent::__construct();
    //CALL LIBRARY
    $this->load->database();
    $this->load->dbforge();
    define('TABLE','seo');
  }

  //INDEX FOR FIRST VIEW
	public function Index(){
    //PUT YOUR FIELD HERE
    $fields = array(
      'seo_title' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
            ),
      'seo_keywords' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
      'seo_description' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
      'seo_author' => array(
              'type' => 'VARCHAR',
              'constraint' => '150',
      ),
      'seo_page' => array(
              'type' => 'TINYINT',
      ),
      'id_seo_page' => array(
              'type' => 'BIGINT',
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
