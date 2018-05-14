<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

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
		$infoUser = $this->Model->ambil('id',$_SESSION['login'],'user')->result_array();
		$transaksi = $this->Model->ambil('id_user',$_SESSION['login'],'tbl_berbagidana')->result_array();
		$transaksi2 = $this->Model->ambil('id_user',$_SESSION['login'],'tbl_berbagibarang')->result_array();
		$pengabdian = $this->Model->ambil('id_user',$_SESSION['login'],'tbl_aksisosial')->result_array();
		$data = array(
			'transaksi' => $transaksi,
			'transaksi2' => $transaksi2,
			'pengabdian' => $pengabdian,
			'infoUser' => $infoUser,
			'page' => 'profil',
			'link' => 'profil'
		);
		$this->load->view('template/wrapper', $data);
	}
	public function changeFoto(){
		if(!$this->session->has_userdata('login')){
					$alert = "<script>
									alert('Access ditolak !!');
									window.location.href='".base_url()."';
									</script>";
					$data = array(
							'alert' => $alert,
							'page' => 'notification',
							'link' => 'home'
					);

					$this->load->view('template/wrapper', $data);
			}else{

			$config['upload_path']      = './assets/upload/';
			$config['allowed_types']    = 'gif|jpg|png';
			$config['file_name']				= $_SESSION['username'].'.png';
			$config['overwrite']				= true;
			$config['max_size']         = 2048;
			$config['max_width']        = 1024;
			$config['max_height']       = 768;

			$dataUpdate = array(
						'foto' => $_SESSION['username'].'.png'
			);

				$queryUpdate = $this->Model->update("id",$_SESSION['login'],"user",$dataUpdate);

				$this->load->library('upload', $config);
		if ( !$this->upload->do_upload('inputFoto'))
		{
			$alert = "<script>
			alert('Gambar tidak valid!!');
			window.location.href='".base_url()."/index.php/Profil';
			</script>";
			$data = array(
				'alert' => $alert,
				'page' => 'notification',
				'link' => 'profil'
			);
			$this->load->view('template/wrapper', $data);
		}
		else
		{
			$alert = "<script>
				alert('Foto berhasil diganti!!');
				window.location.href='".base_url()."index.php/Profil';
				</script>";
			$data = array(
				'alert' => $alert,
				'page' => 'notification',
				'link' => 'profil'
			);
			$this->load->view('template/wrapper', $data);
		}
	}
	}
	public function edit(){
		extract($_POST);
		$dataUpdate = array(
				'u_nope' => $nope,
				'u_lokasi' => $lokasi
		 );
		$_SESSION['nope'] = $nope;
		$queryUpdate = $this->Model->update("id",$_SESSION['login'],"user",$dataUpdate);

			$alert = "<script>
							alert('Update profile success !!');
							window.location.href='".base_url()."index.php/Profil';
							</script>";
			$data = array(
					'alert' => $alert,
					'page' => 'notification',
					'link' => 'profil'
			);

			$this->load->view('template/wrapper', $data);
	}
}
