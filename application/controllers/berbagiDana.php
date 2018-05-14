<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BerbagiDana extends CI_Controller {

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
		$infoKampanye = $this->Model->getBD()->result_array();
		if($infoKampanye == null){
			$data = array(
				'infoKampanye' => $infoKampanye,
				'eror' => "Belum ada Kampanye",
				'page' => 'ListKampanye',
				'link' => 'ListKampanye'
			);
			$this->load->view('template/wrapper',$data);
		}else{
			$data = array(
				'infoKampanye' => $infoKampanye,
				'page' => 'ListKampanye',
				'link' => 'ListKampanye'
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
			'page' => 'v_berbagidana2',
			'link' => 'v_berbagidana2'
		);
		$this->load->view('template/wrapper',$data);
	}
	public function done()
	{
		extract($_POST);
	 	$this->form_validation->set_rules('Rtransfer', 'RTransfer', 'required');
		if ($syarat==null) {
			$alert = "<script>
					alert('Harus menyetujui ketentuan yang ada !!');
					window.location.href='".base_url()."berbagiDana/kontribusi/$id';
					</script>";
			$data = array(
						'alert' => $alert,
						'page' => 'notification',
						'link' => 'v_berbagidana2'
			);
			$this->load->view('template/wrapper',$data);
		}else{
			$jmlTransfer = preg_replace("/[^0-9]/", "", $nominal);
			$jmlTransfer = (int) $jmlTransfer;
			if($jmlTransfer>=25000){
			if ($this->form_validation->run()) {
				$idGet = $this->getUniqueID()+1;
				$id_user = $_SESSION['login'];
				$nope = $_SESSION['nohp'];
				$tanggal = date('Y-m-d');
				$status = "Menunggu";
			 	$transfer = $Rtransfer;
				$dataInsert = array(
					'id_berbagidana' => $idGet,
					'bd_nominal' => $jmlTransfer,
					'metode_pembayaran' => $transfer,
					'bd_nope' => $nope,
					'bd_tanggal' => $tanggal,
					'bd_status' => $status,
					'id_user' => $id_user,
					'id_kampanye' => $_POST['id_kampanye']
				);
				$queryInsert = $this->Model->simpan_data($dataInsert,'tbl_berbagidana');
				$queryUpdate = $this->Model->tambahTUser($id_user);
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
		    $this->email->subject('Donasi Dana');
				if($transfer == "BNI"){
					$message = "Hai Kontributor\r\n";
					$message .= "Terimakasih atas kepercayaan anda dalam berbagi dana melalui Ayo Berbagi\r\n";
					$message .= "Berikut No Rek : 023 827 2096\r\n";
					$message .= "Status Transaksi Anda Saat ini adalah Menunggu, jika Anda telah melakukan transaksi ke Rekening kami Status anda akan berubah menjadi Sukses\r\n";
					$message .= "\r\n\r\n--\r\nRegards,\r\n----------------------------------------\r\n Berbagiituindah Team";
					$this->email->message($message);
				}else if($transfer == "BCA"){
					$message = "Hai Kontributor\r\n";
					$message .= "Terimakasih atas kepercayaan anda dalam berbagi dana melalui Ayo Berbagi\r\n";
					$message .= "Berikut No Rek : 731 025 1601\r\n";
					$message .= "Status Transaksi Anda Saat ini adalah Menunggu, jika Anda telah melakukan transaksi ke Rekening kami Status anda akan berubah menjadi Sukses\r\n";
					$message .= "\r\n\r\n--\r\nRegards,\r\n----------------------------------------\r\n Berbagiituindah Team";
					$this->email->message($message);
				}else if($transfer == "Mandiri"){
					$message = "Hai Kontributor\r\n";
					$message .= "Terimakasih atas kepercayaan anda dalam berbagi dana melalui Ayo Berbagi\r\n";
					$message .= "Berikut No Rek : 0700 000 999 996\r\n";
					$message .= "Status Transaksi Anda Saat ini adalah Menunggu, jika Anda telah melakukan transaksi ke Rekening kami Status anda akan berubah menjadi Sukses\r\n";
					$message .= "\r\n\r\n--\r\nRegards,\r\n----------------------------------------\r\n Berbagiituindah Team";
					$this->email->message($message);
				}
		    if (!$this->email->send()) {
		     show_error($this->email->print_debugger());
		    }else{
					$alert = "<script>
  						alert('Terimakasih telah berkontribusi dalam berbagi dana, Silahkan cek email anda untuk melihat status transaksi');
  						window.location.href='".base_url()."';
  						</script>";
  				$data = array(
  					'alert' => $alert,
  					'page' => 'notification',
  					'link' => 'homee'
  				);
					$this->load->view('template/wrapper',$data);
		    }
		 	} else {
				$alert = "<script>
						alert('Pilih salah satu metode pembayaran !!');
						window.location.href='".base_url()."berbagiDana/kontribusi/$id';
						</script>";
			  $error = validation_errors();
				$data = array(
					'error' => $error,
					'alert' => $alert,
					 'page' => 'notification',
					 'link' => 'v_berbagidana2'
				);
				$this->load->view('template/wrapper', $data);
		 	}
		}else{
			$alert = "<script>
					alert('Donasi harus lebih dari Rp. 25.000 !!');
					window.location.href='".base_url()."berbagiDana/kontribusi/$id';
					</script>";
			$data = array(
				'alert' => $alert,
				 'page' => 'notification',
				 'link' => 'v_berbagidana2'
			);
			$this->load->view('template/wrapper', $data);
		}
	}
	}
	function getUniqueID(){
		#fuction to get unique ID for tbl_user

			$maxID = $this->Model->maxFrom('id_berbagidana','tbl_berbagidana');

			return (int) $maxID;
	}
}
