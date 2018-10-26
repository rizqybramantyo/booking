<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Summary extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_Summary_model');
    }
	public function index()
	{
		$data['summary'] = $this->Admin_Summary_model->summary();
		$this->load->view('admin_Summary',$data);
	}
}
