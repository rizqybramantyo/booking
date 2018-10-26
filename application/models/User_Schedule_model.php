<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Schedule_model extends CI_Model {

	function tampilTransaksi(){
        $data = $this->db->query("SELECT p.no_identitas AS nomorIdentitas, p.nama AS nama, r.nama_ruang AS namaRuang, t.event AS acara, t.tgl_mulai AS tglMulai, t.tgl_selesai AS tglSelesai, t.jam_mulai AS waktuMulai, t.jam_selesai AS waktuSelesai FROM peminjam p, peminjaman_ruang pr, transaksi t, ruang r WHERE p.id_penyewa = pr.id_penyewa AND t.kode_booking = pr.kode_booking AND r.id_ruang = pr.id_ruang")->result();
        return $data;
  }

  function tampilRuang(){
        $data = $this->db->query("SELECT * from ruang")->result();
        return $data;
  }
  
	public function buat_kode()   {
		  $this->db->select('RIGHT(transaksi.kode_booking,7) as kode', FALSE);
		  $this->db->order_by('kode_booking','DESC');    
		  $this->db->limit(1);    
		  $query = $this->db->get('transaksi');      //cek dulu apakah ada sudah ada kode di tabel.    
		  if($query->num_rows() <> 0){      
		   //jika kode ternyata sudah ada.      
		   $data = $query->row();      
		   $kode = intval($data->kode) + 1;    
		  }
		  else {      
		   //jika kode belum ada      
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 7, "0", STR_PAD_LEFT); // angka 4 menunjukkan jumlah digit angka 0
		  $kodejadi = "BR-".$kodemax;    // hasilnya BR-0000001 dst.
		  return $kodejadi;  
	}

	public function nama_ruang(){
		$query = $this->db->query("SELECT * FROM ruang");
		return $query->result();
	}


	public function booking($data){
		 extract($data);
		 $this->db->query("insert into transaksi(kode_booking,event,tgl_mulai,tgl_selesai,jam_mulai,jam_selesai,status_pinjam,surat) values('$kode_booking','$event','$tgl_mulai','$tgl_selesai','$jam_mulai','$jam_selesai','$status_pinjam','$surat')");
		 
		 // $x = "insert into transaksi(kode_booking,event,tgl_mulai,tgl_selesai,jam_mulai,jam_selesai,status_pinjam,surat) values('$kode_booking','$event','$tgl_mulai','$tgl_selesai','$jam_mulai','$jam_selesai','$status_pinjam','$surat')";
		 // //$query = $this->db->query($x);
		 // echo $x;
	}

	public function booking2($data2){
		$this->db->trans_start();
		$this->db->insert('peminjaman_ruang', $data2);
		$peminjaman_id=$this->db->insert_id();
		$this->db->trans_complete();
		return $peminjaman_id; 
	}

	public function tran(){
        $tran = $this->db->query("SELECT peminjam.*, peminjaman_ruang.*, transaksi.*, ruang.* FROM peminjam, peminjaman_ruang, transaksi, ruang where peminjam.id_penyewa = peminjaman_ruang.id_penyewa AND transaksi.kode_booking = peminjaman_ruang.kode_booking AND ruang.id_ruang = peminjaman_ruang.id_ruang group by peminjam.email");
        return $tran->row_array();
	}

	public function cekRuangWaktu(){
		$hasil = $this->db->query("select * from transaksi");
		return $hasil;
	}
	
	public function getDataRuangDipakai($id_detail_peminjamanada){
		$this->db->select("*");
		$this->db->from("peminjaman_ruang, ruang");
		$this->db->where("peminjaman_ruang.id_ruang=ruang.id_ruang");
		$this->db->where_in("kode_booking",$id_detail_peminjamanada);
		return $this->db->get();
	}


	public function get_data_ruang_peminjaman(){
			$hasil = $this->db->query("select kode_booking, group_concat(nama_ruang) as ruang from peminjaman_ruang, ruang where peminjaman_ruang.id_ruang=ruang.id_ruang group by kode_booking");
			return $hasil;
		}

}
