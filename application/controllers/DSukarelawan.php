<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DSukarelawan extends CI_Controller {

	public function index(){
		extract ($_POST);

    $queryuser = $this->Model->ambil("ts_nama",$inputNamaS,"tbl_sukarelawan");
		$queryUserEmail = $this->Model->ambil("ts_email",$inputEmailS,"tbl_sukarelawan");
    if ($queryuser->result_array() != null){
			$alert = "<script>
					alert('Username telah digunakan !!');
					window.location.href='".base_url()."index.php/timSukarelawan';
					</script>";
			$data = array(
				'alert' => $alert,
				 'page' => 'notification',
				 'link' => 'TimSukarelawan'
			);
			$this->load->view('template/wrapper', $data);
		}else if ($queryUserEmail->result_array() != null){
			$alert = "<script>
					alert('Email telah digunakan !!');
					window.location.href='".base_url()."index.php/timSukarelawan';
					</script>";
			$data = array(
				'alert' => $alert,
				 'page' => 'notification',
				 'link' => 'TimSukarelawan'
			);
			$this->load->view('template/wrapper', $data);
		}else{

				$id = $this->getUniqueID()+1;
				$dataInsert = array(
					'id' => $id,
					'ts_nama' => $inputNamaS,
					'ts_email' => $inputEmailS,
					'ts_nope' => $inputNope
        );

				$queryInsert = $this->Model->simpan_data($dataInsert,'tbl_sukarelawan');

				$alert = "<script>
					alert('Daftar Sukarelawan Sukses !!');
					window.location.href='".base_url()."';
					</script>";
				$data = array(
					'alert' => $alert,
					'page' => 'notification',
					'link' => 'home'
				);
				$this->load->view('template/wrapper', $data);
			}
		}


	function getUniqueID(){
    	#fuction to get unique ID for tbl_user

        $maxID = $this->Model->maxFrom('id','tbl_sukarelawan');

        return (int) $maxID;
    }
}
