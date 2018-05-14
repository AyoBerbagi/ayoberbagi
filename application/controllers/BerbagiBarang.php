<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerbagiBarang extends CI_Controller {

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
		$infoKampanye = $this->Model->getBB()->result_array();
		if($infoKampanye == null){
			$data = array(
				'infoKampanye' => $infoKampanye,
				'eror' => "Belum ada Kampanye",
				'page' => 'BarangList',
				'link' => 'BarangList'
			);
			$this->load->view('template/wrapper',$data);
		}else{
			$data = array(
				'infoKampanye' => $infoKampanye,
				'page' => 'BarangList',
				'link' => 'BarangList'
			);
			$this->load->view('template/wrapper',$data);
		}
	}
	public function kontribusi()
	{
		$id = $_POST['id_kampanye'];
		$ambil = $this->Model->ambil("id_kampanye",$id,"infokampanye")->result_array();
		$data = array(
			'ambil' => $ambil,
			'page' => 'v_berbagibarang',
			'link' => 'v_berbagibarang'
		);
		$this->load->view('template/wrapper',$data);
	}
	public function done()
	{
		extract ($_POST);
		$id = $_POST['id_kampanye'];
		if($syarat==null){
			$alert = "<script>
					alert('Harus menyetujui ketentuan yang ada !!');
					window.location.href='".base_url()."BerbagiBarang/kontribusi/$id';
					</script>";
			$data = array(
						'alert' => $alert,
						'page' => 'notification',
						'link' => 'v_berbagibarang'
			);
			$this->load->view('template/wrapper',$data);
		}else{
			$idGet = $this->getUniqueID()+1;
			$id_user = $_SESSION['login'];
			$nope = $_SESSION['nohp'];
			$kategori = $_POST['katergori'];
			$tanggal = date('Y-m-d');
			$status = "Menunggu";
			$dataInsert = array(
				'id_berbagibarang' => $idGet,
				'kategori_barang' => $kategori,
				'bb_nope' => $nope,
				'bb_tanggal' => $tanggal,
				'bb_status' => $status,
				'id_user' => $id_user,
				'id_kampanye' => $id
			);
			$queryInsert = $this->Model->simpan_data($dataInsert,'tbl_berbagibarang');
			$queryUpdate = $this->Model->tambahTUser($_SESSION['login']);
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
			$message .= "Terimakasih telah memilih berbagi barang. Selanjutnya, silahkan lakukan pengiriman barang ke alamat :\r\n";
			$message .= "Jalan Terusan Ryacudu\r\n";
			$message .= "Sebelum masa pengumpulan donasi berakhir. Lakukan pengecekan status transaksi pada menu profil Anda.\r\n";
			$message .= "\r\n\r\n--\r\nRegards,\r\n----------------------------------------\r\n Berbagiituindah Team";
			$this->email->message($message);
			if (!$this->email->send()) {
			 show_error($this->email->print_debugger());
			}else{
				$alert = "<script>
						alert('Terimakasih telah berkontribusi dalam berbagi barang, Silahkan cek email anda untuk melihat status transaksi');
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
	}
	function getUniqueID(){
    	#fuction to get unique ID for tbl_user

        $maxID = $this->Model->maxFrom('id_berbagibarang','tbl_berbagibarang');

        return (int) $maxID;
  }

}
