<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_GoldStartUp extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_GoldStartUp_model');
        $this->load->library(['PHPExcel', 'PHPExcel/IOFactory']);
    }
    
	public function index()
	{
		$data['startup'] = $this->Admin_GoldStartUp_model->get_startup();
		$this->load->view('admin_GoldStartUp',$data);	
	}


	public function export()
    {
        $this->phpexcel->setActiveSheetIndex(0);
        $this->phpexcel->getActiveSheet()->setTitle('Booking StartUp Member');

        $users = $this->Admin_GoldStartUp_model->export();

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

        $filename= 'Booking StartUp Member.xls'; //save our workbook as this file name

        header('Content-Type: application/vnd.ms-phpexcel'); //mime type

        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

        header('Cache-Control: max-age=0'); //no cache

        $objWriter = IOFactory::createWriter($this->phpexcel, 'Excel5');
        $objWriter->save('php://output');
    }


    //hapus data 
  function hapus1($kode_booking){
    $where = array('kode_booking  ' => $kode_booking  );
    $this->Admin_GoldStartUp_model->hapus_data($where,'peminjaman_ruang');
    redirect('Admin_GoldPUI');
  }
}
