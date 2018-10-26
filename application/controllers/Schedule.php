<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Schedule extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Schedule_model');
        $this->load->model('Admin_Schedule_model');
    }
	public function index()
	{
		$data['adule'] = $this->Admin_Schedule_model->adule();
		$this->load->view('schedule',$data);
	}
}
