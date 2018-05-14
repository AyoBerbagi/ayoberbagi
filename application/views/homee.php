<?php if(!$this->session->has_userdata('login')){
  $this->load->view('home');
}else{
  if($this->session->userdata('status')=='Admin'){
      $this->load->view('admin');
  }else{
    $this->load->view('home_login');
  }
} ?>
