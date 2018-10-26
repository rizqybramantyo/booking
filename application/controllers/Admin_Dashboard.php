<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_Dashboard_model');
        $this->load->model('Admin_Login_model');
    }
	public function index()
	{
		$data['gold'] = $this->Admin_Dashboard_model->countGold();
		$data['silver'] = $this->Admin_Dashboard_model->countSilver();
		$data['bronze'] = $this->Admin_Dashboard_model->countBronze();
		$this->load->view('admin_Dashboard',$data);
	}
}


