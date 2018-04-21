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
		extract ($_POST);
		$this->load->model('Model');

		$queryuser = $this->Model->ambil("username",$username,"user");
		$querypass = $this->Model->ambil("password",$password,"user");
		if (($queryuser->result_array() == null) && ($querypass->result_array() == null)){
			$_SESSION['login'] = null;
			$alert = "<script>
					alert('Username dan Password salah !!');
					window.location.href='".base_url()."index.php/login';
					</script>";
			$data = array(
				'alert' => $alert,
				'page' => 'notification',
				'link' => 'login-page'
			);
			$this->load->view('template/wrapper', $data);
		}else if($queryuser->result_array() == null){
			$_SESSION['login'] = null;
			$alert = "<script>
					alert('Username salah !!');
					window.location.href='".base_url()."index.php/login';
					</script>";
			$data = array(
				'alert' => $alert,
				'page' => 'notification',
				'link' => 'login-page'
			);
			$this->load->view('template/wrapper', $data);
		}else{
			foreach($queryuser->result_array() as $queryuser){
				$user = $queryuser['username'];
				$pass = $queryuser['password'];
			}
			if ($password == $pass){
				$alert = "<script>
					alert('Login Sukses !!');
					window.location.href='".base_url()."';
					</script>";
				$_SESSION['login'] = $queryuser['id'];
				$_SESSION['nama'] = $queryuser['u_namab'];
				$_SESSION['username'] = $queryuser['username'];
				$data = array(
					'nameUser' => 'Login',
					'alert' => $alert,
					'page' => 'notification',
					'link' => 'home_login'
				);
				$this->load->view('template/wrapper', $data);
			}else{
				$_SESSION['login'] = null;
				$alert = "<script>
				alert('Password Salah !!');
				window.location.href='".base_url()."';
				</script>";
				$data = array(
					'alert' => $alert,
					'page' => 'notification',
					'link' => 'login-page'
				);
				$this->load->view('template/wrapper', $data);
			}
	 }
	 // extract($_POST);
	 // $this->load->model('Model');
	 //
	 // $query = $this->Model->getDataUser($_POST['username'])->result_array();
	 //
	 // if($query == null){
		// 	$data = array(
		// 		'message' => "Login Failure !!"
		// 	);
	 // }else{
		//  foreach ($query as $key => $value) {
		// 	 # code...
		// 	 $username = $value['username'];
		// 	 $password = $value['password'];
		// 	 if($password == $_POST['password']){
		// 			$this->load->view('home_login');
		// 	 }else{
		// 		 $data = array(
		// 			 'message' => "Wrong Password"
		// 		 );
		// 		 // $this->load->view($data);
		// 	 }
		//  }
	 // }
	}
}
