<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_GoldStartUp_model extends CI_Model {

	// public function get_startup(){
	// 	$query = $this->db->query("SELECT transaksi.* FROM (transaksi JOIN peminjaman_ruang ON transaksi.id_transaksi=peminjaman_ruang.id_transaksi) JOIN peminjam ON peminjam.id_penyewa=peminjaman_ruang.id_penyewa WHERE peminjam.gold='startup'");
	// 	return $query->result();
	// }

	public function get_startup(){
		$query = $this->db->query("SELECT transaksi.*, ruang.*, peminjaman_ruang.*, peminjam.* from transaksi, ruang, peminjam, peminjaman_ruang where peminjam.id_penyewa=peminjaman_ruang.id_penyewa and transaksi.kode_booking=peminjaman_ruang.kode_booking and ruang.id_ruang=peminjaman_ruang.id_ruang and peminjam.gold='StartUp'");
		return $query->result();
	} 


	public function export()
    {
        //$penyewa = $this->db->select($column)->get('penyewa');
        $penyewa = $this->db->query("SELECT @rownum := @rownum + 1 AS rank, transaksi.kode_booking, ruang.nama_ruang, transaksi.tgl_mulai, transaksi.tgl_selesai, transaksi.jam_mulai, transaksi.jam_selesai, transaksi.event, transaksi.status_pinjam FROM peminjam, peminjaman_ruang, transaksi, ruang, (SELECT @rownum := 0) r where peminjam.id_penyewa=peminjaman_ruang.id_penyewa and transaksi.kode_booking=peminjaman_ruang.kode_booking and ruang.id_ruang=peminjaman_ruang.id_ruang and peminjam.gold='startup'");

        return $penyewa->result_array();
    }


     // hapus data room
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }
}
