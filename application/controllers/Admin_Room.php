<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Room extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_Room_model');
    }
	public function index()
	{
		$data['ruang'] = $this->Admin_Room_model->ambil_data()->result();
		$this->load->view('admin_Room',$data);
	}

	
	public function addRoom(){
		$id_ruang = $this->input->post('id_ruang');
		$nama_ruang = $this->input->post('nama_ruang');
		$kapasitas = $this->input->post('kapasitas');
		$fasilitas = $this->input->post('fasilitas');
		$ukuran = $this->input->post('ukuran');
	  $foto = $this->input->post('foto');
		

		$config['upload_path']          = './scan/ruang/';
		$config['allowed_types']        = 'jpg|png|jpeg';
		$config['max_size']             = 0;
		
 
		$this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload('foto')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('admin_Room', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$foto = $this->upload->data()['file_name'];
		}
		
		$cekid_ruang = $this->db->query("select * from ruang where id_ruang='$id_ruang'");
		if ($cekid_ruang->num_rows() == null) {
			$user_data = array(
				'id_ruang' => $id_ruang,
				
				'nama_ruang' => $nama_ruang,
				'kapasitas' => $kapasitas,
				'fasilitas' => $fasilitas,
				'ukuran' => $ukuran,
				'foto' => $foto
			);
			$this->Admin_Room_model->tambahRuang($user_data);
			$this->session->set_flashdata('suksestambah',true);
			$data['nama_ruang'] = null;
			$data['kapasitas'] = null;
			$data['fasilitas'] = null;
			$data['ukuran'] = null;
			
			redirect('Admin_Room');
		}
		else{
			$this->session->set_flashdata('gagaltambah',true);
			$data['nama_ruang'] = $nama_ruang;
			$data['kapasitas'] = null;
			$data['fasilitas'] = null;
			$data['ukuran'] = null;
			$this->load->view('admin_Room',$data);
		}
	}


	//hapus data room
	function hapus1($id_ruang){
		$where = array('id_ruang' => $id_ruang);
		$this->Admin_Room_model->hapus_data($where,'ruang');
		redirect('Admin_Room');
	}

//edit data
	public function ubah($id_ruang)
	{
		$data['ruang'] = $this->Admin_Room_model->baca_ruang($id_ruang);
		$this->load->view('admin_EditRoom',$data);
	}


	public function store_ubah()
	{
		// # code...
		 $id_ruang = $_POST['id_ruang'];
		 $nama_ruang = $_POST['nama_ruang'];
		 $kapasitas = $_POST['kapasitas'];
		 $fasilitas = $_POST['fasilitas'];
		 $ukuran = $_POST['ukuran'];
		 $foto = $_POST['foto'];

		 $data = array(
		 	'nama_ruang' => $nama_ruang,
		 	'kapasitas' => $kapasitas,
		 	'fasilitas' => $fasilitas,
		 	'ukuran' => $ukuran,
		 	'foto' => $foto
		 );

		 $this->Admin_Room_model->ubah_data($data, $id_ruang);

		$this->session->set_flashdata('suksesubahRuang',true);

		 redirect('Admin_Room');

	}

	


}
