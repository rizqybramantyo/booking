<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_GoldRegistration extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('User_Registration_model');
    }
	public function index()
	{
		$data['no_identitas'] = null;
		$data['nama_instansi'] = null;
		$data['nama'] = null;
		$data['anggota1'] = null;
		$data['anggota2'] = null;
		$data['nohp'] = null;
		$this->load->view('user_GoldRegistration',$data);
	}

	public function registrasi(){
		$no_identitas	 = $this->input->post('no_identitas');
		$nama_instansi = $this->input->post('nama_instansi');
		$nama = $this->input->post('nama');
		$anggota1 = $this->input->post('anggota1');
		$anggota2 = $this->input->post('anggota2');
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');
		$pass = $this->input->post('pass');

		$cekemail_peminjam = $this->db->query("select * from peminjam where email='$email'");
		if ($cekemail_peminjam->num_rows() == null) {
			$user_data = array(
				'no_identitas' => $no_identitas,
				'nama_instansi' => $nama_instansi,
				'nama' => $nama,
				'anggota1' => $anggota1,
				'anggota2' => $anggota2,
				'email' => $email,
				'nohp' => $nohp,
				'pass' => $pass,
				'jenisPaket' => 1,
				'gold' => 'StartUp'
			);
			$this->User_Registration_model->startup($user_data);
			// $this->User_Registration_model->silver($no_identitas,$nama_instansi,$nama,$email,$nohp,$pass,3);
			$this->session->flashdata('suksestambah',true);
			$data['no_identitas'] = null;
			$data['nama_instansi'] = null;
			$data['nama'] = null;
			$data['anggota1'] = null;
			$data['anggota2'] = null;
			$data['email'] = null;
			$data['nohp'] = null;
			$data['pass'] = null;
		//	$data['scan'] = null;
			redirect('user_Login');
		}
		else{
			$this->session->set_flashdata('gagalregistrasi',true);
			$data['no_identitas'] = $no_identitas;
			$data['nama_instansi'] = $nama_instansi;
			$data['nama'] = $nama;
			$data['anggota1'] = $anggota1;
			$data['anggota2'] = $anggota2;
			$data['email'] = null;
			$data['nohp'] = $nohp;
			$data['pass'] = null;
		//	$data['scan'] = $scan;
			$this->load->view('user_GoldRegistration',$data);
		}
		}
}