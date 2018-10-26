<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Room extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('User_Room_model');
    }
	public function index()
	{
		//tampil ruang
    $data['ruang'] = $this->User_Room_model->tampilRuang();
		$this->load->view('user_Room',$data);
	}
}
