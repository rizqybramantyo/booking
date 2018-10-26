<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Bronze_model extends CI_Model {

	function ambil_data(){
		$query = $this->db->query("select id_penyewa, nama_instansi,nohp,email, scan from peminjam where jenisPaket=3");
		return $query;
	}

  //random_sandibaru peminjam
    public function random_sandibaru($length=4) {
        $chars = "ABCDEFGHJKLMNPQRSTUVWXYZ123456789";
        $sandi = substr( str_shuffle( $chars ), 0, $length );
        return $sandi;
    }
//ubahKataSandiPeminjam
    public function ubahKataSandiPeminjam($email,$passBaru){
       
      $this->db->query("update peminjam set pass=md5('$passBaru') where email='$email'");
    }
// ambil data peminjam
    public function get_data_peminjam(){
      $hasil = $this->db->query("select * from peminjam");
      return $hasil;
    }

//random_katasandi
    public function random_katasandi($length=8) {
        $chars = "abcdefghijkmnopqrstuvwxyzABCDEFGHJKLMNPQRSTUVWXYZ123456789";
        $pass = substr( str_shuffle( $chars ), 0, $length );
        return $pass;
    }

        // hapus data peminjam
         public function hapus_data($where,$table){
          $this->db->where($where);
          $this->db->delete($table);
     }


	public function all($column)
    {
        //$penyewa = $this->db->select($column)->get('penyewa');
        $penyewa = $this->db->query("SELECT @rownum := @rownum + 1 AS rank, $column FROM peminjam, (SELECT @rownum := 0) r where jenisPaket=3");

        return $penyewa->result_array();
    }

    public function get_bronze(){
  		$query = $this->db->query("SELECT transaksi.*, ruang.*, peminjaman_ruang.*, peminjam.* from transaksi, ruang, peminjam, peminjaman_ruang where peminjam.id_penyewa=peminjaman_ruang.id_penyewa and transaksi.kode_booking=peminjaman_ruang.kode_booking and ruang.id_ruang=peminjaman_ruang.id_ruang and peminjam.jenisPaket=3");
        return $query->result();
  	}

  public function get_syllabus_dwp(){
    $this->db->select('*');
    $this->db->from('peminjam');

    $query = $this->db->get();
    $result = $query->result();
    return $result;
  }


  public function export()
    {
        //$penyewa = $this->db->select($column)->get('penyewa');
        $penyewa = $this->db->query("SELECT @rownum := @rownum + 1 AS rank, transaksi.kode_booking, ruang.nama_ruang, transaksi.tgl_mulai, transaksi.tgl_selesai, transaksi.jam_mulai, transaksi.jam_selesai, transaksi.event, transaksi.status_pinjam FROM peminjam, peminjaman_ruang, transaksi, ruang, (SELECT @rownum := 0) r where peminjam.id_penyewa=peminjaman_ruang.id_penyewa and transaksi.kode_booking=peminjaman_ruang.kode_booking and ruang.id_ruang=peminjaman_ruang.id_ruang and peminjam.jenisPaket=3");

        return $penyewa->result_array();
    }


 

}
