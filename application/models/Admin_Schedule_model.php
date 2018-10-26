<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Schedule_model extends CI_Model {


	public function adule(){
		$query = $this->db->query("SELECT transaksi.*, ruang.*, peminjaman_ruang.* from transaksi, ruang, peminjam, peminjaman_ruang where peminjam.id_penyewa=peminjaman_ruang.id_penyewa and transaksi.kode_booking=peminjaman_ruang.kode_booking and ruang.id_ruang=peminjaman_ruang.id_ruang");
		return $query->result();
	} 
}
