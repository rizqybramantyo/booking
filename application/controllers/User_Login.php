<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Login extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->database();
        $this->load->model('User_Login_model');
    }
	public function index()
	{
		if($this->User_Login_model->cekLogin()){
	    	redirect('user_Profile');
	    }
		$this->load->view('user_Login');
	}

	public function logout(){
		$array_data = array('email', 'login');
		$this->session->unset_userdata($array_data);
		redirect('User_Login');
	}

	public function verify()
	{
		if($this->User_Login_model->cekLogin()){
    		redirect('user_Profile');
    	}
		//ambil data dari form login
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		// cek ke database 
		$cek = $this->User_Login_model->cek_login($email,$pass);

		if ($cek->num_rows()>0){
			//buat sesi baru
			$data_session = array (
				'email' => $email,
				'no_identitas' => $data['no_identitas'],
				'nama_instasi' => $data['nama_instasi'],
				'nohp' => $data['nohp'],
				'login' => true
			);
			$this->session->set_userdata($data_session);
			
			redirect('user_Profile');
		}
		
		//jika tidak ditemukan 
		else{
			$this->session->set_flashdata('error', 'Email or password is wrong!');
			redirect('User_Login');
		}
	}
}
