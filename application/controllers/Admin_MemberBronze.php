<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_MemberBronze extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_Bronze_model');
        $this->load->model('Admin_Dashboard_model');
        $this->load->library(['PHPExcel', 'PHPExcel/IOFactory']);
    }
	public function index()
	{
		$data['peminjam'] = $this->Admin_Bronze_model->ambil_data()->result();
        $data['gold'] = $this->Admin_Dashboard_model->countGold();
        $data['silver'] = $this->Admin_Dashboard_model->countSilver();
        $data['bronze'] = $this->Admin_Dashboard_model->countBronze();
		$this->load->view('admin_MemberBronze',$data);
	}

	public function export()
    {
        $this->phpexcel->setActiveSheetIndex(0);
        $this->phpexcel->getActiveSheet()->setTitle('List Penyewa Bronze');

        $column = 'nama_instansi, nama, nohp, email';

        $users = $this->Admin_Bronze_model->all($column);

        if (!is_null($users)) {
            array_unshift(
                $users, ['No.', 'Nama Instansi', 'PIC', 'No Hp', 'Email']
            );
        }


        // Assign cell values
        $objSheet = $this->phpexcel->getActiveSheet();

        $objSheet->getColumnDimension('A')
            ->setWidth(6);
        $objSheet->getColumnDimension('B')
            ->setWidth(30);
        $objSheet->getColumnDimension('C')
            ->setWidth(30);
        $objSheet->getColumnDimension('D')
            ->setWidth(15);
        $objSheet->getColumnDimension('E')
            ->setWidth(35);
        $this->phpexcel->getActiveSheet()->fromArray($users);

        $filename= 'List Penyewa Bronze.xls'; //save our workbook as this file name

        header('Content-Type: application/vnd.ms-phpexcel'); //mime type

        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

        header('Cache-Control: max-age=0'); //no cache

        $objWriter = IOFactory::createWriter($this->phpexcel, 'Excel5');
        $objWriter->save('php://output');
    }

    //ubah kata sandi peminjam
  public function ubahKataSandiPeminjam(){
        $email = $this->input->post('email');
        $passBaru = "eds_".$this->Admin_Bronze_model->random_sandibaru(4);
        $this->Admin_Bronze_model->ubahKataSandiPeminjam($email,$passBaru);
        $this->session->set_flashdata('sukseskatasandiUbah',true);
      //  $data = $this->session();
        $data['error'] = "";
       // $data['peminjam1'] = $this->Admin_MemberGold_model->get_data_peminjam();
        $data['pass'] = $this->Admin_Bronze_model->random_katasandi(8);
        $data['sandi'] = $passBaru;

        $data['peminjam'] = $this->Admin_Bronze_model->ambil_data()->result();
        $data['gold'] = $this->Admin_Dashboard_model->countGold();
        $data['silver'] = $this->Admin_Dashboard_model->countSilver();
        $data['bronze'] = $this->Admin_Dashboard_model->countBronze();
        $this->load->view('admin_MemberBronze',$data);
        //redirect('Admin_MemberGold',$data);
    }

    //hapus data peminjam
    function hapus1($id_penyewa){
        $where = array('id_penyewa' => $id_penyewa);
        $this->Admin_Bronze_model->hapus_data($where,'peminjam');
        redirect('Admin_MemberBronze');
    }

    //tampil file
    public function syllabus_dwp(){
        if($this->session->userdata('logged_in')){
        $session_data = $this->session->userdata('logged_in');
        }
        $data = array(
        'page' => 'admin_MemberBronze',
        'result' => $this->Admin_Bronze_model->get_syllabus_dwp()
        );
        $this->load->view('admin_MemberBronze',$data);
    }
}

