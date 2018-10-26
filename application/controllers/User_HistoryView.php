<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_HistoryView extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        //$this->load->model('User_DaftarBronze_model');
    }
	public function index()
	{
		$this->load->view('user_HistoryView');
	}
}
