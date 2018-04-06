<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function index(){
    $this->load->view('Registrasi');
  }

// 		extract ($_POST);
//
// 		$queryuser = $this->Model->ambil("username",md5(strtolower($inputUser)),"tbl_user");
// 		$queryUserEmail = $this->Model->ambil("email",$inputEmail,"tbl_user");
// 		if ($queryuser->result_array() != null){
// 			$alert = "<script>
// 					alert('Username telah digunakan !!');
// 					window.location.href='".base_url()."';
// 					</script>";
// 			$data = array(
// 				'alert' => $alert,
// 				'page' => 'notification',
// 				'link' => 'home'
// 			);
// 			$this->load->view('template/wrapper', $data);
// 		}else if ($queryUserEmail->result_array() != null){
// 			$alert = "<script>
// 					alert('Email telah digunakan !!');
// 					window.location.href='".base_url()."';
// 					</script>";
// 			$data = array(
// 				'alert' => $alert,
// 				'page' => 'notification',
// 				'link' => 'home'
// 			);
// 			$this->load->view('template/wrapper', $data);
// 		}else{
//
// 			if ($inputPass == $inputPassConfirm){
//
// 				$id = $this->getUniqueID()+1;
// 				$dataInsert = array(
// 					'id' => $id,
// 					'nama' => $inputNama,
// 					'email' => $inputEmail,
// 					'status' => 'non-active',
// 					'level' => '1',
// 					'username' => md5(strtolower($inputUser)),
// 					'password' => md5($inputPass)
// 				);
//
// 				$queryInsert = $this->Model->simpan_data($dataInsert,'tbl_user');
//
// 				$alert = "<script>
// 					alert('Register Sukses !!');
// 					window.location.href='".base_url()."index.php/Home';
// 					</script>";
// 				$data = array(
// 					'nameUser' => 'Login',
// 					'alert' => $alert,
// 					'page' => 'notification',
// 					'link' => 'home'
// 				);
// 				$this->load->view('template/wrapper', $data);
// 			}else{
// 				$alert = "<script>
// 				alert('Password tidak cocok!!');
// 				window.location.href='".base_url()."';
// 				</script>";
// 				$data = array(
// 					'alert' => $alert,
// 					'page' => 'notification',
// 					'link' => 'home'
// 				);
// 				$this->load->view('template/wrapper', $data);
// 			}
// 		}
// 	}
//
// 	function getUniqueID(){
//     	#fuction to get unique ID for tbl_user
//
//         $maxID = $this->Model->maxFrom('id','tbl_user');
//
//         return (int) $maxID;
//     }
//
// }


}
?>
