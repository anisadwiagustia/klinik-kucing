<?php

class Mengcomdb extends CI_Model {

  public function get_user($username, $password) {
    $this->db->where('username', $username);
    $this->db->where('password', $password);
    $query = $this->db->get('users');

    if ($query->num_rows() > 0) {
      return $query->row();
    } else {
      return false;
    }
  }
}
