<?php if(!$this->session->has_userdata('login')){
  $this->load->view('home');
}else{
  $this->load->view('home_login');
} ?>
