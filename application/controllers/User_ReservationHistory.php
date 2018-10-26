<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_ReservationHistory extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('User_model');
    }
	public function index()
	{
		$email = $this->session->userdata('email');
		$data['history'] = $this->User_model->history($email);
		$this->load->view('user_ReservationHistory',$data);
	}
}
