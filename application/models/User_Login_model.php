<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Login_model extends CI_Model {

	//$table = 'penyewa';
	
	//function cek_login($where){
	//	return $this->db->get_where($this->table, $where);
	//}

	function cek_login($email, $pass){
		$query = $this->db->query("select * from peminjam where email='$email' and pass=md5('$pass')");
		return $query;
	}

	public function cekLogin(){
			if($this->session->userdata('login'))
				return true;

				return false;
		}
	
}
