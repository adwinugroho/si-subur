<?php
class Histori extends CI_Controller
{

  public $datakirim;
  function __construct()
  {
    parent::__construct();
    if ($this->session->userdata('logged_in') !== TRUE) {
      redirect('Login');
    }
  }

  public function index()
  {
    $this->load->Model('M_home');
    if ($this->session->userdata('username') === 'diahrisqiwati') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus_arr();
      $this->load->view('v_histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'vinasn') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus1_arr();
      $this->load->view('v_histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'evidw') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus2_arr();
      $this->load->view('v_histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'nia') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus3_arr();
      $this->load->view('v_histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'gita') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus4_arr();
      $this->load->view('v_histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'nurhy') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus5_arr();
      $this->load->view('v_histori', $this->datakirim);
    } else {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus6_arr();
      $this->load->view('v_histori', $this->datakirim);
    }
  }

  public function cetak()
  {
    $this->load->Model('M_home');
    ob_start();
    if ($this->session->userdata('username') === 'diahrisqiwati') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus_arr();
      $this->load->view('cetak/histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'vinasn') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus1_arr();
      $this->load->view('cetak/histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'evidw') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus2_arr();
      $this->load->view('cetak/histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'nia') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus3_arr();
      $this->load->view('cetak/histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'gita') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus4_arr();
      $this->load->view('cetak/histori', $this->datakirim);
    } elseif ($this->session->userdata('username') === 'nurhy') {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus5_arr();
      $this->load->view('cetak/histori', $this->datakirim);
    } else {
      $this->datakirim['histori'] = $this->M_home->getAllSiklus6_arr();
      $this->load->view('cetak/histori', $this->datakirim);
    }
    $html = ob_get_contents();
    ob_end_clean();

    require('./assets/html2pdf/html2pdf.class.php');
    $pdf = new HTML2PDF('P', 'A4', 'en', true, 'UTF-8', 0);
    //$pdf->SetDisplayMode('fullpage');
    $pdf->WriteHTML($html);
    $pdf->Output('Data User.pdf');
  }

  function preview()
  {
    $this->load->Model('M_home');
    $this->datakirim['histori'] = $this->M_home->getAllSiklus1_arr();
    $this->load->view('cetak/histori', $this->datakirim);
  }

  function delete($id)
  {
    // code...
  }

  function chart($id)
  {
    // code...
  }
}
