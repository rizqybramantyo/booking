<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_GoldPUI extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('Admin_GoldPUI_model');
        $this->load->library(['PHPExcel', 'PHPExcel/IOFactory']);
    }
	public function index()
	{
		//tak komen kek mer
		$data['pui'] = $this->Admin_GoldPUI_model->get_pui();
		$this->load->view('admin_GoldPUI',$data);
	}

//add PUI registrasi
	public function addPui(){
		$no_identitas = $this->input->post('no_identitas');
		$nama_instansi = $this->input->post('nama_instansi');
		$email = $this->input->post('email');
		$pass = $this->input->post('pass');
	
		$cekemail_peminjam = $this->db->query("select * from peminjam where email='$email'");
		if ($cekemail_peminjam->num_rows() == null) {
			$user_data = array(
				'email' => $email,
				'jenisPaket' => 1,
				'gold' => pui,
				'nama_instansi' => $nama_instansi,
				'no_identitas' => $no_identitas,
				'pass' => $pass,
				
			);
			$this->Admin_GoldPUI_model->tambahPui($user_data);
			
			$this->session->set_flashdata('suksestambah',true);
			$data['no_identitas'] = null;
			$data['nama_instansi'] = null;
			$data['email'] = null;
			$data['pass'] = null;
	
			redirect('Admin_GoldPUI');
		}
		else{
			$this->session->flashdata('gagalregistrasi',true);
			$data['no_identitas'] = null;
			$data['nama_instansi'] = null;
			$data['email'] = null;
			$data['pass'] = null;
		
			$this->load->view('admin_GoldPUI',$data);
		}
	}


	public function export()
    {
        $this->phpexcel->setActiveSheetIndex(0);
        $this->phpexcel->getActiveSheet()->setTitle('Booking PUI Member');

        $users = $this->Admin_GoldPUI_model->export();

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

        $filename= 'Booking PUI Member.xls'; //save our workbook as this file name

        header('Content-Type: application/vnd.ms-phpexcel'); //mime type

        header('Content-Disposition: attachment;filename="'.$filename.'"'); //tell browser what's the file name

        header('Cache-Control: max-age=0'); //no cache

        $objWriter = IOFactory::createWriter($this->phpexcel, 'Excel5');
        $objWriter->save('php://output');
    }

    //hapus data 
  function hapus1($kode_booking){
    $where = array('kode_booking  ' => $kode_booking  );
    $this->Admin_GoldPUI_model->hapus_data($where,'peminjaman_ruang');
    redirect('Admin_GoldPUI');
  }
}