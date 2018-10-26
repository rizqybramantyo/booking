<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Profile extends CI_Controller {

    
    public function __construct()
    {
        parent::__construct();

        
        $this->load->model('User_model');
    }

    public function index()
    {
        $this->load->view('User_Profile');
        
    }

    //change pass user

  public function ubahKataSandi(){
    $email = $this->input->post('email');
    $pass = $this->input->post('pass');
    $oldpass = $this->input->post('oldpass');
    $newpass = $this->input->post('newpass');
    $repass = $this->input->post('repass');
    
    if(md5($oldpass) == $pass){
      if($newpass == $repass){
        $this->User_model->ubahSandi($email,$newpass);
        $this->session->set_flashdata('kataSandiBerhasil',true);
        $this->load->view('User_Profile');
       //redirect('cPeminjam/hal_profil_peminjam','refresh');
      }else{
        $this->session->set_flashdata('kataSandiTidakCocok',true);
        $this->load->view('User_Profile');
       // redirect('cPeminjam/hal_profil_peminjam','refresh');
      }
    }else{
      $this->session->set_flashdata('kataSandiGagal',true);
      $this->load->view('User_Profile');
      //redirect('cPeminjam/hal_profil_peminjam','refresh');
    }
  }

    

    
 

}
    

