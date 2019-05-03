<?php
class M_home extends CI_Model
{
  //insert otomatis
  public function insert($namatabel, $id, $created_at, $jam, $entry_id, $field2, $id_user, $harike)
  {
    $this->load->database();
    $res = $this->db->query("insert ignore into `$namatabel` values($id, '$created_at', '$jam', $entry_id, $field2, '$id_user', '$harike')");
		return $res;
  }
  public function select_get_jumlah_where($namatabel, $data_where)
  {
    $query = $this->db->get_where($namatabel, $data_where);
    return $query->num_rows();
  }
  public function getAllsiklus()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_otomatis` where id_user = 0");
    return $query;
  }

  public function getAllsiklus_arr()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_otomatis` where id_user = 0");
    return $query->result();
  }

  public function getAllsiklus1()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 1");
    return $query;
  }
  public function getAllsiklus1_arr()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 1");
    return $query->result();
  }
  public function getAllsiklus2()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 2");
    return $query;
  }

  public function getAllsiklus2_arr()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 2");
    return $query->result();
  }

  public function getAllsiklus3()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 3");
    return $query;
  }
  public function getAllsiklus3_arr()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 3");
    return $query->result();
  }

  public function getAllsiklus4()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 4");
    return $query;
  }

  public function getAllsiklus4_arr()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 4");
    return $query->result();
  }

  public function getAllsiklus5()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 5");
    return $query;
  }

  public function getAllsiklus5_arr()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 5");
    return $query->result();
  }

  public function getAllsiklus6()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 6");
    return $query;
  }

  public function getAllsiklus6_arr()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `siklus_manual` where id_user = 6");
    return $query->result();
  }

  public function get_detail_siklus($id)
  {
    $this->load->database();
    $this->load->library('session');
    $idapa = $this->session->userdata('id_user');
    $query = $this->db->query("select * from `siklus_manual` where id = $id");
    return $query->result_array();
  }

  public function getAllprofil()
  {
    $this->load->database();
    $this->load->library('session');
    $id = $this->session->userdata('id_user');
    $query = $this->db->query("select * from `user` where id_user = 0");
    return $query->result_array();
  }

  public function getAllprofil1()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `user` where id_user = 1");
    return $query->result();
  }

  public function getAllprofil2()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `user` where id_user = 2");
    return $query->result();
  }

  public function getAllprofil3()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `user` where id_user = 3");
    return $query->result();
  }

  public function getAllprofil4()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `user` where id_user = 4");
    return $query->result();
  }

  public function getAllprofil5()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `user` where id_user = 5");
    return $query->result();
  }

  public function getAllprofil6()
  {
    $this->load->database();
    $this->load->library('session');
    $iddisposisi = $this->session->userdata('id');
    $query = $this->db->query("select * from `user` where id_user = 6");
    return $query->result();
  }

  public function edit_siklus_otomatis($id, $harike)
  {
      $query = $this->db->query("UPDATE `siklus_otomatis` SET `hari_ke` = $harike WHERE `id` = $id;");
  }

  public function edit_siklus_manual($id, $harike)
  {
      $query = $this->db->query("UPDATE `siklus_manual` SET `hari_ke` = $harike WHERE `id` = $id;");
  }

  public function hapus_siklus_otomatis($id)
  {
      $query = $this->db->query("DELETE FROM `siklus_otomatis` WHERE `id` = $id;");
  }

  public function hapus_siklus_manual($id)
  {
      $query = $this->db->query("DELETE FROM `siklus_manual` WHERE `id` = $id;");
  }

  public function edit_profil($username, $password, $id_user, $nama, $email)
  {
      $query = $this->db->query("UPDATE `profil` SET `username` = $username, `password` = $password,
        `nama` = $nama, `email` = $email WHERE `id_user` = $id_user;");
  }
}
