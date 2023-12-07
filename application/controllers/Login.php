<?php

class Login extends CI_Controller {

  public function index() {
    $this->load->view('account/v_login');
  }

  public function login() {
    $username = $this->input->post('username');
    $password = $this->input->post('password');

    $user = $this->user_model->get_user($username, $password);

    if ($user) {
      $this->session->set_userdata('user', $user);
      redirect('home');
    } else {
      $this->session->set_flashdata('error', 'Username atau password salah');
      redirect('login');
    }
  }
}
