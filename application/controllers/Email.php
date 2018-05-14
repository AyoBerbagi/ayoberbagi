<?php defined('BASEPATH') OR exit('No direct script access allowed');
 class Email extends CI_Controller {
  public function send()
  {
   $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'm.sholehalhabibsan@gmail.com',
    'smtp_pass' => 'a1618119o',
    'mailtype' => 'html',
    'charset' => 'iso-8859-1'
   );
   $this->load->library('email', $config);
   $this->email->set_newline("\r\n");
   $this->email->from('m.sholehalhabibsan@gmail.com', 'Admin Ayo Berbagi');
   $this->email->to('m.sholehalhabibsan@gmail.com');
   $this->email->subject('Verifikasi Akun');
   $this->email->message('Verifikasi Akun anda melalui pesan email ini, ');
   if (!$this->email->send()) {
    show_error($this->email->print_debugger());
   }else{
    $sukses =  "Success to send email";
    $this->load->view('about',$sukses);
   }
  }
 }
