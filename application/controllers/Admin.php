<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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
	public function aksisosial()
	{
		if($this->session->userdata('status')=='Admin'){
		$jumlah_data = $this->Model->jumlah_data1();
		$config['base_url'] = base_url().'Admin/halaman';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data = array(
			'page' => 'v_adminaksi',
			'link' => 'v_adminaksi'
		);
		$data['user'] = $this->Model->dataa1($config['per_page'],$from);
		$data['dataa'] = $this->Model->getAKS1();
		$this->load->view('template/wrapper',$data);
	}
}
	public function berbagidana()
	{
		if($this->session->userdata('status')=='Admin'){
		$jumlah_data = $this->Model->jumlah_data2();
		$config['base_url'] = base_url().'Admin/halaman';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data = array(
			'page' => 'v_admindana',
			'link' => 'v_admindana'
		);
		$data['user'] = $this->Model->dataa2($config['per_page'],$from);
		$data['dataa'] = $this->Model->getBD1();
		$this->load->view('template/wrapper',$data);
	}
	}
	public function berbagibarang()
	{
		if($this->session->userdata('status')=='Admin'){
		$jumlah_data = $this->Model->jumlah_data3();
		$config['base_url'] = base_url().'Admin/halaman';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 10;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);
		$data = array(
			'page' => 'v_adminbarang',
			'link' => 'v_adminbarang'
		);
		$data['user'] = $this->Model->dataa3($config['per_page'],$from);
		$data['dataa'] = $this->Model->getBB1();
		$this->load->view('template/wrapper',$data);
	}
	}
	public function verifikasi_dana()
	{
		extract ($_POST);
		if($this->session->userdata('status')=='Admin'){
			$status = "'Sukses'";
			$queryUpdate2 = $this->Model->tambahTransaksiD($kampanye,$nominal);
			$queryUpdate = $this->Model->verifDana($id,$status);
			$alert = "<script>
					alert('Verifikasi sukses');
					window.location.href='".base_url()."Admin/berbagidana';
					</script>";
			$data = array(
				'alert' => $alert,
				'page' => 'notification',
				'link' => 'homee'
			);
			$this->load->view('template/wrapper',$data);
		}
	}
	public function verifikasi_barang()
	{
		extract ($_POST);
		if($this->session->userdata('status')=='Admin'){
			$status = "'Sukses'";
			$queryUpdate2 = $this->Model->tambahTransaksi($kampanye);
			$queryUpdate = $this->Model->verifBarang($id,$status);
			$alert = "<script>
					alert('Verifikasi sukses');
					window.location.href='".base_url()."Admin/berbagibarang';
					</script>";
			$data = array(
				'alert' => $alert,
				'page' => 'notification',
				'link' => 'homee'
			);
			$this->load->view('template/wrapper',$data);
		}
	}
	public function verifikasi_aksi()
	{
		extract ($_POST);
		if($this->session->userdata('status')=='Admin'){
			$status = "'Sukses'";
			$queryUpdate = $this->Model->verifAksi($id,$status);
			$alert = "<script>
					alert('Verifikasi sukses');
					window.location.href='".base_url()."Admin/aksisosial';
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
