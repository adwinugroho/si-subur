<?php
class Profil extends CI_Controller{

  public $datakirim;
  public $msg;
  public $msg_error;
  public $x;
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('Login');
    }
  }

  public function index(){
    $this->load->Model('M_home');
    if ($this->session->userdata('username') === 'diahrisqiwati') {
      $x['profil'] = $this->M_home->getAllprofil();
      $this->load->view('v_profil', $x);
    }
    elseif ($this->session->userdata('username') === 'vinasn') {
      $x['profil'] = $this->M_home->getAllprofil1();
      $this->load->view('v_profil', $x);
    }
    elseif ($this->session->userdata('username') === 'evidwi') {
      $x['profil'] = $this->M_home->getAllprofil2();
      $this->load->view('v_profil', $x);
    }
    elseif ($this->session->userdata('username') === 'lailatulhusniah') {
      $x['profil'] = $this->M_home->getAllprofil3();
      $this->load->view('v_profil', $x);
    }
    elseif ($this->session->userdata('username') === 'gitaindah') {
      $x['profil'] = $this->M_home->getAllprofil4();
      $this->load->view('v_profil', $x);
    }
    elseif ($this->session->userdata('username') === 'nurhayatin') {
      $x['profil'] = $this->M_home->getAllprofil5();
      $this->load->view('v_profil', $x);
    }
    else {
      $x['profil'] = $this->M_home->getAllprofil6();
      $this->load->view('v_profil', $x);
    }
    //$this->datakirim['dataedit'] = $this->M_home->get_detail_siklus($id);
  }

  function edit()
  {
    //$this->input->post('nama_di_view')
    $id_user = $this->input->post('id_user');
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $nama = $this->input->post('nama');
    $email = $this->input->post('email');


    $this->load->model('M_home');
    $update_profil = $this->M_home->edit_profil($username, $password);
    $this->session->set_flashdata('msg','isi pesan');
    redirect('Profil');
  }

}
