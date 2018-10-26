<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Dashboard_model extends CI_Model {

	function countGold(){
		$sql = "SELECT count(id_penyewa) as total from peminjam where jenisPaket=1";
		$result = $this->db->query($sql);
		return $result->row()->total;
	}

	function countSilver(){
		$sql = "SELECT count(id_penyewa) as total from peminjam where jenisPaket=2";
		$result = $this->db->query($sql);
		return $result->row()->total;
	}

	function countBronze(){
		$sql = "SELECT count(id_penyewa) as total from peminjam where jenisPaket=3";
		$result = $this->db->query($sql);
		return $result->row()->total;
	}
}
