<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Bronze extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_Bronze_model');
        $this->load->library(['PHPExcel', 'PHPExcel/IOFactory']);
    }
	public function index()
	{
		$data['bronze'] = $this->Admin_Bronze_model->get_bronze();
		$this->load->view('admin_Bronze',$data);
	}


	public function export()
    {
        $this->phpexcel->setActiveSheetIndex(0);
        $this->phpexcel->getActiveSheet()->setTitle('Booking Bronze Member');

        $users = $this->Admin_Bronze_model->export();

        if (!is_null($users)) {
            array_unshift(
                $users, ['No.', 'Kode Booking', 'Nama Ruang', 'Tanggal Mulai', 'Tanggal Selesai', 'Jam Mulai', 'Jam Selesai', 'Acara', 'Status Peminjaman']
            );
        }
        

        // Assign cell values
        $objSheet = $this->phpexcel->getActiveSheet();

        $objSheet->getColumnDimension('A')
            ->setWidth(6);
        $objSheet->getColumnDimension('B')
            ->setWidth(15);
        $objSheet->getColumnDimension('C')
            ->setWidth(20);
        $objSheet->getColumnDimension('D')
            ->setWidth(15);
        $objSheet->getColumnDimension('E')
            ->setWidth(15);
        $objSheet->getColumnDimension('F')
            ->setWidth(15);
        $objSheet->getColumnDimension('G')
            ->setWidth(15);
        $objSheet->getColumnDimension('H')
            ->setWidth(30);
        $objSheet->getColumnDimension('I')
            ->setWidth(20);
        $this->phpexcel->getActiveSheet()->fromArray($users);

        $filename= 'Booking Bronze Member.xls'; //save our workbook as this file name

        header('Content-Type: application/vnd.ms-phpexcel'); //mime type

        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

        header('Cache-Control: max-age=0'); //no cache

        $objWriter = IOFactory::createWriter($this->phpexcel, 'Excel5');
        $objWriter->save('php://output');
    }

    //ubah kata sandi peminjam
  public function ubahKataSandiPeminjam(){
        $email = $this->input->post('email');
        $passBaru = "eds_".$this->Admin_MemberGold_model->random_sandibaru(4);
        $this->Admin_MemberGold_model->ubahKataSandiPeminjam($email,$passBaru);
        $this->session->set_flashdata('sukseskatasandiUbah',true);
      //  $data = $this->session();
        $data['error'] = "";
       // $data['peminjam1'] = $this->Admin_MemberGold_model->get_data_peminjam();
        $data['pass'] = $this->Admin_MemberGold_model->random_katasandi(8);
        $data['sandi'] = $passBaru;

        $data['peminjam'] = $this->Admin_MemberGold_model->ambil_data()->result();
        $data['gold'] = $this->Admin_Dashboard_model->countGold();
        $data['silver'] = $this->Admin_Dashboard_model->countSilver();
        $data['bronze'] = $this->Admin_Dashboard_model->countBronze();
        $this->load->view('admin_MemberGold',$data);
        //redirect('Admin_MemberGold',$data);
    }



 //hapus data 
  function hapus1($kode_booking){
    $where = array('kode_booking  ' => $kode_booking  );
    $this->Admin_Bronze_model->hapus_data($where,'peminjaman_ruang');
    redirect('Admin_Bronze');
  }
}
