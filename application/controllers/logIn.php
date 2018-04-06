<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
		$this->load->view('login-page');

 }
	public function procLogin(){
		// extract ($_POST);
		// $this->load->model('model');
		//
		// $queryuser = $this->model->ambil("username",md5(strtolower($user)),"tbl_user");
		// if ($queryuser->result_array() == null){
		// 	$_SESSION['login'] = null;
		// 	$alert = "<script>
		// 			alert('Username salah !!');
		// 			window.location.href='".base_url()."';
		// 			</script>";
		// 	$data = array(
		// 		'alert' => $alert,
		// 		'page' => 'notification',
		// 		'link' => 'home'
		// 	);
		// 	$this->load->view('login-page', $data);
		// }else{
		// 	foreach($queryuser->result_array() as $queryuser){
		// 		$username = $queryuser['username'];
		// 		$password = $queryuser['password'];
		// 	}
		// 	if ($password == md5($pass)){
		// 		$alert = "<script>
		// 			alert('Login Sukses !!');
		// 			window.location.href='".base_url()."index.php/Home';
		// 			</script>";
		// 		$_SESSION['login'] = $queryuser['id'];
		// 		$_SESSION['status'] = $queryuser['status'];
		// 		$_SESSION['nama'] = $queryuser['nama'];
		// 		$_SESSION['username'] = $queryuser['username'];
		// 		$_SESSION['level'] = $queryuser['level'];
		// 		$data = array(
		// 			'nameUser' => 'Login',
		// 			'alert' => $alert,
		// 			'page' => 'notification',
		// 			'link' => 'home'
		// 		);
		// 		$this->load->view('home', $data);
		// 	}else{
		// 		$_SESSION['login'] = null;
		// 		$alert = "<script>
		// 		alert('Password Salah !!');
		// 		window.location.href='".base_url()."';
		// 		</script>";
		// 		// $data = array(
		// 		// 	'alert' => $alert,
		// 		// 	'page' => 'notification',
		// 		// 	'link' => 'home'
		// 		// );
		// 		$this->load->view('login-page', $data);
		// 	}
	 // }
	 extract($_POST);
	 $this->load->model('model');

	 $query = $this->model->getDataUser($_POST['username'])->result_array();

	 if($query == null){
			$data = array(
				'message' => "Login Failure !!"
			);
	 }else{
		 foreach ($query as $key => $value) {
			 # code...
			 $username = $value['username'];
			 $password = $value['password'];
			 if($password == $_POST['password']){
					$this->load->view('home');
			 }else{
				 $data = array(
					 'message' => "Wrong Password"
				 );
				 // $this->load->view($data);
			 }
		 }
	 }
	}
}
