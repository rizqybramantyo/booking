<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_SilverRegistration extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('User_Registration_model');
         $this->load->helper(array('form', 'url'));
    }
	public function index()
	{
		$data['no_identitas'] = null;
		$data['nama_instansi'] = null;
		$data['nama'] = null;
		$data['nohp'] = null;
		$this->load->view('user_SilverRegistration',$data); //, array('error'=> ' ')


	}

	public function registrasi(){
		$no_identitas = $this->input->post('no_identitas');
		$nama_instansi = $this->input->post('nama_instansi');
		$nama = $this->input->post('nama');
		$email = $this->input->post('email');
		$nohp = $this->input->post('nohp');
		$pass = $this->input->post('pass');
		//$scan = $this->input->post('scan'); 
		//$scan = $this->upload->data();
		//$scan_name = $scan['file_name'];

		$config['upload_path']          = './scan/identitas/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 0;
		
 
		$this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload('scan')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('User_SilverRegistration', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$scan = base_url()."scan/identitas/". $this->upload->data()['file_name'];
		}
		
		$cekemail_peminjam = $this->db->query("select * from peminjam where email='$email'");
		if ($cekemail_peminjam->num_rows() == null) {
			$user_data = array(
				'email' => $email,
				'jenisPaket' => 2,
				'nama' => $nama,
				'nama_instansi' => $nama_instansi,
				'nohp' => $nohp,
				'no_identitas' => $no_identitas,
				'pass' => $pass,
				'scan' => $scan
			);
			$this->User_Registration_model->silver($user_data);
			// $this->User_Registration_model->silver($no_identitas,$nama_instansi,$nama,$email,$nohp,$pass,3);
			$this->session->set_flashdata('suksesregistrasi',true);
			$data['no_identitas'] = null;
			$data['nama_instansi'] = null;
			$data['nama'] = null;
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
			$data['email'] = null;
			$data['nohp'] = $nohp;
			$data['pass'] = null;
		//	$data['scan'] = $scan;
			$this->load->view('user_SilverRegistration',$data);
		}
	}


	
}
