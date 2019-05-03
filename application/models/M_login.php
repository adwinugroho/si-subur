<?php
class M_login extends CI_Model{

  public function validate($username,$password)
  {
    $this->load->database();
    $this->db->where('username',$this->db->escape_str($username));
    $this->db->where('password',$this->db->escape_str($password));
    $result = $this->db->get('user',1);
    return $result;
  }

}
