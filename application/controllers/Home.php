<?php
class Home extends CI_Controller{
  var $API ="";
  function __construct(){
    parent::__construct();
    //$this->load->model('M_login');
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('Login');
    }
  }

  function index(){
    $this->load->view('v_home');
  }

  function create()
  {
    $url = 'https://thingspeak.com/channels/511007/field/2.json';
    $isiarr = json_decode(json_encode($isi));
    $response = file_get_contents($url);
    $content = json_decode($response);
    $isi = $content->feeds;

    $this->load->database();
    $this->load->Model('M_home');

    foreach ($isi as $key)
    {
      $id = 0;
      $harike = 0;
      date_default_timezone_set("Asia/Jakarta");
      $tanggal_awal = $key->created_at;
      $cektahun = substr($tanggal_awal,0,4);
      $potongtanggal = substr($tanggal_awal,0,10);
      $jam_lengkap = substr($tanggal_awal,11,8);
      $jam_depan = substr($tanggal_awal,11,2);
      $convert_jam = strtotime($tanggal_awal);
      $jam_sebelum = date("Y-m-d H:i:s", $convert_jam);
      $jam_sesudah = substr($jam_sebelum,11,8);
      $entry_id = $key->entry_id;
      $id_entry = (int)$entry_id;
      $field2 = $key->field2;
      $suhu = (float)$field2;

      $namatabel = 'siklus_otomatis';
      if ($this->session->userdata('username') === 'diahrisqiwati') {
        $id_user = '0';
      }
      if ($cektahun == '2019' AND $entry_id >= 150)
      {
          $insert = $this->M_home->insert($namatabel, $id, $potongtanggal, $jam_sesudah, $id_entry, $suhu, $id_user, $harike);
      }
    }
    if ($insert)
    {
      redirect('Home');
    }
  }

  function getGrafik()
  {
    $this->load->Model('M_home');
    if ($this->session->userdata('username') === 'diahrisqiwati') {
      $data = $this->M_home->getAllsiklus_arr();
      echo json_encode($data);
    }
    elseif ($this->session->userdata('username') === 'vinasn') {
      $data = $this->M_home->getAllsiklus1_arr();
      echo json_encode($data);
    }
    elseif ($this->session->userdata('username') === 'evidwi') {
      $data = $this->M_home->getAllsiklus2_arr();
      echo json_encode($data);
    }
    elseif ($this->session->userdata('username') === 'lailatulhusniah') {
      $data = $this->M_home->getAllsiklus3_arr();
      echo json_encode($data);
    }
    elseif ($this->session->userdata('username') === 'gitaindah') {
      $data = $this->M_home->getAllsiklus4_arr();
      echo json_encode($data);
    }
    elseif ($this->session->userdata('username') === 'nurhayatin') {
      $data = $this->M_home->getAllsiklus5_arr();
      echo json_encode($data);
    }
    else {
      $data = $this->M_home->getAllsiklus6_arr();
      echo json_encode($data);
    }
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
