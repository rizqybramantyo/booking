<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Room_model extends CI_Model {

    function ambil_data(){
            $query = $this->db->query("select * from ruang");
            return $query;
        }
  
    public function tambahRuang($data){ // array of data
      extract($data) ; // extract array $data. i.e. $data['nama'] ==> $nama
      $this->db->query("insert into ruang(id_ruang,nama_ruang,kapasitas,fasilitas,ukuran,foto) 
        values('$id_ruang','$nama_ruang','$kapasitas','$fasilitas','$ukuran','$foto')");
    }

  // hapus data room
  function hapus_data($where,$table){
    $this->db->where($where);
    $this->db->delete($table);
  }

  //ubah data/edit

  public function ubah_data($data,$id_ruang)
  {
     # code...
      $this->db->where('id_ruang', $id_ruang);
      $this->db->update('ruang', $data);
     return TRUE;

  }

   public function baca_ruang($id_ruang)
  {
    # code...
    $query = $this->db->get_where('ruang',array(
      'id_ruang' => $id_ruang
    ));
    return $query->row();
  }
  
}

