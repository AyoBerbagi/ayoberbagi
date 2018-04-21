<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Registrasi extends CI_Controller {

	public function index(){
		extract ($_POST);

    $queryuser = $this->Model->ambil("username",$inputUser,"user");
		$queryUserEmail = $this->Model->ambil("u_email",$inputEmail,"user");
    if ($queryuser->result_array() != null){
			$alert = "<script>
					alert('Username telah digunakan !!');
					window.location.href='".base_url()."';
					</script>";
			$data = array(
				'alert' => $alert,
				 'page' => 'notification',
				 'link' => 'Registrasi'
			);
			$this->load->view('template/wrapper', $data);
		}else if ($queryUserEmail->result_array() != null){
			$alert = "<script>
					alert('Email telah digunakan !!');
					window.location.href='".base_url()."';
					</script>";
			$data = array(
				'alert' => $alert,
				 'page' => 'notification',
				 'link' => 'Registrasi'
			);
			$this->load->view('template/wrapper', $data);
		}else{
			if ($inputPass == $inputPassRe){

				$id = $this->getUniqueID()+1;
				$dataInsert = array(
					'id' => $id,
					'username' => $inputUser,
					'password' => $inputPass,
					'u_namad' => $inputNamaDepan,
					'u_namab' => $inputNamaBelakang,
					'u_email' => $inputEmail,
					'u_jk' => $inputJK
        );

				$queryInsert = $this->Model->simpan_data($dataInsert,'user');

				$alert = "<script>
					alert('Register Sukses !!');
					window.location.href='".base_url()."index.php/Home';
					</script>";
				$data = array(
					'nameUser' => 'Login',
					'alert' => $alert,
					 'page' => 'notification',
					 'link' => 'home'
				);
				$this->load->view('template/wrapper', $data);
			}else{
				$alert = "<script>
				alert('Password tidak cocok!!');
				window.location.href='".base_url()."';
				</script>";
				$data = array(
					'alert' => $alert,
					 'page' => 'notification',
					 'link' => 'Registrasi'
				);
				$this->load->view('template/wrapper', $data);
			}
		}
	}

	function getUniqueID(){
    	#fuction to get unique ID for tbl_user

        $maxID = $this->Model->maxFrom('id','user');

        return (int) $maxID;
    }

}
