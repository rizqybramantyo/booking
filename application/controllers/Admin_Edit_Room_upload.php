<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Edit_Room_upload extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
    }

	public function index()
	{
		$this->load->view('admin_EditRoom_UploadImage');
	}
}

