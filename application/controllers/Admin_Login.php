<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Login extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_Login_model');
        //gak bisa diback ngeload ke model user
        
    }
	public function index()
	{
		//untuk login gak bisa diback
		if($this->Admin_Login_model->cekLogin()){
	    	redirect('Admin_Dashboard');
	    }
		$this->load->view('admin_Login');
	}

	public function logout(){
		$array_data = array('email', 'login');
		$this->session->unset_userdata($array_data);
		redirect('Admin_Login');
	}

	public function verify()
	{
		if($this->Admin_Login_model->cekLogin()){ //cek login
    		redirect('Admin_Dashboard');
    	}
		//ambil data dari form login
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');

		// cek ke database 
		$cek = $this->Admin_Login_model->cek_login($email,$pass);

		if ($cek->num_rows()>0){
			//buat sesi baru
			$data_session = array (
				'email' => $email,
				'login' => true
			);
			$this->session->set_userdata($data_session);
			
			redirect('Admin_Dashboard');
		}
		
		//jika tidak ditemukan 
		else{
			$this->session->set_flashdata('error', 'Email or password is wrong!');
			redirect('Admin_Login');
		}
	}

	
}
