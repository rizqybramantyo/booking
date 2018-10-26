<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Schedule extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('User_Schedule_model');
        $this->load->model('Admin_Schedule_model');
    }
	public function index()
	{
		//ambil data yg login
		// $username = $this->session->userdata('login');
  //   echo $username;
    //transaksi
    $data['transaksi'] = $this->User_Schedule_model->tampilTransaksi();
    $data['adule'] = $this->Admin_Schedule_model->adule();
    //tampil ruang
    $data['ruang'] = $this->User_Schedule_model->tampilRuang();
		$data['kode_booking'] = $this->User_Schedule_model->buat_kode();
		
		$this->load->view('user_Schedule',$data);
	}
}
