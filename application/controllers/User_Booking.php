<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User_Booking extends CI_Controller {

	
	public function __construct()
    {
        parent::__construct();
        // Your own constructor code
        $this->load->model('User_Schedule_model');
    }
	public function index()
	{
		//ambil data yg login
		// $username = $this->session->userdata('login');
  //   echo $username;
    //transaksi
	    $data['transaksi'] = $this->User_Schedule_model->tampilTransaksi();
	    $data['ruang'] = $this->User_Schedule_model->tampilRuang();
		$data['kode_booking'] = $this->User_Schedule_model->buat_kode();
		$data['event'] = null;
		$this->load->view('User_Booking',$data);
	}

	public function booking(){
		//$id_transaksi = $this->input->post('id_transaksi');

	  $data['ruang'] = $this->User_Schedule_model->tampilRuang();
		$data['kode'] = $this->User_Schedule_model->buat_kode();


		$kode_booking = $this->input->post('kode_booking');
		$id_penyewa = $this->input->post('id_penyewa');
		$id_ruang = $this->input->post('nama_ruang');
		$tgl_mulai = $this->input->post('tgl_mulai');
		$jam_mulai = $this->input->post('jam_mulai');
		$tgl_selesai = $this->input->post('tgl_selesai');
		$jam_selesai = $this->input->post('jam_selesai');
		$event = $this->input->post('event');
		$nama_instansi = $this->input->post('nama_instansi');
		$surat = $this->input->post('surat');
		$cekRuangWaktu = $this->User_Schedule_model->cekRuangWaktu();
		$ada = false;
		$hasil = false;

		$config['upload_path']          = './scan/suratPinjam/';
		$config['allowed_types']        = 'pdf';
		$config['max_size']             = 0;
		
 
		$this->upload->initialize($config);
 
		if ( ! $this->upload->do_upload('surat')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('User_Schedule', $error);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$surat = base_url()."scan/suratPinjam/". $this->upload->data()['file_name'];
			//$surat = $this->upload->data()['file_name'];
		}

		$user_data = array(
			'kode_booking' => $kode_booking,
			'event' => $event,
			'tgl_mulai' => $tgl_mulai,
			'tgl_selesai' => $tgl_selesai,
			'jam_mulai' => $jam_mulai,
			'jam_selesai' => $jam_selesai,
			'status_pinjam' => 'Process',
			'surat' => $surat 
		);



		if(strtotime($tgl_mulai) == strtotime($tgl_selesai)){
				if(strtotime($jam_mulai) < strtotime($jam_selesai)){
						$i=0;
						foreach ($cekRuangWaktu->result() as $key) {
							if (((strtotime($key->tgl_mulai)+strtotime($key->jam_mulai)) <= (strtotime($tgl_mulai)+strtotime($jam_mulai)) && (strtotime($key->tgl_selesai)+strtotime($key->jam_selesai)) >= (strtotime($tgl_mulai)+strtotime($jam_mulai))) || ((strtotime($key->tgl_mulai)+strtotime($key->jam_mulai)) <= (strtotime($tgl_selesai)+strtotime($jam_selesai)) && (strtotime($key->tgl_selesai)+strtotime($key->jam_selesai)) >= (strtotime($tgl_selesai)+strtotime($jam_selesai)))) {
								$ada = true;
								$id_detail_peminjamanada[$i] = $key->kode_booking;
								$i++;
							}
						}

						if ($ada == true) {
							$dataRuangDipakai = $this->User_Schedule_model->getDataRuangDipakai($id_detail_peminjamanada);
							$k=0;
								foreach ($dataRuangDipakai->result() as $key) {
									for ($j=0; $j < count($_POST['nama_ruang']); $j++) {
										if ($key->id_ruang == $id_ruang[$j]) {
											$hasil = true;
											$nama_ruang_sudah_ada[$k] = $key->nama_ruang;
											$k++;
										} 
									}
								}

								if ($hasil == true) {
										$data['kode_booking'] = $kode_booking;
										$data['event'] = $event;

										$this->session->set_flashdata('gagalPinjamRuangAda',true);
										$data['nama_ruang_sudah_ada'] = $nama_ruang_sudah_ada;
										$this->load->view('user_Booking',$data);
									
								}else{
									//insert
									$this->User_Schedule_model->booking($user_data);
									$count = count($_POST['nama_ruang']);
									$id_ruang = $this->input->post('nama_ruang');

									for($i=0; $i<$count; $i++) {
										$data2 = array
										(
											'kode_booking'=>$kode_booking,
											'id_ruang'=>$id_ruang[$i],
											'id_penyewa'=>$id_penyewa, 
										);
								    	$this->User_Schedule_model->booking2($data2);
									}
									$data['pinjamruang'] = $this->User_Schedule_model->get_data_ruang_peminjaman();
									$this->session->set_flashdata('berhasilPinjam',true);
									redirect('User_Schedule');

								}
						}else{
							//langsung insert
								$this->User_Schedule_model->booking($user_data);
								$count = count($_POST['nama_ruang']);
								$id_ruang = $this->input->post('nama_ruang');

								for($i=0; $i<$count; $i++) {
									$data2 = array
									(
										'kode_booking'=>$kode_booking,
										'id_ruang'=>$id_ruang[$i],
										'id_penyewa'=>$id_penyewa, 
									);
							    	$this->User_Schedule_model->booking2($data2);
								}
								$data['pinjamruang'] = $this->User_Schedule_model->get_data_ruang_peminjaman();
								$this->session->set_flashdata('berhasilPinjam',true);
									redirect('User_Schedule');
					}

					}else{
						$this->session->set_flashdata('gagalwaktu',true);
						//redirect('User_Schedule','refresh');
					}
			}else if(strtotime($tgl_mulai) < strtotime($tgl_selesai)){
			$i=0;
					foreach ($cekRuangWaktu->result() as $key) {
						if (((strtotime($key->tgl_mulai)+strtotime($key->jam_mulai)) <= (strtotime($tgl_mulai)+strtotime($jam_mulai)) && (strtotime($key->tgl_selesai)+strtotime($key->jam_selesai)) >= (strtotime($tgl_mulai)+strtotime($jam_mulai))) || ((strtotime($key->tgl_mulai)+strtotime($key->jam_mulai)) <= (strtotime($tgl_selesai)+strtotime($jam_selesai)) && (strtotime($key->tgl_selesai)+strtotime($key->jam_selesai)) >= (strtotime($tgl_selesai)+strtotime($jam_selesai)))) {
							$ada = true;
							$id_detail_peminjamanada[$i] = $key->kode_booking;
							$i++;
						}
					}
					if ($ada == true) {
						$dataRuangDipakai = $this->User_Schedule_model->getDataRuangDipakai($id_detail_peminjamanada);
						$k=0;
						foreach ($dataRuangDipakai->result() as $key) {
							for ($j=0; $j < count($_POST['nama_ruang']); $j++) {
								if ($key->id_ruang == $id_ruang[$j]) {
									$hasil = true;
									$nama_ruang_sudah_ada[$k] = $key->nama_ruang;
									$k++;
								} 
							}
						}

						if ($hasil == true) {

								$data['kode_booking'] = $kode_booking;
								$data['tgl_mulai'] = $tgl_mulai;
								$data['tgl_selesai'] = $tgl_selesai;
								$data['jam_mulai'] = $jam_selesai;
								$data['jam_selesai'] = $jam_selesai;
								$data['surat'] = $surat;

								$this->session->set_flashdata('gagalPinjamRuangAda',true);
								$data['nama_ruang_sudah_ada'] = $nama_ruang_sudah_ada;
									redirect('User_Schedule');
							
						}else{
							//insert
							$this->User_Schedule_model->booking($user_data);
								$count = count($_POST['nama_ruang']);
								$id_ruang = $this->input->post('nama_ruang');

								for($i=0; $i<$count; $i++) {
									$data2 = array
									(
										'kode_booking'=>$kode_booking,
										'id_ruang'=>$id_ruang[$i],
										'id_penyewa'=>$id_penyewa, 
									);
							    	$this->User_Schedule_model->booking2($data2);
								}
								$data['pinjamruang'] = $this->User_Schedule_model->get_data_ruang_peminjaman();
								$this->session->set_flashdata('berhasilPinjam',true);
									redirect('User_Schedule');
						}
					}else{
						//langsung insert
						$this->User_Schedule_model->booking($user_data);
						$count = count($_POST['nama_ruang']);
						$id_ruang = $this->input->post('nama_ruang');

						for($i=0; $i<$count; $i++) {
							$data2 = array
							(
								'kode_booking'=>$kode_booking,
								'id_ruang'=>$id_ruang[$i],
								'id_penyewa'=>$id_penyewa, 
							);
					    	$this->User_Schedule_model->booking2($data2);
						}
						$data['pinjamruang'] = $this->User_Schedule_model->get_data_ruang_peminjaman();
						$this->session->set_flashdata('berhasilPinjam',true);
									redirect('User_Schedule');
					}

		}else{
			$this->session->set_flashdata('gagaltanggal',true);
			redirect('User_Schedule');
			//redirect('User_Schedule','refresh');
		}
	}
	
}
