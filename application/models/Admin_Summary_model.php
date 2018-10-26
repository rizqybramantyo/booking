<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Summary_model extends CI_Model {

	 public function summary(){
  		$query = $this->db->query("SELECT transaksi.*, ruang.*, peminjaman_ruang.*, peminjam.*, sum(tgl_selesai-tgl_mulai) as jam, count(distinct peminjaman_ruang.id_ruang) as rg from transaksi, ruang, peminjam, peminjaman_ruang where peminjam.id_penyewa=peminjaman_ruang.id_penyewa and transaksi.kode_booking=peminjaman_ruang.kode_booking and ruang.id_ruang=peminjaman_ruang.id_ruang group by nama_ruang");
      return $query->result();
	  }
}