<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_MemberGold_model extends CI_Model {
//ambil data gold
	function ambil_data(){
		$query = $this->db->query("select id_penyewa,gold, nama_instansi,nohp,email from peminjam where jenisPaket=1");
		return $query;
	}

	public function gold_export($column)
    {
        //$penyewa = $this->db->select($column)->get('penyewa');
        $penyewa = $this->db->query("SELECT @rownum := @rownum + 1 AS rank, $column FROM peminjam, (SELECT @rownum := 0) r WHERE jenisPaket=1");

        return $penyewa->result_array();
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


}