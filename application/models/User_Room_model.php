<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Room_model extends CI_Model {

  function tampilRuang(){
        $data = $this->db->query("SELECT * from ruang")->result();
        return $data;
  }
  
  
}
