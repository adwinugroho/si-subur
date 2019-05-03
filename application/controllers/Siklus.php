<?php
class Siklus extends CI_Controller{

  public $datakirim;
  public $msg;
  public $msg_error;
  public $msg_delete;
  public $msg_update;
  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('Login');
    }
  }

  public function index(){
    $this->load->Model('M_home');
    if ($this->session->userdata('username') === 'diahrisqiwati') {
      $x['siklus'] = $this->M_home->getAllSiklus();
      $this->load->view('v_siklus', $x);
    }
    elseif ($this->session->userdata('username') === 'vinasn') {
      $x['siklus'] = $this->M_home->getAllSiklus1();
      $this->load->view('v_siklus', $x);
    }
    elseif ($this->session->userdata('username') === 'evidwi') {
      $x['siklus'] = $this->M_home->getAllSiklus2();
      $this->load->view('v_siklus', $x);
    }
    elseif ($this->session->userdata('username') === 'lailatulhusniah') {
      $x['siklus'] = $this->M_home->getAllSiklus3();
      $this->load->view('v_siklus', $x);
    }
    elseif ($this->session->userdata('username') === 'gitaindah') {
      $x['siklus'] = $this->M_home->getAllSiklus4();
      $this->load->view('v_siklus', $x);
    }
    elseif ($this->session->userdata('username') === 'nurhayatin') {
      $x['siklus'] = $this->M_home->getAllSiklus5();
      $this->load->view('v_siklus', $x);
    }
    else {
      $x['siklus'] = $this->M_home->getAllSiklus6();
      $this->load->view('v_siklus', $x);
    }
    //$this->datakirim['dataedit'] = $this->M_home->get_detail_siklus($id);
  }

  function create()
  {
    // $this->input->post('nama_di_view');
    $id = $this->input->post('id');
    $tanggal = $this->input->post('created_at');
    $jam = $this->input->post('jam');
    $suhu = $this->input->post('field2');
    $id_user = $this->input->post('id_user');

    //ke array
    //array('nama_di_kolom_table' => variabel yang dideklarasikan diatas)
    $datasiklus = array(
      'id' => $id,
      'created_at' => $tanggal,
      'jam' => $jam,
      'field2' => $suhu,
      'id_user' => $id_user
    );
    $this->load->database();
    // $this->db->insert('nama_tabel', $data_array_yang_diatas)
    $insert_siklus = $this->db->insert('siklus_manual', $datasiklus);
    if ($insert_siklus)
    {
      $this->session->set_flashdata('msg','isi pesan');
      redirect('Siklus');
    }
    else
    {
      $this->session->set_flashdata('msg_error','isi pesan');
      redirect('Siklus');
    }
  }
  function create_hari()
  {
    //$this->input->post('nama_di_view')
    $id = $this->input->post('id');
    $harike = $this->input->post('harike');

    // $this->db->insert('nama_tabel', $data_array_yang_diatas)
    $this->load->model('M_home');
    $update_hari = $this->M_home->edit_siklus_otomatis($id, $harike);
    $update_hari_manual = $this->M_home->edit_siklus_manual($id, $harike);
    if(!$update_hari)
    {
      $this->session->set_flashdata('msg_update','isi pesan');
      redirect('Siklus');
    }

    if(!$update_hari_manual)
    {
      $this->session->set_flashdata('msg_update','isi pesan');
      redirect('Siklus');
    }
  }


  function delete($id)
  {
    $this->load->model('M_home');
    $delete_hari = $this->M_home->hapus_siklus_otomatis($id);
    $delete_hari_manual = $this->M_home->hapus_siklus_manual($id);
    if(!$delete_hari)
    {
      $this->session->set_flashdata('msg_delete','isi pesan');
      redirect('Siklus');
    }

    if(!$delete_hari_manual)
    {
      $this->session->set_flashdata('msg_delete','isi pesan');
      redirect('Siklus');
    }
  }

}
