<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Aksisosial extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$jumlah_data = $this->Model->jumlah_data();
		$config['base_url'] = base_url().'AksiSosial/index';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data = array(
			'page' => 'AksiSosial',
			'link' => 'AksiSosial'
		);
		$data['user'] = $this->Model->dataa($config['per_page'],$from);
		$data['dataa'] = $this->Model->getAKS();
		$this->load->view('template/wrapper',$data);
	}
	public function kontribusi()
	{
		extract($_POST);
		$getID = $this->getUniqueID()+1;
		$dataInsert = array(
			'id_aksisosial' => $getID,
			'nama_desa' => $nama,
			'alamat_desa' => $alamat,
			'tanggal_pelaksanaan' => date('Y-m-d'),
			'aks_status' => "Menunggu",
			'id_user' => $_SESSION['login']
		 );
		 $queryInsert = $this->Model->simpan_data($dataInsert,'tbl_aksisosial');
		 $config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'm.sholehalhabibsan@gmail.com',
			'smtp_pass' => 'a1618119o',
			'mailtype' => 'html',
			'charset' => 'iso-8859-1'
		 );
		 $this->load->library('email', $config);
		 $this->email->set_newline("\r\n");
		 $this->email->from('m.sholehalhabibsan@gmail.com', 'Admin Ayo Berbagi');
		 $this->email->to($_SESSION['email']);
		 $this->email->subject('Donasi Barang');
		 $message = "Hai Kontributor\r\n";
		 $message .= "Terimakasih telah mengajukan kegiatan pengabdian masyarakat di ";
		 $message .= $nama;
		 $message .= "\r\n";
		 $message .= "Silahkan daftarkan tim Anda (min 30 orang ) dengan format:\r\n";
		 $message .= "No. Urut :\r\n";
		 $message .= "Nama     :\r\n";
		 $message .= "No. Hp   :\r\n";
		 $message .= "Melalui email sebelum (3 hari sesudah pengajuan).\r\n";
		 $message .= "Lakukan pengecekan status pengajuan pada menu profil Anda.\r\n";
		 $message .= "\r\n\r\n--\r\nRegards,\r\n----------------------------------------\r\n Berbagiituindah Team";
		 $this->email->message($message);
		 if (!$this->email->send()) {
			show_error($this->email->print_debugger());
		 }else{
			 $alert = "<script>
					 alert('Terimakasih telah berkontribusi dalam pengabdian masyarakat, Silahkan cek email anda untuk melihat status transaksi');
					 window.location.href='".base_url()."';
					 </script>";
			 $data = array(
				 'alert' => $alert,
				 'page' => 'notification',
				 'link' => 'homee'
			 );
			 $this->load->view('template/wrapper',$data);
		 }
	}
	function getUniqueID(){
		#fuction to get unique ID for tbl_user

			$maxID = $this->Model->maxFrom('id_aksisosial','tbl_aksisosial');

			return (int) $maxID;
	}
}
