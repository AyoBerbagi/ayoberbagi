<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kampanye extends CI_Controller {

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
		$this->load->view('kampanye');
	}
	public function newKampanye()
	{
		extract ($_POST);
		$id = $this->getUniqueID()+1;
		$filename = 'userfile';
		$namaFile = $id;
		$namaFile .= "_";
		$namaFile .= substr($_SESSION['nama'],0,5);
		$namaFile .= ".png";
		if ($_FILES['userfile']['name']!= "")
   {
		$config['upload_path']      = './assets/upload/';
		$config['allowed_types']    = 'gif|jpg|png|exe|xls|doc|docx|xlsx|rar|zip';
		$config['max_size']         = 8192;
		$config['file_name']				= $namaFile;
		$config['max_width']        = 1024;
		$config['max_height']       = 768;
		$config['overwrite']				= true;

		$this->load->library('upload',$config);
	if(!$this->upload->do_upload($filename))
	{
		$alert = "<script>
		alert('File tidak valid!!');
		window.location.href='".base_url()."Kampanye';
		</script>";
		$data = array(
			'alert' => $alert,
			'page' => 'notification',
			'link' => 'kampanye'
		);
		$this->load->view('template/wrapper', $data);
	}
	else
	{
		$file = $this->upload->data();
		$dataInsert = array(
			'id_kampanye' => $id,
			'nama_kampanye' => $namaKampanye,
			'i_jenis' => $jenisKampanye,
			'deskripsi' => $Deskripsi,
			'file' => $namaFile,
			'i_tanggal_mulai' => date('Y-m-d'),
			'i_tanggal_berakhir' => $i_tanggal_berakhir
		);
		$queryInsert = $this->Model->simpan_data($dataInsert,'infokampanye');
		$alert = "<script>
			alert('Kampanye telah berhasil dibuat');
			window.location.href='".base_url()."Kampanye';
			</script>";
		$data = array(
			'alert' => $alert,
			 'page' => 'notification',
			 'link' => 'kampanye'
		);
		$this->load->view('template/wrapper', $data);
	}
	}
	}


function getUniqueID(){
	#fuction to get unique ID for tbl_user

		$maxID = $this->Model->maxFrom('id_kampanye','infokampanye');

		return (int) $maxID;
}
}
