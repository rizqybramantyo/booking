<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Map extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        //$this->load->model('Admin_AddRoom_model');
    }
	public function index()
	{
		$this->load->view('admin_Map');
	}
}