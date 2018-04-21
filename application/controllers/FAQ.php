<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FAQ extends CI_Controller {

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
		$this->load->view('FAQ(Aksi Sosial)');
	}
  public function berbagibarang()
	{
		$this->load->view('FAQ(Berbagi Barang)');
	}
  public function panduan()
	{
		$this->load->view('FAQ(Panduan Umum)');
	}
  public function donatur()
	{
		$this->load->view('FAQ(Untuk Donatur)');
	}
  public function campaigner()
	{
		$this->load->view('FAQ(untuk campaigner');
	}
}
