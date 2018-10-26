<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {

  function __construct(){
          parent::__construct();
      }
//change pass user
  public function ubahSandi($email,$newpass){
      $this->db->query("update peminjam set pass=md5('$newpass') where email='$email'");
    }
  

   public function history($email)
    {
        //$penyewa = $this->db->select($column)->get('penyewa');
        $query = $this->db->query("SELECT transaksi.*, ruang.*, peminjaman_ruang.* from transaksi, ruang, peminjam, peminjaman_ruang where peminjam.id_penyewa=peminjaman_ruang.id_penyewa and transaksi.kode_booking=peminjaman_ruang.kode_booking and ruang.id_ruang=peminjaman_ruang.id_ruang and peminjam.email='$email'");
		return $query->result();
    }

}

