<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Registration_model extends CI_Model {

	function __construct(){
    	parent::__construct();
	}

	// public function startup($no_identitas,$nama_instansi,$nama,$anggota1,$anggota2,$email,$nohp,$pass,$jenisPaket){
	// 		$this->db->query("insert into peminjam(no_identitas,nama_instansi,nama,anggota1,anggota2,email,nohp,pass,jenisPaket) values('$no_identitas',$nama_instansi','$nama','$anggota1','$anggota2','$email','$nohp',md5('$pass'),'$jenisPaket')");
	// 	}
    public function startup($data){ // array of data
      extract($data) ; // extract array $data. i.e. $data['nama'] ==> $nama
      $this->db->query("insert into peminjam(no_identitas,nama_instansi,nama,anggota1,anggota2,email,nohp,pass,jenisPaket,gold) 
        values('$no_identitas','$nama_instansi','$nama','$anggota1','anggota2','$email','$nohp',md5('$pass'),'$jenisPaket','$gold')");
    }

    // public function silver($no_identitas,$nama_instansi,$nama,$email,$nohp,$pass,,$jenisPaket){
  public function silver($data){ // array of data
      extract($data) ; // extract array $data. i.e. $data['nama'] ==> $nama
      $this->db->query("insert into peminjam(no_identitas,nama_instansi,nama,email,nohp,pass,scan,jenisPaket) 
        values('$no_identitas','$nama_instansi','$nama','$email','$nohp',md5('$pass'),'$scan','$jenisPaket')");
    }

  public function bronze($data){ // array of data
      extract($data) ; // extract array $data. i.e. $data['nama'] ==> $nama
      $this->db->query("insert into peminjam(no_identitas,nama_instansi,nama,email,nohp,pass,scan,jenisPaket) 
        values('$no_identitas','$nama_instansi','$nama','$email','$nohp',md5('$pass'),'$scan','$jenisPaket')");
    }
}

