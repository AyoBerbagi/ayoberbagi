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
	function getUniqueID(){
		#fuction to get unique ID for tbl_user

			$maxID = $this->Model->maxFrom('id_kampanye','infokampanye');

			return (int) $maxID;
	}
}
