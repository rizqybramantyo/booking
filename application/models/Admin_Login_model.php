<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Login_model extends CI_Model {

	function cek_login($email, $pass){
		$query = $this->db->query("select * from admin where email='$email' and pass=md5('$pass')");
		return $query;
	}

  public function cekLogin(){
      if($this->session->userdata('login'))
        return true;

        return false;
    }
	
}
