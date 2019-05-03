<?php
class Login extends CI_Controller{
  function __construct(){
    parent::__construct();
    $this->load->model('M_login');
  }

  function index(){
    $this->load->view('v_login');
  }

  function auth(){
    $username = $this->input->post('username',TRUE);
    $password = md5($this->input->post('password',TRUE));
    $validate = $this->M_login->validate($username,$password);
    if($validate->num_rows() > 0)
    {
      $data  = $validate->row_array();
			$username = $data['username'];
      $nama  = $data['nama'];
      $sesdata = array(
        'username'  => $username,
        'nama' => $nama,
        'logged_in' => TRUE
      );
      $this->session->set_userdata($sesdata);
      redirect('Home');
    }
    else
    {
      echo $this->session->set_flashdata('msg','Username atau Password Anda Salah!');
      redirect('Login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('Login');
  }

}
